<?php

include "./db_connect.php";


$errors =  ['email' => '', 'title' => "", 'ingredients' => ""];
$email = $title = $ingredients = "";


if (isset($_POST['submit'])) {
    // echo  htmlspecialchars($_POST['email']);  // prevent xss attacks
    // echo '<br>';
    // echo  htmlspecialchars($_POST['title']);  // prevent xss attacks
    // echo '<br>';
    // echo  htmlspecialchars($_POST['ingredients']);  // prevent xss attacks
    // echo '<br>';

    if (empty($_POST['email'])) {
        $errors['email'] = "Email is Required <br>";

        # code...
    } else {
        $email =  $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email is Not Valid <br>";
            # code...
        }

        // echo  htmlspecialchars($_POST['email']);  // prevent xss attacks
        // echo '<br>';
    }

    if (empty($_POST['title'])) {
        $errors['title'] = "title is Required <br>";
        echo '<br>';

        # code...
    } else {
        $title =  $_POST['title'];
        if (!preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/', trim($title))) {
            echo "";
            $errors['title'] = "title must be lettrs and space only <br>";
        };

        // echo  htmlspecialchars($_POST['title']);  // prevent xss attacks
        // echo '<br>';
    }
    if (empty($_POST['ingredients'])) {
        // echo "ingredients Required";
        $errors['ingredients'] = "ingredients Required <br>";


        # code...
    } else {
        $ingredients =  $_POST['ingredients'];
        if (!preg_match('/^[a-zA-Z]+(?:,[a-zA-Z]+)*$/', trim($ingredients))) {
            $errors['ingredients'] = "ingredients  is not valid <br>";
        };


        // echo  htmlspecialchars($_POST['ingredients']);  // prevent xss attacks
        // echo '<br>';
    }


    if (!array_filter($errors)) {
        $email =  mysqli_real_escape_string($conn, $_POST['email']);
        $ingredients =  mysqli_real_escape_string($conn, $_POST['ingredients']);
        $title =  mysqli_real_escape_string($conn, $_POST['title']);


        $sql  =  "INSERT INTO pizza(title,email,ingredients) VALUES ('$title','$email','$ingredients')";

        if (mysqli_query($conn, $sql)) {
            header(('Location: index.php'));
        } else {
            // echo "query error  " . mysqli_error($conn);
        }
    }
}

?>




<!DOCTYPE html>
<html>

<?php include('template/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="<?php  echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
        <label>Your Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email);   ?>">
        <div class="red-text"><?php echo $errors['email']; ?>
        </div>
        <label>Pizza Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title);   ?>">
        <div class="red-text"><?php echo $errors['title']; ?>
        </div>
        <label>Ingredients (comma separated)</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients);   ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?>
        </div>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('template/footer.php'); ?>

</html>
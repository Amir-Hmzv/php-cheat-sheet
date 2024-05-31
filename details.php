<?php

include  "./db_connect.php";




echo $is_to_delete;
if (isset($_POST['delete'])) {
    $is_to_delete =    mysqli_escape_string($conn, $_POST['id_to_delete']);

    $sql =  "DELETE FROM pizza WHere id = $is_to_delete";

    if (mysqli_query($conn, $sql)) {

        header('location: index.php');
    } else {
        echo  'query error' . mysqli_error($conn);
    }
}




if (isset($_GET['id'])) {
    // Retrieve 'name' query parameter
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql =  "SELECT * FROM  pizza WHERE id=$id";


    $result =  mysqli_query($conn, $sql);



    $pizza =   mysqli_fetch_assoc($result);


    mysqli_free_result($result);

    mysqli_close($conn);


    print_r($pizza);
    
}




?>






<!DOCTYPE html>
<html lang="en">
<?php include './template/header.php' ?>

<div class="container center">
    <?php if ($pizza) { ?>
        <h4><?php echo $pizza['title']; ?></h4>
        <p>Created by <?php echo $pizza['email']; ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo $pizza['ingredients']; ?></p>

        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo  $pizza['id'];  ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

    <?php } else { ?>
        <h5>No such pizza exists.</h5>
    <?php } ?>
</div>

<?php include 'template/footer.php' ?>

</html>
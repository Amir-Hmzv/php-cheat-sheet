<?php
// import from other files
// include('./names.php');
// also we can use require for imprt too
// require('./names.php');   // if have type error   countinue of code wont run



// vars

// $name = "HI";

// define("sex","BBB");
// echo sex;
// echo $name;



// string


// $firstName  = "amir";
// $lasName  = "Hmazavi";




// echo  'hi '.$firstName;
// echo  "hi  $firstName  $lasName"


// echo strlen($firstName);    // length string
// echo strtolower($firstName);  lowercase
// echo strtoupper($lasName);  uper case
//  echo str_replace('m','n',$lasName);   repleace char



// number

// $age  = 24;

// $float = 3.14;




// echo  (2 + 4 )* 3;   () is imprtant

// $age++;    //  age  + 1
// echo $age;
//   $age--;  // age -1


// $age += 22 ;  // age = age + 22

// $age -= 22 ;  // age = age + 22

// echo $age;


// echo floor($float);   // rounded to up
// echo  ceil($float); // rounded to down


// Boolean



// true in php is  1
// false in php is ""

// $flag = false;
// echo $flag;

// echo intval($flag);



// Arrays


// indexed Arrays

// $peopleOne =  ['ali','reza','gholam'];

// $peopleTwo =  array('ali','niayesh');

// echo $peopleOne[0];

// echo $peopleTwo[1];


// $myNumber = [1, 2, 3, 4, 5];
// // echo($myNumber);   // doesnt show




// array_push($myNumber, 6);   // push new value
// $myNumber[] =  7;  //push new value
// $myNumber[0] =  7;  //replace  value

// // print_r($myNumber);  // make readable


// $myVlas = [9, "hi", true];


// $mixed = array_merge($myVlas, $myNumber);

// // print_r($mixed);  // make readable


// $name = array_pop($myVlas);

// print_r($name);  // delted val

// $myValLength = count($myVlas); //length of array

// print_r($myValLength);




// associative arrays 

// $teamsOne  =  ['red'  => 'manchester' , 'blue' => 'taj'];
// $teamsTwo   =  array('IR' => 'Iran');

//  $esteghla  =  $teamsOne['blue'];
// print_r($esteghla);







// multy dimensional array 




// $books = [
//     ['book' => 'boof koor ',   'author' => 'sadegh heady'],
//     ['book' => 'asar morakab',   'author' => 'daren hardi '],
//     ['book' => 'demnee',   'author' => 'simin danshvar']
// ];


// // echo $books[1][0];
// echo $books[1]['book'];



// echo true;
// echo false ? 'true' : 'false';

// echo 2 === 2;   // true
// echo  2 > 6;   // false 


// echo  true && true;  // true
// echo  false || true;  //  true
// echo   1 != 7 ;  //true

// if (2 == 5) {
//     # code...
//     echo "Hi";
// } elseif( 4 == 4) {
//     echo "Hello";
// } 

// else {
//     echo "bye";
// }


// for ($hi=0; $hi < 10 ; $hi++) { 
//     # code...
//     echo "<br>";
//     echo $hi;
// }

// $arr =  ['hello ', 'hi', 'bye'];
// for ($i=0; $i <  count($arr) ; $i++) { 
//     # code...
//     // echo '<br>';
//     echo $arr[$i].'<br>';
// }


// foreach ($arr as $key  => $ar) {
//     echo '<br>' . $ar;
//     echo '<br>' . $key;
//     # code...
// }




// while

// $a = 1;
// while ($a <= 10) {
//     # code...
//     echo  "hi"."<br>";
//     $a++;

// }


// var_dump($arr,'<br>',$arr);   // shows  vars





$movies = [
    [
        "name" => "Inception",
        "year" => 2010,
        "rate" => 8.8
    ],
    [
        "name" => "The Shawshank Redemption",
        "year" => 1994,
        "rate" => 9.3
    ],
    [
        "name" => "The Godfather",
        "year" => 1972,
        "rate" => 9.2
    ],
    [
        "name" => "The Dark Knight",
        "year" => 2008,
        "rate" => 9.0
    ],
    [
        "name" => "Pulp Fiction",
        "year" => 1994,
        "rate" => 8.9
    ]
];

// echo "<ul>";
// foreach ($movies as $movie) {
//     echo "<li>";
//     echo "<strong>Name:</strong> " . $movie['name'] . " - ";
//     echo "<strong>Year:</strong> " . $movie['year'] . " - ";
//     echo "<strong>Rate:</strong> " . $movie['rate'];
//     echo "</li>";
// }
// echo "</ul>";






// Functions



// function sayHello($name) : void {
//     echo "hello $name ";
//     echo '<br>';
// }


// sayHello('amir');
// sayHello('hasasn');
// sayHello('reza');


// function sum($a,$b) : int {

//     return   $a + $b;
// };

// $res =  sum(5,20);

// echo $res;




// Variable Scope 

// function FunctionName($name)
// {
//     $lord  = $name;
//     echo "Hi  $lord";
// };

// echo $lord;   // doesnt work because $lord is not global



// $myRes =  FunctionName('ali');
// echo $myRes;




// ..............................................



// $name = 'ali';

// function myFunc() {

//     echo "HI  $name";    // error because name is not inside func 
// };



// $name = 'ali';

// function myFunc()
// {

//     global $name;  // make name global

//     $name = 'mina';

//     echo "HI  $name";    // error because name is not inside func 
// };

// myFunc();

// echo '<br>' . $name;  // shows mina   because we made it into global and change in function


include "./db_connect.php";


$sql =  "SELECT title,email,ingredients, id  FROM  pizza";

$result =  mysqli_query($conn, $sql);
// $result = $conn->query($sql);
// Initialize an array to hold the data


// $dataArray = array();

// if ($result->num_rows > 0) {
//     // Fetch the data into the array
//     while($row = $result->fetch_assoc()) {
//         $dataArray[] = $row;
//     }
// } else {
//     echo "0 results";
// }


$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result);
mysqli_close($conn);

print_r($pizzas);

// echo "<pre>";
// print_r($dataArray);
// echo "</pre>";
// 
?>

?>



<!-- html -->



<!DOCTYPE html>
<html lang="en">

<?php include './template/header.php'; ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
    <div class="row">

        <?php foreach ($pizzas as $pizza) { ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) { ?>
                                <li><?php echo htmlspecialchars($ing); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo htmlspecialchars($pizza['id']);   ?>">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<?php include './template/footer.php'; ?>

</html>
























<!-- include -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use Include</title>
</head>

<body>

    <div>
        <?php

        include('./content.php');
        ?>

    </div>

</body>

</html> -->

<!--  mixing  html and php -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mixing  html and php</title>
</head>

<body>
    <?php foreach ($movies as $movie) { ?>
        <h3><?php echo  $movie['name'] . ' - ' . $movie['year'] ?></h3>

        <p><?php echo  $movie['rate'] ?></p>

    <?php   } ?>
</body>

</html>
 -->
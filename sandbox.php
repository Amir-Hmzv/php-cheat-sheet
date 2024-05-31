<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$filename = 'text.txt';

// if (file_exists($filename)) {
//     $file = fopen($filename, 'r+');

//     // read file
//     $content = fread($file, filesize($filename)); //get all chars

//     // echo $content;

//     // rewind the file pointer to the beginning of the file
//     rewind($file);

//     // read one line
//     // echo fgets($file);
//     // echo fgets($file);


//     // get single char
//     // echo fgetc($file);


//     fwrite($file, 'hello iran');


//     // fclose($file);
// } else {
//     echo "file not found";
// }


// if (file_exists($filename)) {
//     // $file = fopen($filename, 'r+');  // open for reading and writing
//     $file = fopen($filename, 'a+');  // open for reading and writing   last of texts without replace

//     // read file
//     // $content = fread($file, filesize($filename)); // get all chars

//     // rewind the file pointer to the beginning of the file
//     // rewind($file);

//     // write to the file
//     fwrite($file, 'Gay Gaay');

//     fclose($file); // always close the file when done

//     // create a file
//     file_put_contents('temp.text', '');

//     // delete file
//     unlink('temp.txt');
// } else {
//     echo "file not found";
// }



// ternary operator 
// $age = 20;
// $status = ($age == 18) ? ' adult' : 'minor';
// echo $status;


// superGlobals

// $_GET['name'] // $_POST['name']


// echo 'HTTP Host: ' . $_SERVER['HTTP_HOST'] . '<br>';
// echo 'Server Name: ' . $_SERVER['SERVER_NAME'] . '<br>';
// echo 'Request URI: ' . $_SERVER['REQUEST_URI'] . '<br>';
// echo 'Script Name: ' . $_SERVER['SCRIPT_NAME'] . '<br>';

// echo 'PHP Self: ' . $_SERVER['PHP_SELF'] . '<br>';

// echo 'Query String: ' . $_SERVER['QUERY_STRING'] . '<br>';
// echo 'Request Method: ' . $_SERVER['REQUEST_METHOD'] . '<br>';
// echo 'HTTPS: ' . (isset($_SERVER['HTTPS']) ? 'Yes' : 'No') . '<br>';
// echo 'Remote Address: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
// echo 'Server Port: ' . $_SERVER['SERVER_PORT'] . '<br>';
// echo 'Script Filename: ' . $_SERVER['SCRIPT_FILENAME'] . '<br>';


//  SEASSION['']
// if (isset($_POST['submit'])) {
//     // SESSION
//     // session_start();


//     // $name =  $_POST['name'];



//     // $_SESSION['name']  =  $name;

//     // // echo    $_SESSION['name'];


//     // Cookie

//     setcookie('gender', $_POST['gender'], time() + 86400);






//     header('Location: index.php');
// }






// JSON 

$filename =  'colorsName2.json';

if (file_exists($filename)) {
    $file =   fopen($filename, 'r');
} else {
    echo 'file not found';
}

$contnt = fread($file, filesize($filename));

// echo $contnt;

// echo  $contnt['azure']; // err synatx


// conver to json - as an array
$array = json_decode($contnt, true);

// print_r($array);
// print_r($array['azure']);
// foreach ($array as $key => $value) {
//     echo "$key" . " " . "$value" . "<br>";
// }


// echo print_r($array['colors'][0]['color']);


// $colors = $array['colors'];

// foreach ($colors as $keyColor => $color) {
//     echo  'color : ' . $color["code"]["hex"] . '<br>';
// }


// add json to a file

$myArray = [
    "antiquewhite" => "#faebd7",
    "aqua" => "#00ffff",
    "aquamarine" => "#7fffd4",
    "azure" => "#f0ffff",
];

$jsonData = json_encode($myArray, JSON_PRETTY_PRINT);

file_put_contents('colorXXX.json', $jsonData);



// convert to json - as an objct

// $obj = json_decode($contnt);

// echo  $obj->azure;


// echo $obj; //err 












?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More php</title>
</head>

<body>

    <form action="<?php echo  $_SERVER['PHP_SELF'];   ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="gender">
            <option value="male">male</option>
            <option value="female">female</option>

        </select>
        <input type="submit" value="submit" name="submit">
    </form>

</body>

</html>
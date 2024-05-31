<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class User
{
    // public  $name;
    // public $email;

    private  $name;
    private $email;


    public function __construct($name, $email)
    {
        $this->name =  $name;
        $this->email  = $email;
    }

    public function loggin(): void
    {
        echo   " $this->name Logged in" . '<br>';
    }


    public function printInfo(): void
    {
        echo   "hi i am a $this->name" . '<br>';
    }


    // getter     // for using outside 
    public function   getName()
    {
        return  $this->name  .'<br>' ;
    }

    // setter
    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 5) {
            $this->name = $name;  // replace var name
            echo  "your name  was updated" . '<br>';
        }
    }
}






$userOne =   new User('ali', 'ali@gmail.com');

// echo  $userOne->name;
// echo '<br>';

// echo   $userOne->loggin();
// echo   $userOne->printInfo();
echo  $userOne->getName(); 
$userOne->setName('AmirMohmmad');
echo  $userOne->getName();   // access private var wiht getter function


// $userTwo =   new User('reza', 'reza@gmail.com');

// echo  $userTwo->name;
// echo '<br>';

// echo   $userTwo->loggin();
// echo   $userTwo->printInfo();





?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>

</body>

</html>
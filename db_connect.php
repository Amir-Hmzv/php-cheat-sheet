<?php


$conn = mysqli_connect('localhost', 'amir4477', '123456', 'pizza_code');

if (!$conn) {
    echo  'contection error   ' . mysqli_connect_error();
    # code...
}

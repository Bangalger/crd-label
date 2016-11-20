<?php
$connection = mysqli_connect('localhost', 'oy000250_busers', 'da72KOvofo');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'oy000250_busers');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
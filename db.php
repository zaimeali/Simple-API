<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'farazuit';

$connection = mysqli_connect($host, $user, $password, $database);

if(!($connection)){
    echo "ERROR";
}
else{
    // echo "No Error";
    // echo "<br><hr><br>";
}
?>
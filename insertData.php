<?php
    include 'db.php';
?>

<?php

if(isset($_REQUEST['insertStd'])){

    $rollNum = $_REQUEST['rollNum'];
    $password = $_REQUEST['pass'];

    // echo($_REQUEST['rollNum']);
    // echo($_REQUEST['pass']);

    // echo("<hr>");

    $query = "INSERT INTO std_table(s_rollnum, s_password) ";
    $query.= "VALUES('$rollNum', '$password')";

    $insertUser = mysqli_query($connection, $query);
    
    echo("<script>alert('Student Inserted')</script>");
    echo("<script>window.location.href = 'https://uniapi.000webhostapp.com/form.php';</script>");
}
// header('Location: form.php');
?>
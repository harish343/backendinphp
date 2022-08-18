<?php
session_start();
include 'dbconnect.php';
if(isset($_GET['token'])){
    $token = $_GET['token'];
    $updatequery = "update registrationemail set status='active' where token = '$token'";
    $query = mysqli_query($conn,$updatequery);
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg']= "account updated successfully";
            header('location:login.php');

        }
        else{
            $_SESSION['msg']= "you are logged out";
            header('location:login.php');
        }
    }
    else{
        $_SESSION['msg'] ="account not updated";
            header('location : registration.php');
    }
}

?>
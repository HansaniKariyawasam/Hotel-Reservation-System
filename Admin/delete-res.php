<?php
$id=$_GET['resID'];

$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $result=mysqli_query($connection,"DELETE FROM Reservation WHERE ResID=$id");

    if($result){
        echo "Success";
    }else{
        echo "Failed";
    }
}


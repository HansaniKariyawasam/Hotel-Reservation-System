<?php


$id=$_GET['custID'];

$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $result=mysqli_query($connection,"DELETE FROM Customer WHERE CustID=$id");

    if($result){
        echo "Success";
    }else{
        echo "Failed";
    }
}
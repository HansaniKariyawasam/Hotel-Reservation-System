<?php

$subEmail=$_POST['subEmail'];

$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $search=mysqli_query($connection,"SELECT email FROM Subscriber WHERE email='$subEmail'");

    if(mysqli_num_rows($search)>0){
        echo "You have been subscribed before this site";
    }else{
        $result=mysqli_query($connection,"INSERT INTO subscriber VALUES ('$subEmail')");
        echo "You have been successfully subscribed";
    }
}
<?php

$id=$_POST['roomID'];
$name=$_POST['roomName'];
$price=$_POST['roomPrice'];

$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $result=mysqli_query($connection,"UPDATE Rooms SET RoomPrice=$price WHERE RoomID='$id'");

    if($resultSet){
        echo "Successfully Updated";
    }else{
        echo "Failed to update";
    }

}else{
    echo mysqli_error($connection);
}
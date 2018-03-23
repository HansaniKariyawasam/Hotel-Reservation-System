<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hansani Kariyawasam
 * Date: 20-Dec-17
 * Time: 11:11 AM
 */
$username= $_POST['username'];
$password= $_POST['pass'];

$connection=mysqli_connect("localhost","root","1702408hansani","SeneheNiwasa_php");

if($connection){
    $resultSet=mysqli_query($connection,"INSERT INTO Users VALUES ('$username','$password')");
    if($resultSet){
        echo "<script>window.location.replace('login.php');</script>";
    }
}else{
    echo mysqli_error($connection);
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hansani Kariyawasam
 * Date: 31-Oct-17
 * Time: 10:34 AM
 */
session_start();
$username=$_POST["username"];
$password=$_POST["password"];

$connection=mysqli_connect("localhost","root","1702408hansani","SeneheNiwasa_php");

if($connection){
    $resultSet=mysqli_query($connection,"SELECT * FROM Users WHERE Username='$username' AND Password='$password'");
    if(mysqli_num_rows($resultSet)>0){
        $_SESSION['logged']=true;
        echo "<script>window.location.replace('index.php');</script>";
    }else{
        echo "<script>window.location.replace('login.php');</script>";
    }
}else{
    echo mysqli_error($connection);

}

//
//if($username=='Admin' && $password=='admin'){
//    $_SESSION['logged']=true;
//    echo "<script>
//                window.location.replace('dashboard.php');
//            </script>";
//}else{
//    echo "<script>
//                window.location.replace('index.php');
//            </script>";
//}

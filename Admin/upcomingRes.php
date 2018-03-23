<?php
$nowDate=date("Y-m-d");

$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $result=mysqli_query($connection,"SELECT * FROM Reservation WHERE date('$nowDate') < date(checkIn)");

    if(mysqli_num_rows($result)>0){
        $rowData=mysqli_fetch_all($result,MYSQLI_ASSOC);

        echo json_encode($rowData);
    }
}
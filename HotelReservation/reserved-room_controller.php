<?php

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$roomID=$_POST['roomType'];
$checkIn=$_POST['checkIn'];
$checkOut=$_POST['checkOut'];

$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $result=mysqli_query($connection,"SELECT checkIn,checkOut FROM Reservation");

    if(mysqli_num_rows($result)>0){
        $result=mysqli_fetch_all($result);

        foreach ($result as $data){

            $availablity=mysqli_query($connection,"SELECT * FROM Reservation WHERE (date('$checkIn') BETWEEN checkIn AND checkOut) OR (date('$checkOut') BETWEEN checkIn AND checkOut)");

            if((!$availablity || mysqli_num_rows($availablity)!=0) ){

                echo 'Your dates are popular and we\'ve run out of availability';
                break;
            }
            else{

                mysqli_autocommit($connection,FALSE);
                $searchCustomer=mysqli_query($connection,"SELECT *from Customer WHERE tel='$tel'");
                $searchRoom=mysqli_query($connection,"SELECT RoomPrice FROM Rooms WHERE RoomID='$roomID'");
                $searchRoom=mysqli_fetch_all($searchRoom);
                $roomPrice=$searchRoom[0][0];

                $in=strtotime($checkIn);
                $out=strtotime($checkOut);

                $num_of_nights=abs($out-$in)/86400;
                $total=$roomPrice*$num_of_nights;

                $custId=mysqli_query($connection,"SELECT CustID from Customer ORDER BY(CustID) DESC LIMIT 1");
                $custId=mysqli_fetch_all($custId);
                $custId=$custId[0][0];

                if(mysqli_num_rows($searchCustomer)>0){
                    $searchCustomer=mysqli_fetch_all($searchCustomer);
                    $customerID=$searchCustomer[0][0];

                    mysqli_query($connection,"INSERT INTO Reservation (RoomID,CustID,checkIn,checkOut,total) VALUES ('$roomID',$customerID,'$checkIn','$checkOut',$total)");
                    mysqli_autocommit($connection,TRUE);
                    echo 'Your Reservation is confirmed';
                    break;
                }else{

                    $addCustomer=mysqli_query($connection,"INSERT INTO Customer(custName,email,tel) VALUES ('$name','$email','$tel')");
                    if($addCustomer){
                            mysqli_query($connection,"INSERT INTO Reservation (RoomID,CustID,checkIn,checkOut,total) VALUES ('$roomID',$custId+1,'$checkIn','$checkOut',$total)");
                            mysqli_autocommit($connection,TRUE);
                            echo 'Your Reservation is confirmed';
                            break;
                    }else{
                        mysqli_rollback($connection);
                        echo "Failed";
                        break;
                    }
                }
            }
        }
    }
}

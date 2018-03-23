<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hansani Kariyawasam
 * Date: 08-Jan-18
 * Time: 5:41 PM
 */
$year=$_POST['val'];

//    function populate(){
$connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

if($connection){
    $Jan=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-01-01') and CONCAT('$year','-01-31'))or( date(checkout) between CONCAT('$year','-01-01') and CONCAT('$year','-01-31')) ");
    $Feb=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-02-01') and CONCAT('$year','-02-28'))or( date(checkout) between CONCAT('$year','-02-01') and CONCAT('$year','-02-28')) ");
    $Mar=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-03-01') and CONCAT('$year','-03-31'))or( date(checkout) between CONCAT('$year','-03-01') and CONCAT('$year','-03-31')) ");
    $Apr=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-04-01') and CONCAT('$year','-04-30'))or( date(checkout) between CONCAT('$year','-04-01') and CONCAT('$year','-04-30')) ");
    $May=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-05-01') and CONCAT('$year','-05-31'))or( date(checkout) between CONCAT('$year','-05-01') and CONCAT('$year','-05-31')) ");
    $Jun=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-06-01') and CONCAT('$year','-06-30'))or( date(checkout) between CONCAT('$year','-06-01') and CONCAT('$year','-06-30')) ");
    $Jul=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-07-01') and CONCAT('$year','-07-31'))or( date(checkout) between CONCAT('$year','-07-01') and CONCAT('$year','-07-31')) ");
    $Aug=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-08-01') and CONCAT('$year','-08-31'))or( date(checkout) between CONCAT('$year','-08-01') and CONCAT('$year','-08-31')) ");
    $Sep=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-09-01') and CONCAT('$year','-09-30'))or( date(checkout) between CONCAT('$year','-09-01') and CONCAT('$year','-09-30')) ");
    $Oct=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-10-01') and CONCAT('$year','-10-31'))or( date(checkout) between CONCAT('$year','-10-01') and CONCAT('$year','-10-31')) ");
    $Nov=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-11-01') and CONCAT('$year','-11-30'))or( date(checkout) between CONCAT('$year','-11-01') and CONCAT('$year','-11-30')) ");
    $Dec=mysqli_query($connection,"select sum(total) from reservation where( date(checkin) between CONCAT('$year','-12-01') and CONCAT('$year','-12-31'))or( date(checkout) between CONCAT('$year','-12-01') and CONCAT('$year','-12-31')) ");


    $Jan=mysqli_fetch_all($Jan);
    $Feb=mysqli_fetch_all($Feb);
    $Mar=mysqli_fetch_all($Mar);
    $Apr=mysqli_fetch_all($Apr);
    $May=mysqli_fetch_all($May);
    $Jun=mysqli_fetch_all($Jun);
    $Jul=mysqli_fetch_all($Jul);
    $Aug=mysqli_fetch_all($Aug);
    $Sep=mysqli_fetch_all($Sep);
    $Oct=mysqli_fetch_all($Oct);
    $Nov=mysqli_fetch_all($Nov);
    $Dec=mysqli_fetch_all($Dec);

    echo json_encode([$Jan,$Feb,$Mar,$Apr,$May,$Jun,$Jul,$Aug,$Sep,$Oct,$Nov,$Dec]);
}
<?php
include 'header.php';

$price=0.0;

if($connection){
    $result=mysqli_query($connection,"SELECT RoomPrice FROM Rooms WHERE RoomID='R004'");

    if(mysqli_num_rows($result)>0){
        $result=mysqli_fetch_all($result);
        foreach ($result as $data){
            $price=$data[0];
        }
    }
}
?>
<link href="css/simple-style.css" rel="stylesheet">
    <div class="container">

        <h1 class="title">Whole Villa</h1>



        <!-- RoomDetails -->
        <div id="RoomDetails" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active"><img src="images/photos/V1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V4.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V5.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V6.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V7.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V8.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V10.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V11.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V12.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V13.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/V14.jpg"  class="img-responsive" alt="slide"></div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
        <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <h3>Amenities</h3>
                    <ul>
                        <li class="space">Free Wi-fi</li>
                        <li class="space">Marble Floor</li>
                        <li class="space">Non Smoking Rooms</li>
                        <li class="space">Daily Maid Service</li>
                        <li class="space">Shared Kitchen with Microwave,Rice Cooker etc.(You have most important equipments)</li>
                        <li class="space">Shared Lounge</li>
                        <li class="space">Satellite LED TV</li>
                        <li class="space">Non Smoking Rooms</li>
                        <li class="space">Concierge Service</li>
                        <li class="space">Laundry Service(If you want.charges may apply)</li>
                        <li class="space">Daily Maid Service</li>
                        <li class="space">Free Private Parking</li>
                        <li class="space">Bed and Breakfast Available</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 amenitites">
                    <h3>Proprty Surroundings</h3>
                    <sup style="padding-bottom: 10px"><i style="font-size: 16px">Closet Landmark</i></sup>
                    <ul>
                        <li>Bentota Beach &emsp;&emsp; 0.9 km</li>
                        <li>Bentota Lake &emsp; 1.3km</li>
                        <li>Lunuganga &emsp; 2.9km</li>
                        <li>Kande Vihara Temple &emsp; 3km</li>
                        <li>Bawa Gardens &emsp; 5.2km</li>
                        <li>Kosgoda Turtle Hatchery &emsp; 10.2km</li>
                        <li>Kaluthra Bodiya &emsp; 18.9km</li>
                    </ul>


                </div>
                <div class="col-sm-3 col-md-2" style="bottom: 10px">
                    <div class="size-price">Size<span>44 sqm</span></div>
                </div>
                <div class="col-sm-3 col-md-2" style="bottom: 10px">
                    <div class="size-price">Price <br><h4>LKR <?=$price?></h4></div>
                </div>
                <form id="bookingForm">
                    <div class="info">
<!--                        <div class="form-group">-->
<!--                            <div class="input-group" >-->
<!--                                <div class="input-group-addon">-->
<!--                                    <i class="fa fa-calendar">-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                                <input class="form-control" style="cursor: pointer;" readonly class="date" name="date" placeholder="Check-In-Date" type="text" id="txtCheckIn"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <div class="input-group" >-->
<!--                                <div class="input-group-addon">-->
<!--                                    <i class="fa fa-calendar">-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                                <input class="form-control" style="cursor: pointer;" readonly class="date" name="date" placeholder="Check-Out-Date" type="text" id="txtCheckOut"/>-->
<!--                            </div>-->
<!--                        </div>-->
                        <center><a href="index.php" class="btn btn-default float-right">Book Now</a></center>
                    </div>
                </form>
            </div>
        </div>



    </div>
<?php include 'footer.php';?>
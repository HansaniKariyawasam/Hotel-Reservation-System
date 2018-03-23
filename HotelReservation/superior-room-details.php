<?php
include 'header.php';

$price=0.0;

if($connection){
    $result=mysqli_query($connection,"SELECT RoomPrice FROM Rooms WHERE RoomID='R001'");

    if(mysqli_num_rows($result)>0){
        $result=mysqli_fetch_all($result);
        foreach ($result as $data){
            $price=$data[0];
        }
    }
}
?>

    <div class="container">

        <h1 class="title">Superior Double Suite</h1>



        <!-- RoomDetails -->
        <div id="RoomDetails" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active"><img src="images/photos/R1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/R8.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/R7.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/R9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/RB1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/R10.jpg"  class="img-responsive" alt="slide"></div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
        <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <p>
                        Our Superior room features queen bed. A colonial feel with wonderful wood finishes give this room nostaligic feeling. This room offers complimentary Wi-Fi, Minibar, satellite LCD televisions, air conditioning, a safety deposit box, a selection of local teas, complimentary soft drink selection and various luxury amenities. Refresh yourself as you take a step into our rain shower. All our rooms are non-smoking. Smoking is permitted in designated areas across the property.
                    </p>
                    <p>
                        Furnished in classic and essential style, this comfortable room has small varandha. This large bed room is in villa.
                    </p>
                </div>
                <div class="col-sm-6 col-md-3 amenitites">
                    <h3>Amenities</h3>
                    <ul>
                        <li>Individual Air Conditioning</li>
                        <li>Free Wi-fi</li>
                        <li>Minibar</li>
                        <li>Hair Dryer</li>
                        <li>Sanitary Objects</li>
                        <li>Marble Floor</li>
                        <li>Wardrobe</li>
                        <li>Non Smoking Rooms</li>
                        <li>Daily Maid Service</li>
                        <li>Water Bottel(Addithional charges)</li>
                    </ul>


                </div>
                <div class="col-sm-3 col-md-2" style="bottom: 10px">
                    <div class="size-price">Size<span>44 sqm</span></div>
                </div>
                <div class="col-sm-3 col-md-2" style="bottom: 10px">
                    <div class="size-price">Price <br><h4>LKR<?=$price?></h4></div>
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
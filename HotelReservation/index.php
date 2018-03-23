<?php
    include 'header.php';


    if($connection){
        $result=mysqli_query($connection,'SELECT * FROM Rooms');

        if(mysqli_num_rows($result)>0){
            $result=mysqli_fetch_all($result);

        }
    }
?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/home.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown" style="color: #ccb210">Best Villa in Bentota</h1>
                <p class="animated fadeInUp" style="color: #665503">Feel Like Home when You are Away...!</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><img src="images/photos/welcome.jpg" width="100%" height="400"></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight" id="reservationForm">
        <div class="form-group">
            <input type="text" class="form-control" name="name"  placeholder="Name" id="txtName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" id="txtEmail">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="tel" placeholder="Telephone (xxxxxxxxxx)" id="txtTel">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="roomType">
              <option disabled selected>Select Rooms</option>
              <option value="R001"><?=$result[0][1]?></option>
              <option value="R002"><?=$result[1][1]?></option>
              <option value="R003"><?=$result[2][1]?></option>
              <option value="R004"><?=$result[3][1]?></option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control">
              <option disabled selected>No. of Adult</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="input-group" >
                <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                </div>
                <input class="form-control" style="cursor: pointer;" readonly class="date" name="checkIn" placeholder="Check-In-Date" type="text" id="txtCheckIn"/>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group" >
                <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                </div>
                <input class="form-control" style="cursor: pointer;" readonly min="2018-01-12" class="date" name="checkOut" placeholder="Check-Out-Date" type="test" id="txtCheckOut"/>
            </div>
        </div>

        <div class="form-group">
            <textarea class="form-control"  placeholder="Message (Optional)" rows="4" id="txtMessage"></textarea>
        </div>
        <button class="btn btn-default" type="button" id="btnSubmit">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active"><img src="images/photos/R1.jpg" class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R2.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R3.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R4.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R5.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R6.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R7.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R8.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R9.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R10.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/R11.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/T1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T4.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T5.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T6.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T7.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T8.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T10.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T12.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T13.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T14.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T15.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T16.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/T17.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/F0.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/F1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/F2.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F3.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F4.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F5.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F6.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F7.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F8.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F9.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F11.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F12.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F13.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F14.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/F15.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->

<?php include 'footer.php';?>
<?php
    include 'header.php';
    $status="";

    if(time()<strtotime('12:00:00')){
        $status="Good Morning";
    }else if(time()<strtotime('18:00:00')){
        $status="Good Afternoon";
    }else{
        $status="Good Evening";
    }
    $nowTime=date("H");
    $nowDate=date("Y-m-d");

    $connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');

    if($connection){
        $sub=mysqli_query($connection,"SELECT * FROM subscriber");
        $customer=mysqli_query($connection,"SELECT *FROM Customer");
        $newRes=mysqli_query($connection,"SELECT * FROM Reservation WHERE date('$nowDate') < date(checkIn)");
        $allRes=mysqli_query($connection,"SELECT * FROM Reservation");
    }
?>

        <div id="page-wrapper">
        <div class="graphs">
            <div class="col_3">
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                        <div class="stats">
                          <h5><strong><?=mysqli_num_rows($sub)?></strong></h5>
                          <span>Subscribers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-users user1 icon-rounded"></i>
                        <div class="stats">
                          <h5><strong><?=mysqli_num_rows($customer)?></strong></h5>
                          <span>Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                        <div class="stats">
                          <h5><strong><?=mysqli_num_rows($allRes)?></strong></h5>
                          <span>All Reservations</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                        <div class="stats">
                          <h5><strong><?=mysqli_num_rows($newRes)?></strong></h5>
                          <span>New Reservations</span>
                        </div>
                    </div>
                 </div>
                <div class="clearfix"> </div>
          </div>
            <div class="col-md-8 span_3">
                <div class="bs-example1" data-example-id="contextual-table" style="font-weight: bold;color: #767ae7">
                    <?=$status?>
                </div>
                <center><strong>Upcoming New Reservation</strong></center>
                <table class="table" id="tblUpcomingRes">
                    <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>Check In Date</th>
                        <th>Chech Out Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
      <!--Create Calander-->
      <div class="col_1">
		    <div class="col-md-4 span_7">
		      <div class="cal1 cal_2">
                  <div class="clndr">
                      <div class="clndr-controls">
                          <div class="clndr-control-button">
                              <p class="clndr-previous-button">previous</p>
                          </div>
                          <div class="month">July 2015</div>
                          <div class="clndr-control-button rightalign">
                              <p class="clndr-next-button">next</p>
                          </div>
                      </div>

                      <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                          <thead>

<!--                          Week Names-->
                          <tr class="header-days">
                              <td class="header-day">S</td>
                              <td class="header-day">M</td>
                              <td class="header-day">T</td>
                              <td class="header-day">W</td>
                              <td class="header-day">T</td>
                              <td class="header-day">F</td>
                              <td class="header-day">S</td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td class="day adjacent-month last-month calendar-day-2015-06-28">
                                  <div class="day-contents">28</div>
                              </td>
                              <td class="day adjacent-month last-month calendar-day-2015-06-29">
                                  <div class="day-contents">29</div>
                              </td>
                              <td class="day adjacent-month last-month calendar-day-2015-06-30">
                                  <div class="day-contents">30</div>
                              </td>
                              <td class="day calendar-day-2015-07-01">
                                  <div class="day-contents">1</div>
                              </td>
                              <td class="day calendar-day-2015-07-02">
                                  <div class="day-contents">2</div>
                              </td>
                              <td class="day calendar-day-2015-07-03">
                                  <div class="day-contents">3</div>
                              </td>
                              <td class="day calendar-day-2015-07-04">
                                  <div class="day-contents">4</div>
                              </td>
                          </tr>
                          <tr>
                              <td class="day calendar-day-2015-07-05">
                                  <div class="day-contents">5</div>
                              </td><td class="day calendar-day-2015-07-06">
                                  <div class="day-contents">6</div>
                              </td><td class="day calendar-day-2015-07-07">
                                  <div class="day-contents">7</div>
                              </td>
                              <td class="day calendar-day-2015-07-08">
                                  <div class="day-contents">8</div>
                              </td>
                              <td class="day calendar-day-2015-07-09">
                                  <div class="day-contents">9</div>
                              </td>
                              <td class="day calendar-day-2015-07-10">
                                  <div class="day-contents">10</div>
                              </td>
                              <td class="day calendar-day-2015-07-11">
                                  <div class="day-contents">11</div>
                              </td>
                          </tr>
                          <tr>
                              <td class="day calendar-day-2015-07-12">
                                  <div class="day-contents">12</div>
                              </td>
                              <td class="day calendar-day-2015-07-13">
                                  <div class="day-contents">13</div>
                              </td>
                              <td class="day calendar-day-2015-07-14">
                                  <div class="day-contents">14</div>
                              </td>
                              <td class="day calendar-day-2015-07-15">
                                  <div class="day-contents">15</div>
                              </td>
                              <td class="day calendar-day-2015-07-16">
                                  <div class="day-contents">16</div>
                              </td>
                              <td class="day calendar-day-2015-07-17">
                                  <div class="day-contents">17</div>
                              </td>
                              <td class="day calendar-day-2015-07-18">
                                  <div class="day-contents">18</div>
                              </td>
                          </tr>
                          <tr>
                              <td class="day calendar-day-2015-07-19">
                                  <div class="day-contents">19</div>
                              </td><td class="day calendar-day-2015-07-20">
                                  <div class="day-contents">20</div>
                              </td>
                              <td class="day calendar-day-2015-07-21">
                                  <div class="day-contents">21</div>
                              </td>
                              <td class="day calendar-day-2015-07-22">
                                  <div class="day-contents">22</div>
                              </td>
                              <td class="day calendar-day-2015-07-23">
                                  <div class="day-contents">23</div>
                              </td>
                              <td class="day calendar-day-2015-07-24">
                                  <div class="day-contents">24</div>
                              </td>
                              <td class="day calendar-day-2015-07-25">
                                  <div class="day-contents">25</div>
                              </td>
                          </tr>
                          <tr>
                              <td class="day calendar-day-2015-07-26">
                                  <div class="day-contents">26</div>
                              </td>
                              <td class="day calendar-day-2015-07-27">
                                  <div class="day-contents">27</div>
                              </td>
                              <td class="day calendar-day-2015-07-28">
                                  <div class="day-contents">28</div>
                              </td>
                              <td class="day calendar-day-2015-07-29">
                                  <div class="day-contents">29</div>
                              </td>
                              <td class="day calendar-day-2015-07-30">
                                  <div class="day-contents">30</div>
                              </td>
                              <td class="day calendar-day-2015-07-31">
                                  <div class="day-contents">31</div>
                              </td>
                              <td class="day adjacent-month next-month calendar-day-2015-08-01">
                                  <div class="day-contents">1</div>
                              </td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
		    </div>
	  </div>
    <script>
        $(function () {
            var httpRqst=new XMLHttpRequest();

            httpRqst.onreadystatechange=function () {

                if(httpRqst.readyState === 4 && httpRqst.status===200){
                    var jsonString=JSON.parse(httpRqst.responseText);
//                                console.log(jsonString);
                    for(var data in jsonString) {
                        $('#tblUpcomingRes tbody').append('<tr>' +
                            '<td>'+jsonString[data]['ResID']+'</td>' +
                            '<td>'+jsonString[data]['checkIn']+'</td>' +
                            '<td>'+jsonString[data]['checkOut']+'</td>' +
                            '</tr>')
                    }
                }

            };

            httpRqst.open('GET','upcomingRes.php',true);

            httpRqst.send();
        });
    </script>





<?php include 'footer.php';?>
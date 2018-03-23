<?php include 'header.php';?>

<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Cancel Reservation</h3>

            <table class="table" id="tblRes">
                <thead>
                <tr>
                    <th></th>
                    <th>Reservation ID</th>
                    <th>Room ID</th>
                    <th>Geust ID</th>
                    <th>Check In Date</th>
                    <th>Check Out Date</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div class="clearfix"> </div>
            <a href="#" class="btn btn-success float-right" id="btnCancel">Cancel Reservation </a>

            <script src="js/jquery-3.2.1.min.js"></script>
            <script>
                $(function () {
                    var httpRqst=new XMLHttpRequest();

                    httpRqst.onreadystatechange=function () {

                        if(httpRqst.readyState === 4 && httpRqst.status===200){
                            var jsonString=JSON.parse(httpRqst.responseText);
//                            console.log(jsonString);
                            for(var data in jsonString) {
                                $('#tblRes tbody').append('<tr>' +
                                    '<td class="hidden-xs"><input type="checkbox" class="checkbox" value="'+jsonString[data]['ResID']+'"></td>' +
                                    '<td>'+jsonString[data]['ResID']+'</td>' +
                                    '<td>'+jsonString[data]['RoomID']+'</td>' +
                                    '<td>'+jsonString[data]['CustID']+'</td>' +
                                    '<td>'+jsonString[data]['checkIn']+'</td>' +
                                    '<td>'+jsonString[data]['checkOut']+'</td>' +
                                    '<td>'+jsonString[data]['total']+'</td>' +
                                    '</tr>')
                            }
                        }

                    };

                    httpRqst.open('GET','cancel-res_controller.php',true);

                    httpRqst.send();
                });
            </script>
            <script src="js/my-js/cancel-reservation.js"></script>
        </div>

<?php include 'footer.php';?>

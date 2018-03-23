<?php include 'header.php';?>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="xs">
                <h3>Manage Rooms</h3>

                    <table class="table" id="tblRoom">
                        <thead>
                        <tr>
                            <th>Room ID</th>
                            <th>Room Name</th>
                            <th>Room Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
<!--                <div class="clearfix"> </div>-->
                <script src="js/jquery-3.2.1.min.js"></script>
                <script>
                    $(function () {
                        var httpRqst=new XMLHttpRequest();

                        httpRqst.onreadystatechange=function () {

                            if(httpRqst.readyState === 4 && httpRqst.status===200){
                                var jsonString=JSON.parse(httpRqst.responseText);
//                                console.log(jsonString);
                                for(var data in jsonString) {
                                    $('#tblRoom tbody').append('<tr>' +
                                        '<td>'+jsonString[data]['RoomID']+'</td>' +
                                        '<td>'+jsonString[data]['RoomName']+'</td>' +
                                        '<td>'+jsonString[data]['RoomPrice']+'</td>' +
                                        '<td><a href="update-rooms.php?roomID='+jsonString[data]['RoomID']+'&roomName='+jsonString[data]['RoomName']+'&roomPrice='+jsonString[data]['RoomPrice']+'"><i\n' +
                                        '                                class="fa fa-pencil" aria-hidden="true"></i></a></td>' +
                                        '</tr>')
                                }
                            }

                        };

                        httpRqst.open('GET','manage-room_controller.php',true);

                        httpRqst.send();
                    });
                </script>
                <script src="js/my-js/manage-rooms.js"></script>
            </div>


            <link href="css/myStyle.css" rel="stylesheet">
<?php include 'footer.php';?>
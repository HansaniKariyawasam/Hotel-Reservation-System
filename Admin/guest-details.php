<?php include "header.php";?>

<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Guest's Details</h3>

            <table class="table" id="tblGuest">
                <thead>
                <tr>
                    <th></th>
                    <th>Guest ID</th>
                    <th>Guest Name</th>
                    <th>Email</th>
                    <th>Telephone No</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <a href="#" class="btn btn-success float-right" id="btnRemove">Remove</a>
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
                                $('#tblGuest tbody').append('<tr>' +
                                    '<td class="hidden-xs"><input type="checkbox" class="checkbox" value="'+jsonString[data]['CustID']+'"></td>' +
                                    '<td>'+jsonString[data]['CustID']+'</td>' +
                                    '<td>'+jsonString[data]['custName']+'</td>' +
                                    '<td>'+jsonString[data]['email']+'</td>' +
                                    '<td>'+jsonString[data]['tel']+'</td>' +
                                    '</tr>')
                            }
                        }

                    };

                    httpRqst.open('GET','guest-details_controller.php',true);

                    httpRqst.send();
                });
            </script>
            <script src="js/my-js/guest-details.js"></script>
        </div>


        </div>


<?php include "footer.php";?>

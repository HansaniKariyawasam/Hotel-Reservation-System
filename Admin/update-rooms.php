<?php
include "header.php";
$id = !empty($_GET["roomID"]) ? $_GET["roomID"] : "";
$name = !empty($_GET["roomName"]) ? $_GET["roomName"] : "";
$price = !empty($_GET["roomPrice"]) ? $_GET["roomPrice"] : "";
?>
<style>
    #txtRoomPrice,#txtRoomID,#txtRoomName{
        border: black;
    }
</style>

<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Update Room Details</h3>
            <div id="new-customer">
                <form id="updateForm">
                    <div class="form-group">
                        <label for="txtRoomID">Room ID</label>
                        <input type="text" name="roomID" class="form-control" id="txtRoomID"  style="color: black"
                               value="<?= $id ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtRoomName">Room Name</label>
                        <input type="text" name="roomName" class="form-control" id="txtRoomName"   style="color: black"
                               value="<?= $name ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtRoomPrice">Room Price</label>
                        <input type="text" name="roomPrice" class="form-control" id="txtRoomPrice"
                               value="<?= $price ?>">
                    </div>

                </form>
                <button  class="btn btn-success " type="submit" id="btnUpdate">Update Room</button>
            </div>
        </div>
        <script>
            $('#btnUpdate').on('click',function () {
               var http=new XMLHttpRequest();

               http.onreadystatechange=function () {
                   if(http.stateChange===4 && http.status===200){
                       alert(http.responseText);
                   }
               };

               http.open('POST','update-rooms_controller.php',true);
                http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                var queryString=$('#updateForm').serialize();
                console.log(queryString);
                http.send(queryString);
            });
            $("#txtRoomPrice").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105) || (e.keyCode>=219 && e.keyCode<=222) || e.keyCode==190 || e.keyCode==110 ) {
                    e.preventDefault();
                }
                if($(this).val().trim().length===10){
                    e.preventDefault();
                    return;
                }
            });
            $('#txtRoomPrice').focus(function () {
                $(this).select();
            });
        </script>

<?php include "footer.php";?>

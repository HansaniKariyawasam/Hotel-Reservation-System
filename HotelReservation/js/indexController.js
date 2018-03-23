var emailReg=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
var telReg=/\d{10}/;


$('#txtName,#txtEmail,#txtTel,#txtCheckIn,#txtCheckOut,#txtMessage,#txtSubEmail').focus(function () {
   $(this).select();
});

$('#txtName,#txtEmail,#txtTel,#txtCheckIn,#txtCheckOut,#txtSubEmail').keyup(function () {
    if ($(this).val().trim().length > 0){
        $(this).parents('form').children('p').remove();
    }
});

$("#txtTel").keydown(function (e) {
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

$("#txtName").keydown(function (e) {
    // console.log(e.keyCode);
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
    if ((e.keyCode>=48 && e.keyCode<=57) || (e.keyCode>=96 && e.keyCode<=111) || (e.keyCode>=186 && e.keyCode<=192) || (e.keyCode>=219 && e.keyCode<=222) || e.keyCode==190 || e.keyCode==110) {
        // console.log(e.keyCode);
        e.preventDefault();
    }
});

$(document).ready(function(){
    var checkIn_input=$('input[name="checkIn"]'); //our date input has the name "date"
    var checkOut_input=$('input[name="checkOut"]');
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    checkIn_input.datepicker({
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    checkOut_input.datepicker({
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
});

$('#btnSubmit').on('click',function () {
    var name=$('#txtName').val();
    var email=$('#txtEmail').val();
    var tel=$('#txtTel').val();
    var checkIn=$('#txtCheckIn').val();
    var checkOut=$('#txtCheckOut').val();
    // console.log(email);

    if((name.trim().length===0) || (email.trim().length===0) || (tel.trim().length===0) || (checkIn.trim().length===0) || (checkOut.trim().length===0)) {
        if(!($('#reservationForm').children().length===9)){
            // console.log($('#reservationForm').children().length);
            $('#reservationForm').append('<p style="color: red;font-weight: bold">Please complete all required fields!</p>');
        }
        return;
    }

    if (!emailReg.test(email)){
        // console.log(email);
        if(!($('#reservationForm').children().length===9)){
            // console.log($('#reservationForm').children().length);
            $('#reservationForm').append('<p style="color: red;font-weight: bold">Please add a valid email address</p>');
        }

        return;
    }

    if(!telReg.test(tel)){
        if(!($('#reservationForm').children().length===9)){
            // console.log($('#reservationForm').children().length);
            $('#reservationForm').append('<p style="color: red;font-weight: bold">Please add a valid telephone</p>');
        }

        return;
    }

   $.ajax({
      method: 'POST',
      url:'reserved-room_controller.php',
      async:true,
      contentType:'application/x-www-form-urlencoded',
      data:$('#reservationForm').serialize()
    }).done(function (response,status,jxhr) {
        alert(response);
        console.log(response);
    });


});

$('#btnSub').on('click',function () {
    var subEmail=$('#txtSubEmail').val();

    if (!emailReg.test(subEmail)){
        // console.log(email);
        $('#subForm').append('<p style="color: red;font-weight: bold">Please add a valid email address</p>');
        return;
    }

    $.ajax({
        method: 'POST',
        url:'addSubscribers.php',
        async:true,
        contentType:'application/x-www-form-urlencoded',
        data:$('#subForm').serialize()
    }).done(function (response,status,jxhr) {
        alert(response);
    });
});
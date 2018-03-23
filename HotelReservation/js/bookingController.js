$('#btnBook').on('click',function () {
    console.log('A');
    var checkIn=$('#txtCheckIn').val();
    var checkOut=$('#txtCheckOut').val();

    console.log(checkOut);

    if((checkIn.trim().length===0) || (checkOut.trim().length===0)){
        $('#bookingForm').append('<p style="color: red;font-weight: bold">Please complete all required fields!</p>')
    }
});

$('#txtCheckIn,#txtCheckOut').keyup(function () {
    if ($(this).val().trim().length > 0){
        $(this).parents('form').children('p').remove();
    }
});
$('#btnSend').on('click',function () {
    $.ajax({
        method: 'POST',
        url:'write-json.php',
        async:true,
        contentType:'application/x-www-form-urlencoded',
        data:$('#contactForm').serialize()
    }).done(function (response,status,jxhr) {
        alert(response);
    });
});
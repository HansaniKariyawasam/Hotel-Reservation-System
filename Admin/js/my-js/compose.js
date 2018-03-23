$('#btnCompose').on('click',function () {
    $.ajax({
        method: 'POST',
        url:'compose-controller.php',
        async:true,
        contentType:'application/x-www-form-urlencoded',
        data:$('#composeForm').serialize()
    }).done(function (response,status,jxhr) {
        alert(response);
    });
});
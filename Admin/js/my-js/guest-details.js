$('#btnRemove').click(function () {

    var checkboxes = $("#tblGuest tbody tr td:first-child input[type=checkbox]:checked");

    if (checkboxes.length > 0) {
        var queryString = '';
        for (var i = 0; i < checkboxes.length; i++) {
            queryString = $(checkboxes[i]).val();
            // console.log($(checkboxes[i]).val());
        }


        var httpRqst=new XMLHttpRequest();

        httpRqst.onreadystatechange=function () {

            if(httpRqst.readyState === 4 && httpRqst.status===200){
                alert(httpRqst.responseText);
                window.location.reload(true);
            }

        };

        httpRqst.open('GET','delete-guest.php?custID='+queryString,true);

        httpRqst.send();
    }

});
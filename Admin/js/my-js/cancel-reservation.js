$("#btnCancel").click(function () {

    var checkboxes = $("#tblRes tbody tr td:first-child input[type=checkbox]:checked");

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

        httpRqst.open('GET','delete-res.php?resID='+queryString,true);

        httpRqst.send();
    }


});
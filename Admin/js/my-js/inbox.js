$(document).ready(function () {
    //(1) Create HTTP Request
    var httpRequest=new XMLHttpRequest();

    //(2) On http request is done
    httpRequest.onreadystatechange = function () {
        //ready state ===4 -> when the data is fully retrieved
        // status === 200 -> File found (404 if file not found)
        if(httpRequest.readyState === 4 && httpRequest.status===200){

            var xml=JSON.parse(httpRequest.responseText);

            for (var i=0;i<xml.length;i++){
                $('#tblInbox tbody').append('<tr>' +
                    '<td  class="hidden-xs"><input type="checkbox" class="checkbox"></td>' +
                    '<td  class="hidden-xs"><i class="fa fa-star icon-state-warning"></i></td>' +
                    '<td  class="hidden-xs">'+xml[i]['name']+'</td>' +
                    '<td>'+xml[i]['message']+'</td>' +
                    '<td  class="hidden-xs"> <i class="fa fa-paperclip"></i></td>' +
                    '<td>'+xml[i]['email']+'</td>' +
                    '</tr>')
            }
        }
    };

    //(3) Open http request(method type,file,asynchronized)
    //When asynchronized is false : rest of the code below that won't be executed
    httpRequest.open('GET','../SeneheNiwasa/data.json',true);

    //send the http request to the server
    httpRequest.send();
});
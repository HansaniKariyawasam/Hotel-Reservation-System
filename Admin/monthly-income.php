<?php
    include 'header.php';


?>
<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <div class="mail-toolbar clearfix">

                <div class="float-left">
                    <div class="btn-group">
                        <button href="#" onclick="pre();" class="btn btn-success1" id="btnPre"><i class="fa fa-angle-left"></i>Previous Year</button>
                    </div>
                </div>

                <div class="float-right">
                    <div class="btn-group">
                        <button class="btn btn-success1" onclick="next();" id="btnNext">Next Year<i class="fa fa-angle-right"></i></button>
                    </div>
                </div>

            </div>
            <script>
                var year=(new Date()).getFullYear();
                document.getElementById('btnNext').disabled=true;
                var chart;
                window.onload = function () {

                    console.log(year);
                    $.ajax({
                        method: "POST",
                        url: "updateChart.php",
                        data: {val:year}
                    })
                        .done(function (result) {
                            var val=JSON.parse(result);
                            console.log(val[0][0][0]);
                            chart = new CanvasJS.Chart("chartContainer", {
                                animationEnabled: true,
                                theme: "light1", // "light1", "light2", "dark1", "dark2"
                                title:{
                                    text: "Annual Income - "+year
                                },
                                axisY: {
                                    title: "Income(Rs)"
                                },
                                data: [{
                                    type: "column",
                                    showInLegend: true,
                                    legendMarkerColor: "grey",
                                    legendText: "Rs = Rupees",
                                    dataPoints: [
                                        { y: val[0][0][0]==null?0:parseInt(val[0][0][0]), label: "January" },
                                        { y: val[1][0][0]==null?0:parseInt(val[1][0][0]),  label: "February" },
                                        { y: val[2][0][0]==null?0:parseInt(val[2][0][0]),  label: "March" },
                                        { y: val[3][0][0]==null?0:parseInt(val[3][0][0]),  label: "April" },
                                        { y: val[4][0][0]==null?0:parseInt(val[4][0][0]),  label: "May" },
                                        { y: val[5][0][0]==null?0:parseInt(val[5][0][0]), label: "June" },
                                        { y: val[6][0][0]==null?0:parseInt(val[6][0][0]),  label: "July" },
                                        { y: val[7][0][0]==null?0:parseInt(val[7][0][0]),  label: "August" },
                                        { y: val[8][0][0]==null?0:parseInt(val[8][0][0]),  label: "September" },
                                        { y: val[9][0][0]==null?0:parseInt(val[9][0][0]),  label: "October" },
                                        { y: val[10][0][0]==null?0:parseInt(val[10][0][0]),  label: "November" },
                                        { y: val[11][0][0]==null?0:parseInt(val[11][0][0]),  label: "December" }
                                    ]
                                }]
                            });
                            chart.render();
                        });
                };
            </script>
            <script>
                function pre() {
                   year--;
                    updateChart();
                    document.getElementById('btnNext').disabled=false;

//                    window.location.reload();
//                    flush();
                }

                function next() {
                    year++;
                    updateChart();
                    if(year==(new Date()).getFullYear()){
                        document.getElementById('btnNext').disabled=true;
                    }
                }

                var updateChart=function () {
                    $.ajax({
                        method: "POST",
                        url: "updateChart.php",
                        data: {val:year}
                    })
                        .done(function(result) {
                            var val = JSON.parse(result);

                            chart.options.title.text="Annual Income - "+year;

                            chart.options.data[0].dataPoints = [
                                {y: val[0][0][0] == null ? 0 : parseInt(val[0][0][0]), label: "January"},
                                {y: val[1][0][0] == null ? 0 : parseInt(val[1][0][0]), label: "February"},
                                {y: val[2][0][0] == null ? 0 : parseInt(val[2][0][0]), label: "March"},
                                {y: val[3][0][0] == null ? 0 : parseInt(val[3][0][0]), label: "April"},
                                {y: val[4][0][0] == null ? 0 : parseInt(val[4][0][0]), label: "May"},
                                {y: val[5][0][0] == null ? 0 : parseInt(val[5][0][0]), label: "June"},
                                {y: val[6][0][0] == null ? 0 : parseInt(val[6][0][0]), label: "July"},
                                {y: val[7][0][0] == null ? 0 : parseInt(val[7][0][0]), label: "August"},
                                {y: val[8][0][0] == null ? 0 : parseInt(val[8][0][0]), label: "September"},
                                {y: val[9][0][0] == null ? 0 : parseInt(val[9][0][0]), label: "October"},
                                {y: val[10][0][0] == null ? 0 : parseInt(val[10][0][0]), label: "November"},
                                {y: val[11][0][0] == null ? 0 : parseInt(val[11][0][0]), label: "December"}
                            ];

                            chart.render();
                        });
                };


            </script>
            <script type="text/javascript" src="js/canvasjs.min.js"></script>
            <div id="chartContainer" style="height: 500px; width: 100%;"></div>
        </div>

        <?php include 'footer.php';?>

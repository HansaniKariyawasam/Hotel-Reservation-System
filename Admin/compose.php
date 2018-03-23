    <?php
        include 'header.php';
    $email=array();


    $connection=mysqli_connect('localhost','root','1702408hansani','SeneheNiwasa_php');
    if($connection){
        $result=mysqli_query($connection,"SELECT email FROM subscriber");

        if($result && mysqli_affected_rows($connection)>0){
            $email=mysqli_fetch_all($result);
//            foreach ($email as $row){
//                echo "customers.push({
//                        id:'$row[0]',
//                        name:'$row[1]'
//                    });";
//
//            }


        }
    }

    ?>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Compose</h3>

        <div class="col-md-12 inbox_right" >
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: rgba(138,118,97,0.28)">
                        Compose New Message 
                    </div>
                    <div class="panel-body" style="background-color: rgba(74,64,52,0.62)">
                        <div class="alert alert-info" style="background-color: rgba(138,118,97,0.28);color: black;font-weight: bold">
                            Please fill details to send a new message
                        </div>
                        <hr>
                        <form id="composeForm">
                            <label>Select the Email address </label>
                            <select class="form-control" style="border-color: black" name="emailAddress">
                                <option disabled selected style="border-color: black">Email Address</option>
                                <?php
                                foreach($email as $row){
                                    ?>
                                    <option style="color: black" value="<?=$row[0]?>"><?=$row[0]?></option>
                                    <?php
                                }

                                ?>
                            </select>
                            <label>Enter Subject :  </label>
                            <input type="text" class="form-control1 control3" name="subject" style="background-color: rgba(138,118,97,0.28);color: black">
                            <label>Enter Message : </label>
                            <textarea rows="6" class="form-control1 control2" name="message" style="background-color: rgba(138,118,97,0.28);color: black"></textarea>
                        </form>
                        <hr>
                        <a href="#" class="btn btn-warning btn-warng1" id="btnCompose"><span class="glyphicon glyphicon-envelope tag_02"></span> Send Message </a>&nbsp;
<!--                      <a href="#" class="btn btn-success btn-warng1"><span class="glyphicon glyphicon-tags tag_01"></span> Save To Drafts </a>-->
                    </div>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>
   </div>
      </div>
    <script src="js/my-js/compose.js"></script>
<?php include 'footer.php';?>

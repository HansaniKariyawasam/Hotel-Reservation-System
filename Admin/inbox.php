<?php include 'header.php';?>

        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	     <h3>Inbox</h3>

        <div class="col-md-12 inbox_right">
         	<form action="#" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- Input Group -->
            </form>

            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">

			     <div class="float-left">
			        <div class="btn btn_1 btn-default mrg5R">
			           <a href="#" onclick="window.location.reload()"><i class="fa fa-refresh"> </i></a>
			        </div>
			        <div class="btn btn_1 btn-default mrg5R">
                        <a href="#"><i class="fa fa-trash-o icon_8"></i></a>
			        </div>
			    </div>

			    <div class="float-right">
                    <div class="btn-group">
                        <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                        <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                    </div>
			    </div>

               </div>
                <table class="table" id="tblInbox">
                    <tbody>
                    </tbody>
                </table>
               </div>
            </div>
            <div class="clearfix"> </div>
       </div>
            <script src="js/my-js/inbox.js"></script>
<?php include 'footer.php';?>

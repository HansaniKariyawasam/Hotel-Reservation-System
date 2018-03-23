<?PHP
setcookie("name","SeneheNiwasa",time()+24*60*60);
session_start();
$_SESSION['logged']=false;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Senehe Niwasa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
    <link rel="icon" href="images/icon.png">
</head>
<body id="login">
  <div class="login-logo">
    <a href="#"><img src="images/SeneheNiwasa.png" alt=""/></a>
  </div>
  <center><h1 class="form-heading" >LOGIN</h1></center>
  <div class="app-cam">
	  <form method="post" id="loginForm" enctype="application/x-www-form-urlencoded" action="login_controller.php">
		<input type="text" class="text" placeholder="Username" id="txtUsername" name="username" style="background: #c6bb1f;color: black">
		<input type="password"  placeholder="Password" id="txtPassword" name="password" style="background: #c6bb1f;color: black">
          <button class="btn btn-lg btn-success1 btn-block" type="button" id="btnLog">Log In</button>

<!--		<ul class="new">-->
<!--			<center><li class="center-block" ><p class="sign" style="color: #ffffff;">New here ?<a href="register.php" style="color: #ffffff;"> Sign Up</a></p></li></center>-->
<!--			<div class="clearfix"></div>-->
<!--		</ul>-->
	</form>
  </div>
<script src="js/jquery.min.js"></script>
  <script>
      $('#btnLog').on('click',function () {
          if($('#txtUsername').val()!="" && $('#txtPassword').val()!=""){
              document.forms['loginForm'].submit();
          }
      });

      $('#txtUsername,#txtPassword').focus(function () {
         $(this).select();
      });

      $('#txtUsername').focus();
  </script>
</body>
</html>

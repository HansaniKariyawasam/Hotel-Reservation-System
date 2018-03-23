
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
  <h2 class="form-heading">Register</h2>
  <form class="form-signin app-cam" method="post" id="registerForm" enctype="application/x-www-form-urlencoded" action="register_controller.php">


	  <p> Enter your account details below</p>
      <input name="username" type="text" class="form-control1" placeholder="User Name" id="txtRegisterUsername" autofocus="" style="background: #c6bb1f;color: black">
      <input name="pass" type="password" class="form-control1" placeholder="Password" id="txtRegisterPassword" style="background: #c6bb1f;color: black">
      <input name="repass" type="password" class="form-control1" placeholder="Re-type Password" id="txtRegisterRe_Password" style="background: #c6bb1f;color: black">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1" style="color: #ffffff;">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="button"  id="btnSubmit">Submit</button>
      <div class="registration" style="color: #ffffff;">
          Already Registered.
          <a class="" href="login.php">
              Login
          </a>
      </div>
  </form>

<script>
    $('#btnSubmit').on('click',function () {
        var pass=$('#txtRegisterPassword').val();
        var re_pass=$('#txtRegisterRe_Password').val();
        var username=$('#txtRegisterUsername').val();

        if (pass!="" && re_pass!="" && username!=""){
            if(pass===re_pass){
                document.forms['registerForm'].submit();
            }else{
                $('#registerForm').append('<p style="color: red;font-weight: bold">Your Password does not match,Please check again..!</p>');
                $('#txtRegisterPassword').val('');
                $('#txtRegisterRe_Password').val('');
                $('#txtRegisterPassword').focus();
            }

        }else{
            $('#registerForm').append('<p style="color: red;font-weight: bold">Please complete all required fields!</p>');
        }

        $('#txtRegisterPassword,#txtRegisterRe_Password,#txtRegisterUsername').keyup(function () {
            if ($(this).val().trim().length > 0){
                $(this).parents('form').children('p').remove();
            }
        });

        $('#txtRegisterPassword,#txtRegisterRe_Password,#txtRegisterUsername').focus(function () {
           $(this).select();
        });
    });
</script>
</body>
</html>

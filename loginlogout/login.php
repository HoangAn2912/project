<?php
include_once("controller\cLoginLogout.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Modern Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="loginlogout/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="loginlogout/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
	.bgr {
		background-image: url(loginlogout/video/keyboard.jpg);
	}

</style>
</head>
<body>
<div class="bgr">
	<div class="main-container">
		<!--header-->
		<div class="header-w3l">
			<h1 style="font-family: 'Roboto', sans-serif;">Modern Login Form</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="w3ls-pro">
				<h2 style="font-family: 'Roboto' , sans-serif;">Login Now</h2>
			</div>
			<div class="sub-main-w3ls">	
			<?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
    <p style="font-family:'Roboto', sans-serif; color:red; text-align:center;">Email hoặc mật khẩu không đúng hoặc bạn không có quyền đăng nhập!</p>
<?php } ?>

<form action="" method="post">
    <input placeholder="Enter your E-mail" name="email" type="email" required="">
    <span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>

    <input placeholder="Enter Password" name="password" type="password" required="">
    <span class="icon2"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>

    <div class="checkbox-w3">
        <span class="check-w3" style="font-family: 'Roboto', sans-serif;"><input type="checkbox" /> Remember Me</span>
        <a href="#" style="font-family: 'Roboto', sans-serif;">Forgot Password?</a>
        <div class="clear"></div>
    </div>

    <input type="submit" name="login" value="">

    <p style="text-align:center; margin-top:10px; font-family: 'Roboto' , sans-serif;">
        Bạn chưa có tài khoản? <a href="signup.php">Đăng ký</a>
    </p>
</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p style="font-family: 'Roboto' , sans-serif;">&copy; 2017 modern Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
		<!--//footer-->
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="project/loginlogout/js/jquery-2.1.4.min.js"></script><!--common-js-->
<script src="project/loginlogout/js/jquery.vide.min.js"></script><!--video-js-->
<!-- //js -->
</body>
</html>
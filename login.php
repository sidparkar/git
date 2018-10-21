<?php
include_once("config.php");

session_start();
	if(isset($_SESSION["uid"]))
	{
		
	}

		$errstatus=0;
		$errmsg="";
		if(isset($_POST["register"]))
		{
			$username=$_POST["username"];
			if($username=="")
			{
				$errstatus=1;
				$errmsg=$errmsg."Please enter Username <br>";
			}
			$password=$_POST["password"];
			if($password=="")
			{
				$errstatus=1;
				$errmsg=$errmsg."Please enter password <br>";
			}
			if($errstatus!=1)
			{
				$sql="SELECT  * FROM register WHERE username='$username' AND password='$password' ";
				$res =$mysqli->query($sql);

				if(!$res)
				{
					echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
					die();
				}



					/*-------------- Fetching row if that user exist--------------------*/
					if($res->num_rows==1)
					{
						
					    /*--------------set a session-----------*/
						$row= $res->fetch_assoc();

						$_SESSION["uid"]=$row["user_id"];
						
						// $check = "SELECT * FROM user_info WHERE user_id=".$_SESSION["uid"];
						
						// $checkp = "SELECT * FROM partner_preference WHERE user_id=".$_SESSION["uid"];
						
						
						// if (empty($_POST['$user_martial','$user_height','$user_age','$user_weight','$user_caste','$user_subcaste','$user_eating','$user_drinking','$user_smoking','$user_disability','$user_star','$user_rashi','$user_birthtime','$user_birthminute','$user_birthperiod','$user_birthplace','$user_birthcity','$user_education','$user_occupation','$user_currency','$user_income','$user_employed','$user_father','$user_mother','$user_brother','$brother_married','$user_sister','$sister_married','$user_countrycode','$user_phone','$user_plocation','$user_fstatus','$user_ftype','$user_fvalues','$user_about'])) 
						// {
						   // window.location.href="basic-information.php";
						// }
					
						// elseif (empty($_POST['contact-submit'])) {
						   // do something here;
						

						/*--------------Redirected-----------*/
						header("location:basic-information.php");

					}
					else
					{
						$errstatus=1;
						$errmsg=$errmsg."wrong username or password";
					}
			}
		}
		
		
		
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:03 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login</title>
<!-- Bootstrap stylesheet -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="css/ele-style.css" rel="stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- line-awesome -->
<link href="line-awesome/css/line-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!--top start here -->

 <?php include_once("header.php");?>

<!--top end here -->

<!-- header start here-->

<!-- header end here -->

<!-- breadcrumb end here -->

<div class="bread-crumb">
	<div class="container">
		<div class="matter">
			<div class="pull-left">
				<ul class="list-inline">
					<li><a href="index-2.html">Home</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>Login</h2>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb end here -->


<!-- faq start here -->
<div class="commontop" style="
    background-image: url(images/form-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 login padd0">
			<div class="col-md-6 col-sm-6 col-xs-12 bor">
				<img class="img-responsive" src="images/logo.png" alt="logo" title="logo" />
				<div class="donot">Don't have an account? <a href="registeration.php">Create your account</a>
				</div>
				<p>It takes less than a minute</p>

			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h1>Login</h1>
				<form action="" method="POST">
          <?php
              if($errstatus==1){
                ?>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
                </button>

                <strong> <?php echo $errmsg;?></strong>
              </div>
               <?php	} ?>
					<div class="form-group">
						<i class="la la-envelope-o"></i><input type="text" name="username" value="" placeholder="username" id="input-email" class="form-control" />
					</div>

					<div class="form-group">
						<i class="la la-unlock"></i><input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
					<p id="text">Caps lock is ON!!!</p>
					<input type="checkbox" onclick="myPassword()">Show Password
					</div>
					<div class="links">
						<i class="la la-check-circle"></i>Remember me
						<a href="forgot_password.php" class="pull-right">Forgot Password?</a>
					</div>
					<button type="submit"  name="register" class="btn btn-primary btn-block" >Login Now</button>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- faq end here -->


<!-- footer start here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 matter">
                <img src="images/logo.png" class="img-responsive" alt="logo" title="logo" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat.</p>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 info">
                <h5>Usefull Links</h5>
				<ul class="list-inline links">
                    <li><a href="index-2.html">Home</a></li>
					<li><a href="price_plan.html">Pricing Plans</a></li>
                    <li><a href="aboutus.html">About</a></li>
					 <li><a href="faq.html">FAQ</a></li>
                    <li><a href="blog.html">Blog</a></li>
					<li><a href="all_ads.html">All Ads</a></li>
                    <li><a href="login.php">Login</a></li>
					<li><a href="contactus.html">Help & Contact us</a></li>
                    <li><a href="registeration.php">Register</a></li>
                    <li><a href="terms_and_conditions.html">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h5>Contact with us</h5>
				<ul class="list-inline social">
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="social_googleplus" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/" target="_blank"><i class="social_youtube"></i></a></li>
                    <li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
	<div class="powered">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<p>© 2017 <span>Classifiedspot</span>. All rights reserved. Theme by <span>TMD Studio</span></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end here -->
<script>
function myPassword() {
    var x = document.getElementById("input-password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<!--Detect Caps Lock-->
<script>
var input = document.getElementById("input-password");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
<!-- jquery -->
<script src="js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="js/internal.js" type="text/javascript"></script>
</body>

<!-- Mirrored from wptheme.co.in/classified_html/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:04 GMT -->
</html>

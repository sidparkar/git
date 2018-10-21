<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/terms_and_conditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:30 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hobbies</title>
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
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<ul class="list-inline icon">
					<li>
						<!--language code start here-->
						<form  method="post" enctype="multipart/form-data" id="language">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<span class="text"><i class="la la-language"></i>English</span> <i class="la la-caret-down"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="javascript:;"><img src="images/flag.jpg" alt="english" title="english" /> English</a></li>
								</ul>
							</div>
						</form>
						<!--language code end here-->
					</li>
					<li><a href="login.php"><i class="la la-plus-square"></i> <span>Login</span></a></li>
					<li><a href="register.php"><i class="la la-key"></i> <span>Register</span></a></li>
				</ul>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="topnav" id="myTopnav">
					<ul class="list-inline">
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="index-2.html">Homepage</a></li>
										<li><a href="header2.html">Homepage_v2</a></li>
										<li><a href="header3.html">Homepage_v3</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="aboutus.html">About</a></li>
						<li class="dropdown" ><a data-toggle="dropdown" href="#">Blog</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="blog.html">Our Blog</a></li>
										<li><a href="blogdetail.html">Blog Detail</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="contactus.html">Contact</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="user_profile.php">Dashboard</a></li>
										<li><a href="price_plan.html">Pricing Plans</a></li>
										<li><a href="all_ads.html"> All Ads</a></li>
										<li><a href="ads_single_view.html">Ads Single View</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="terms_and_conditions.html">Term & Conditions</a></li>
						<li><a href="javascript:void(0);" class="icons" onclick="myFunction()">&#9776;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="logo" title="logo" /></a>
				</div>
			</div>
				
			<div class="col-md-7 col-sm-7 col-xs-12">
				<form class="form-horizontal row category" method="post">
					<div class="form-group">
						<div class="col-sm-3 paddright">
							<select class="selectpicker form-control bs-select-hidden" name="location">
								<option value="1">Select City</option>
								<option value="0">Ludhiana</option>
								<option value="0">Jalandhar</option>
								<option value="0">Moga</option>
								<option value="0">Ambala</option>
								<option value="0">Amritsar</option>
								<option value="0">Delhi</option>
							</select>
						</div>
						<div class="col-sm-3 paddright">
							<select class="selectpicker form-control bs-select-hidden" name="location">
								<option value="1">Select Category</option>
								<option value="0">Vehicle</option>
								<option value="0">Mobiles</option>
								<option value="0">Electonics</option>
								<option value="0">Real Estate</option>
								<option value="0">Fashion</option>
								<option value="0">Furniture</option>
								<option value="0">Jobs</option>
								<option value="0">Services</option>
								<option value="0">Pets</option>
								<option value="0">Education</option>
								<option value="0">Matrimony</option>
								<option value="0">Note and Coins</option>
							</select>
						</div>
						<div class="col-sm-6 search">
							<input name="s" value="" class="form-control" placeholder="Enter Keyword" type="text">
							<button type="submit" value="submit" class="btn"><i class="icon_search" aria-hidden="true"></i></button>
						</div>
                    </div>
				</form>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-12 center">
				<button class="btn-primary" type="button" onclick="location.href='add_listing.html'"> <i class="la la-edit"></i>Add listing</button>
			</div>
		</div>
	</div>
</header>
<!-- header end here -->

<!-- breadcrumb end here -->
<div class="topimage">
	<img src="images/bck_bg.jpg" class="img-responsive" alt="image" title="image" />
</div>
<div class="bread-crumb">
	<div class="container">
		<div class="matter">
			<div class="pull-left">
				<ul class="list-inline">
					<li><a href="index-2.html">Home</a></li>
					<li><a href="terms_and_conditions.html">Terms & Conditions</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>
<!-- breadcrumb end here -->


<!-- faq start here -->
<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Your hobbies & Interests</h5>
					<hr />
					<div class="mainbox">
						<form action="#">
						<div class="container">
						<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test1" />
    <label for="test1"> <i class="fa fa-glass" aria-hidden="true" style="font-size:24px;color:#fc7e81;"></i> Cooking</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test2" />
    <label for="test2"> <i class="fa fa-leaf" aria-hidden="true" style="font-size:24px;color:#86a500;"></i>Nature</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test3" />
    <label for="test3"> <i class="fa fa-camera-retro" aria-hidden="true" style="font-size:24px;color:#919191;"></i> Photography</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test4" />
    <label for="test4"> <i class="fa fa-paint-brush" aria-hidden="true" style="font-size:24px;color:#e0ff5a;"></i> Painting</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test5" />
    <label for="test5"> <i class="fa fa-book" aria-hidden="true" style="font-size:24px;color:#adbcdf;"></i> Reading</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test6" />
    <label for="test6"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:red;"></i> Music – Playing</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test7" />
    <label for="test7"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#ea4c88;"></i> Music – Listening</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test8" />
    <label for="test8"> <i class="fa fa-car" aria-hidden="true" style="font-size:24px;color:#3999dc;"></i> Traveling</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test9" />
    <label for="test9"> <i class="fa fa-leaf" aria-hidden="true" style="font-size:24px;color:#2f9d66;"></i> Gardening</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test10" />
    <label for="test10"> <i class="fa fa-bug" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Animal Care</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test11" />
    <label for="test11"> <i class="fa fa-glass" aria-hidden="true" style="font-size:24px;color:red;"></i> Sports</label>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
						<input type="text" name="" value="" placeholder="Enter your other hobbies here" id="" class="form-control" />
					</div>
						</div>
						
						</div>
</div>
  
</form>
					</div>		
					</div>	
				</div>
			</div>
		</div>
	</div>

<!-- faq end here -->
<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Your Favourite Music Type</h5>
					<hr />
					<div class="mainbox">
						<form action="#">
						<div class="container">
						<div class="row">
						
						
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test12" />
    <label for="test12"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#3999dc;"></i> Film Songs</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test13" />
    <label for="test13"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#2f9d66;"></i> Classical/Indian</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test14" />
    <label for="test14"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Western</label>
						</div>
						
						<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
						<input type="text" name="" value="" placeholder="Enter your other music interests here.." id="" class="form-control" />
					</div>
						</div>
						
						</div>
</div>
  
</form>
					</div>		
					</div>	
				</div>
			</div>
		</div>
	</div>
	
	<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Spoken Languages</h5>
					<hr />
					<div class="mainbox">
						<form action="#">
						<div class="container">
						<div class="row">
						
						
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test15" />
    <label for="test15">  English</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test16" />
    <label for="test16">  Hindi</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test17" />
    <label for="test17">  Marathi</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test18" />
    <label for="test18">  Telugu</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test19" />
    <label for="test19">  Tamil</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test20" />
    <label for="test20">  Malyalam</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test21" />
    <label for="test21">  Kannada</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test22" />
    <label for="test22">  Gujarati</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test23" />
    <label for="test24">  Urdu</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test25" />
    <label for="test25">  Bengali</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test26" />
    <label for="test26"> Punjabi</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test27" />
    <label for="test28">  Assamese</label>
						</div>
						
						
						<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
						<input type="text" name="" value="" placeholder="Enter your other Languages you know here..." id="" class="form-control" />
					</div>
						</div>
						
						</div>
</div>
  
</form>
					</div>		
					</div>	
				</div>
			</div>
		</div>
	</div>
<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Your Favourite Sports/Fitness</h5>
					<hr />
					<div class="mainbox">
						<form action="#">
						<div class="container">
						<div class="row">
						
						
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test30" />
    <label for="test30"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#3999dc;"></i> Cricket</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test31" />
    <label for="test31"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#2f9d66;"></i> Carrom</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test32" />
    <label for="test32"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Football</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test33" />
    <label for="test33"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Swimming</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test34" />
    <label for="test34"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Yoga</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test35" />
    <label for="test35"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Chess</label>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						 <input type="checkbox" id="test36" />
    <label for="test36"> <i class="fa fa-music" aria-hidden="true" style="font-size:24px;color:#cc0953;"></i> Jogging</label>
						</div>
						
						<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
						<input type="text" name="" value="" placeholder="Enter your other sports/fitness interests here.." id="" class="form-control" />
					</div>
						</div>
						
						</div>
</div>
  
</form>
					</div>		
					</div>	
				</div>
			</div>
		</div>
	</div>

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
                    <li><a href="register.php">Register</a></li>
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

<!-- Mirrored from wptheme.co.in/classified_html/terms_and_conditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:30 GMT -->
</html>

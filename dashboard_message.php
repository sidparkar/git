<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/dashboard_message.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:15 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dashboard Messages</title>
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

<div class="topimage">
	<img src="images/bck_bg.jpg" class="img-responsive" alt="image" title="image">
</div>

<!-- ad-single start here -->
<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="dashboard">
					 <?php include_once("profile.php");?>
					<div class="inner-message">
						<div class="row">
							<div class="col-sm-3 col-xs-12">
								<div class="left">
									<h2>Message</h2>
									<ul class="nav">
										<li>
											<div class="image">
												<img src="images/01.png" class="img-responsive" alt="image" title="image">
												<div class="onhover">2</div>
											</div>	
											<h5>John  <span><i class="fa fa-circle color"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/02.png" class="img-responsive" alt="image" title="image">
												<div class="onhover">4</div>
											</div>	
											<h5>Nikku  <span><i class="fa fa-circle color"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/03.png" class="img-responsive" alt="image" title="image">
												<div class="onhover">6</div>
											</div>	
											<h5>Jassica  <span><i class="fa fa-circle color"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/04.png" class="img-responsive" alt="image" title="image">
											</div>	
											<h5>Sumit Kumar  <span><i class="fa fa-circle"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/05.png" class="img-responsive" alt="image" title="image">
											</div>	
											<h5>Rohit  <span><i class="fa fa-circle"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/06.png" class="img-responsive" alt="image" title="image">
											</div>	
											<h5>Sumanlata  <span><i class="fa fa-circle"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/07.png" class="img-responsive" alt="image" title="image">
											</div>	
											<h5>William  <span><i class="fa fa-circle"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
										<li>
											<div class="image">
												<img src="images/08.png" class="img-responsive" alt="image" title="image">
											</div>	
											<h5>Rock  <span><i class="fa fa-circle"></i></span></h5>
											<p>lorem ipsum dolor sit amet...<span>2 hrs</span></p>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9 col-xs-12">
								<div class="msg-box">
									<div class="comments">
										<h2>Sumit Kumar <i class="fa fa-circle"></i></h2>
										<div class="comment">
											<img src="images/04.png" class="img-responsive" alt="image" title="image">
											<div class="comment-title">
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus element 
											</div>
										</div>
										<div class="comment1">
											<img src="images/04.png" class="img-responsive" alt="image" title="image">
											<div class="comment-title">
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus element 
											</div>
										</div>
										<div class="comment">
											<img src="images/04.png" class="img-responsive" alt="image" title="image">
											<div class="comment-title">
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus element<br> pulvinar ipsum, ut ultrices neque molestie eget. 
											</div>
										</div>
										<div class="comment1">
											<img src="images/04.png" class="img-responsive" alt="image" title="image">
											<div class="comment-title">
												 Lorem ipsum dolor sit amet, consectetur adipiscing
											</div>
										</div>
										<div class="comment">
											<img src="images/04.png" class="img-responsive" alt="image" title="image">
											<div class="comment-title">
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
											</div>
										</div>
										<div class="comment1">
											<img src="images/04.png" class="img-responsive" alt="image" title="image">
											<div class="comment-title">
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivam
											</div>
										</div>
									</div>
									<div class="input-group col-sm-12">
										<input class="form-control" id="comments" placeholder="Type your message..." type="text">
										<button type="button" class="btn-img"><i class="fa fa-picture-o"></i></button>
										<button type="submit" id="sendMessage"><i class="la la-paper-plane"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ad-single end here -->

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
<script src="js/preetycheble/prettyCheckable.min.js"></script>
<link rel="stylesheet" href="js/preetycheble/prettyCheckable.css"/>
</body>

<!-- Mirrored from wptheme.co.in/classified_html/dashboard_message.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:17 GMT -->
</html>

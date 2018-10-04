<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/education_category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:07 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Upgrade Package</title>
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
<div class="bread-crumb">
	<div class="container">
		<div class="matter">
			<div class="pull-left">
				<ul class="list-inline">
					<li><a href="index-2.html">Home</a></li>
					<li><a href="education_category.html">Education Category</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>Upgrade Package</h2>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb end here -->


<!-- content start here -->
<div class="maincategory">
	<div class="container"> 
		
		
		<div class="row">
			
			
			<div class="col-sm-12 col-xs-12">
				<div class="topbar col-sm-12 padd0">
					<div class="topsearch">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<form class="form-horizontal search" method="post">
								<div class="form-group">
									<input name="s" value="" class="form-control" placeholder="Search city" type="text">
									<button type="submit" value="submit" class="btn"><i class="icon_search" aria-hidden="true"></i></button>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-12">
							<p><i class="la la-map-marker"></i>	Ludhiana111, Punjab, India</p>
						</div>	
						<div class="col-md-3 col-sm-4 col-xs-12">
							<img src="images/education/icon-book.png" alt="icon" title="icon" class="mar-t" />
							<h2>50,000 Ads</h2>
							<a href="all_ads.html">View all ads</a>
						</div>	
					</div>
					<hr>
					<div class="row mar">
					<div class="col-md-12 col-sm-12 col-xs-12 priceplan">
				<h5>Pricing Plans</h5>
				<hr>
				<ul class="list-inline">
				<div class="col-md-3 col-sm-3">
					<li>
						<div class="heading"><p>01 </p><span>Classic</span></div>
						<div class="matter"><div class="special">$10</div><p>15 D</p><span>Get started free trail</span></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>								
					<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
						<p class="text"><i class="la la-check"></i> 15 Features Ad Availability</p>
						<p class="text"><i class="la la-check"></i> For 15 Days</p>
						<p class="text bor"><i class="la la-check"></i> 100% Secure</p>
						<div class="text-center">
							<button type="button" data-target="#myModal" data-toggle="modal">Know More</button>
						</div>
					</li>
					</div>
					<div class="col-md-3 col-sm-3">
					<li>
						<div class="heading"><p>02 </p><span>Classic Gold</span></div>
						<div class="matter"><div class="special">$20</div><p>25 D</p><span>Get started free trail</span></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>								
					<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
						<p class="text"><i class="la la-check"></i> 15 Features Ad Availability</p>
						<p class="text"><i class="la la-check"></i> For 15 Days</p>
						<p class="text bor"><i class="la la-check"></i> 100% Secure</p>
						<div class="text-center">
							<button type="button" data-target="#myModal" data-toggle="modal">Know More</button>
						</div>
					</li>
					</div>
					<div class="col-md-3 col-sm-3">
					<li>
						<div class="heading"><p>03 </p><span>Classic Platinum</span></div>
						<div class="matter"><div class="special">$10</div><p>55 D</p><span>Get started free trail</span></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>								
					<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
						<p class="text"><i class="la la-check"></i> 15 Features Ad Availability</p>
						<p class="text"><i class="la la-check"></i> For 55 Days</p>
						<p class="text bor"><i class="la la-check"></i> 100% Secure</p>
						<div class="text-center">
							<button type="button" data-target="#myModal" data-toggle="modal">Know More</button>
						</div>
					</li>
					</div>
					
					<li>
						<div class="heading"><p>04 </p><span>Till You Marry</span></div>
						<div class="matter"><div class="special">$10</div><p>35 D</p><span>Get started free trail</span></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>								
					<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
						<p class="text"><i class="la la-check"></i> 15 Features Ad Availability</p>
						<p class="text"><i class="la la-check"></i> For 15 Days</p>
						<p class="text bor"><i class="la la-check"></i> 100% Secure</p>
						<div class="text-center">
							<button type="button" data-target="#myModal" data-toggle="modal">Know More</button>
						</div>
					</li>
				</ul>
			</div>
						
						
					</div>	
					
					
					
				</div>	
				
			</div>
			
		</div>
		
	</div>
</div>
<!-- content end here -->


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
<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<p class="text-center" style="font-size:20px;color:#000;">COMPARE MEMBERSHIP PACKAGES</p>
					<button class="close" data-dismiss="modal" type="button">&times;</button>
				</div>
				<div class="modal-body scrollstyle">
					<div class="row details">
						<div class="near_by_hotel_wrapper">
<div class="near_by_hotel_container">
  <table class="table no-border custom_table dataTable no-footer dtr-inline header-first">
    
    <thead>
      <tr class="first-header">
        <th>PACKAGES</th>
        <th class="text-center">CLASSIC</th>
        <th class="text-center">CLASSIC<br>ADVANTAGE</th>
                <th class="text-center">CLASSIC<br>PREMIUM</th>
                        <th class="text-center">Till-U-Marry<sup>*</sup></th>
                                <th class="text-center">FREE</th>
                                        
      </tr>
	   <tr class="second-header">
        <th>Duration Price</th>
        <th class="text-center">
		
			<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
					<p>Rs.4500</p>
					<p>(Rs.1500/Month)</p>
		
		
		</th>
        <th class="text-center">
		
		<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
					<p>Rs.5200</p>
					<p>(Rs.1733/Month)</p>
					</th>
                <th class="text-center">
				<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
					<p>Rs.6500</p>
					<p>(Rs.2167/Month)</p>
				</th>
                        <th class="text-center">
						<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
					<p>Rs.10900</p>
					<p>(Rs.908/Month)</p>
						</th>
                                <th class="text-center">
								<div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>
					
						</select>
					</div>
					<p>Rs.4500</p>
					<p>(Rs.1500/Month)</p>
								</th>
                                        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Send Unlimited personalized messages*</b></td>
        <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
            <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></i></td>
      </tr>
     <tr>
        <td><b>Access verified <br>mobile numbers*</b></td>
        <td class="text-center icon-center"><p>40 Nos</p></i></td>
            <td class="text-center icon-center"><p>55 Nos</p></td>
                <td class="text-center icon-center"><p>70 Nos</p></td>
                <td class="text-center icon-center"><p>300 Nos <br>25/month</p></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></i></td>
      </tr>
      <tr>
        <td><b>Send SMS</b></td>
        <td class="text-center icon-center"><P>30 SMS</P></td>
            <td class="text-center icon-center"><P>45 SMS</P></td>
                <td class="text-center icon-center"><P>60 SMS</P></td>
                <td class="text-center icon-center"><P>240 SMS<br>20/month</P></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
      </tr>
	   <tr>
        <td><b>Chat instantly <br>with prospects</b></td>
        <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
            <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
      </tr>
	   <tr>
        <td><b>View Horoscope of members</b></td>
        <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
            <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
      </tr>
	    <tr>
        <td><b>Profile Highlighter:</b><br>
Makes your profile Stand Out !</td>
        <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
            <td class="text-center icon-center"><P> 2 Month</P></td>
                <td class="text-center icon-center"><P> 3 Month</P></td>
                <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
      </tr>
	    <tr>
        <td><b>AstroMatch:</b><br><b>Match your horoscope with other members' horoscopes</b></td>
        <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
            <td class="text-center icon-center"><P> 100 Matches</P></td>
                <td class="text-center icon-center"><P> 100 Matches</P></td>
                <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
 <td class="text-center icon-center"><i class="la la-close" style="font-size:24px;color:#FF0000;"></i></td>
      </tr>
	   <tr>
        <td><b>Enhanced Privacy:</b><br>Photo / Horoscope / Phone</td>
        <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
            <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
                <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
 <td class="text-center icon-center"><i class="la la-check" style="font-size:24px;color:#2ad837;"></i></td>
      </tr>
	   
	  
    </tbody>
  </table>
</div>
</div>
						
					</div>
					
				</div>
			</div>
		</div>
		</div><!-- Modal1 end-->
		
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

<!-- Mirrored from wptheme.co.in/classified_html/education_category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:09 GMT -->
</html>

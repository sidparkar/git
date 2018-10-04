<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/dashboard_message.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:15 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>User Profile</title>
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
	<!-- header start here-->
 <?php include_once("header.php");?>
<!--top end here -->
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
												<div class="col-md-12 col-sm-12 col-xs-12 priceplan">
				<h5>Pricing Plans</h5>
				<hr>
				<ul class="list-inline">
				<div class="col-md-3 col-sm-3">
					<li>
						<div class="heading"><p>01 </p><span>Classic</span></div>
						<div class="matter"><div class="special">$10</div><p id="selectedMonth">15 D</p></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>
					<div class="form-group">
					<select class="form-control-package" id="chosen_a" onchange="changeMonth()">
						<option value=""> Select Duration</option>
						<option value="3 Months" data-id="3 Months">3 Months</option>
						<option value="6 Months" data-id="2 Months">6 Months</option>
						<option value="12 Months" data-id="1 Months">12 Months</option>

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
						<div class="matter"><div class="special" id="goldMoney">$20</div><p id="goldMonth">25 D</p></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>
					<div class="form-group">
					<select class="form-control-package" id="chosen_b" onchange="changegoldMonth()">
						<option value="0"> Select Duration</option>
						<option value="3 Months" data-id="3 Months">3 Months</option>
						<option value="6 Months" data-id="6 Months">6 Months</option>
						<option value="12 Months" data-id="12 Months">12 Months</option>

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
						<div class="matter"><div class="special">$10</div><p id="platinumMonth">55 D</p></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>
					<div class="form-group">
					<select class="form-control-package" id="chosen_c" onchange="changeplatinumMonth()">
						<option value="0"> Select Duration</option>
						<option value="3 Months">3 Months</option>
						<option value="6 Months">6 Months</option>
						<option value="12 Months">12 Months</option>

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
						<div class="matter"><div class="special">$10</div><p id="tillmarryMonth">35 D</p></div>
						<p class="text"><i class="la la-check"></i> Select duration of package</p>
					<div class="form-group">
					<select class="form-control-package" id="chosen_d" onchange="changetillmarryMonth()">
						<option value="0"> Select Duration</option>
						<option value="3 Months">3 Months</option>
						<option value="6 Months">6 Months</option>
						<option value="12 Months">12 Months</option>

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
								<!-- <div class="form-group">
					<select class="form-control-package">
						<option value="0"> Select Duration</option>
						<option value="1">3 Months</option>
						<option value="1">6 Months</option>
						<option value="1">12 Months</option>

						</select>
					</div>
					<p>Rs.4500</p>
					<p>(Rs.1500/Month)</p> -->
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
			<tr class="pay-submit">
         <td></td>
         <td class="text-center icon-center">
					<button class="btn-primary" type="button" onclick="location.href='payments.php'">Submit</button>
         </td>
          <td class="text-center icon-center">
          	<button class="btn-primary" type="button" onclick="location.href='payments.php'">Submit</button>
          </td>
					<td class="text-center icon-center">
						<button class="btn-primary" type="button" onclick="location.href='payments.php'">Submit</button>
					</td>
					<td class="text-center icon-center">
						<button class="btn-primary" type="button" onclick="location.href='payments.php'">Submit</button>
					</td>

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
<!-- pop-window-->
<button class="open-button" onclick="openForm()"><i class="fa fa-comments-o" style="font-size: 20px;"></i> Chat</button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<!-- end pop-window-->
<!-- footer end here -->
<!-- package month change -->
<script>
function changeMonth() {
  var selectedMonth = document.getElementById("chosen_a").value;
  document.getElementById("selectedMonth").innerHTML = selectedMonth;
}
</script>
<script>
function changegoldMonth() {
  var goldMonth = document.getElementById("chosen_b").value;
  document.getElementById("goldMonth").innerHTML = goldMonth;
}
</script>
<script>
function changeplatinumMonth() {
  var platinumMonth = document.getElementById("chosen_c").value;
  document.getElementById("platinumMonth").innerHTML = platinumMonth;
}
</script>
<script>
function changetillmarryMonth() {
  var tillmarryMonth = document.getElementById("chosen_d").value;
  document.getElementById("tillmarryMonth").innerHTML = tillmarryMonth;
}
</script>
<!-- end package month change -->
	<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
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
<script src="js/preetycheble/prettyCheckable.min.js"></script>
<link rel="stylesheet" href="js/preetycheble/prettyCheckable.css"/>
</body>

<!-- Mirrored from wptheme.co.in/classified_html/dashboard_message.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:17 GMT -->
</html>

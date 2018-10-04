<?php

$mysqli = new mysqli("localhost", "root", "", "matrimony");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$profile_for = $_POST['user_profile'];
		$username = $_POST['username'];
		$gender = $_POST['gender'];
		$b_date = $_POST['date'];
		$u_religion = $_POST['user_rel'];
		$u_mother_tounge = $_POST['user_lan'];
		$u_caste = $_POST['user_caste'];
		$u_country = $_POST['user_stay'];
		$u_phone = $_POST['user_phone'];
		$u_email = $_POST['user_email'];
		$u_password = $_POST['user_password'];

			$sql="INSERT INTO register(profile_for,username,gender,b_date,religion,mother_tounge,caste,country,phone,email,password)
			values('$profile_for','$username','$gender','$b_date','$u_religion','$u_mother_tounge','$u_caste','$u_country','$u_phone','$u_email','$u_password')";
			 $res = $mysqli->query($sql);

        if ($res == true)
		{
            echo '<script>alert("info added...!!!!!!");</script>';
        }
		else {
            echo '<script>alert("info failed...!!!!!!");</script>';
        }

	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:04 GMT -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
  <!-- Bootstrap stylesheet -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
  <!-- stylesheet -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="css/ele-style.css" rel="stylesheet" type="text/css" />
  <!-- font-awesome -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- line-awesome -->
  <link href="line-awesome/css/line-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- crousel css -->
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
  <!--bootstrap select-->
  <link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css" />


</head>

<body>
  <!--top start here -->
 <?php include_once("header.php");?>
    <div class="topimage">

    </div>
      <div class="bread-crumb">
        <div class="container">
          <div class="matter">
            <div class="pull-left">
              <ul class="list-inline">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="register.php">Register</a></li>
              </ul>
            </div>
            <div class="pull-right">
              <h2>Register</h2>
            </div>
          </div>
        </div>
      </div>
    <!-- breadcrumb end here -->


    <!-- faq start here -->
    <div class="commontop" style="
    background-image: url(images/form-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
">
      <div class="container">
        <img src="images/flower5.gif" data-bottom-top="@src:imagesflower5.gif; opacity:1" class="gla_animated_flower skrollable skrollable-after" height="150" alt="" style="opacity: 1;">
        <div class="col-md-12 col-sm-12 col-xs-12 login padd0">
          <div class="col-md-6 col-sm-6 col-xs-12 bor">

            <img class="img-responsive" src="images/logo.png" alt="logo" title="logo">


            <form method="post" enctype="multipart/form-data">
              <div class="form-group">
                <i class="la la-hand-o-right"></i>
                <select class="form-control" name="user_profile">
						<option value="">-Select Matrimony Profile for-</option>
						<option value="Myself">Myself</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Brother">Brother</option>
						<option value="Sister">Sister</option>
						<option value="Relative">Relative</option>
						<option value="Friend">Friend</option></select>
              </div>
              <div class="form-group">
                <i class="la la-user"></i><input type="text" name="username" value="" placeholder="Username" id="input-username" class="form-control">
					</div>

                <div class="form-group">
                  <label>Gender:</label>
                  <input type="radio" id="M" name="gender" value="MALE"><label for="M">MALE</label>
                  <input type="radio"  id="F" name="gender" value="FEMALE"><label for="F">FEMALE</label>
					      </div>
                  <div class="form-group">
                    <i class="la la-calendar-o"></i><input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text">
					 	</div>

                    <div class="form-group">
                      <i class="la la-user-plus"></i>
                      <select class="form-control" name="user_rel">
						<option value=""> Select Religion </option>
						<option value="Hindu">Hindu</option>
						<option value="Muslim - Shia">Muslim - Shia</option>
						<option value="Muslim - Sunni">Muslim - Sunni</option>
						<option value="Muslim - Others">Muslim - Others</option>
						<option value="Christian - Catholic">Christian - Catholic</option>
						<option value="Christian - Orthodox">Christian - Orthodox</option>
						<option value="Christian - Protestant">Christian - Protestant</option>
						<option value="Christian - Others">Christian - Others</option>
						<option value="Sikh">Sikh</option>
						<option value="Jain - Digambar">Jain - Digambar</option>
						<option value="Jain - Shwetambar">Jain - Shwetambar</option>
						<option value="Jain - Others">Jain - Others</option>
						<option value="Parsi">Parsi</option>
						<option value="Buddhist">Buddhist</option>
						<option value="Inter-Religion">Inter-Religion</option>
						</select>
                    </div>
                    <div class="form-group">
                      <i class="la la-language"></i>
                      <select class="form-control" name="user_lan">
						<option value="">Select Mother Tongue</option>
            <optgroup label="--Frequently Used--">
              <option value="Bengali">Bengali</option>
              <option value="Gujarati">Gujarati</option>
              <option value="Hindi">Hindi</option>
              <option value="Kannada">Kannada</option>
              <option value="31">Malayalam</option>
              <option value="33">Marathi</option>
              <option value="34">Marwari</option>
              <option value="40">Oriya</option>
              <option value="41">Punjabi</option>
              <option value="45">Sindhi</option>
              <option value="47">Tamil</option>
              <option value="48">Telugu</option>
              <option value="51">Urdu</option>
              </optgroup>
              <optgroup label="--More--">
                <option value="54">Angika</option>
                <option value="1">Arunachali</option>
                <option value="2">Assamese</option>
                <option value="3">Awadhi</option>
                <option value="5">Bhojpuri</option>
                <option value="6">Brij</option>
                <option value="7">Bihari</option>
                <option value="53">Badaga</option>
                <option value="8">Chatisgarhi</option>
                <option value="9">Dogri</option>
                <option value="10">English</option>
                <option value="11">French</option>
                <option value="12">Garhwali</option>
                <option value="13">Garo</option>
                <option value="15">Haryanvi</option>
                <option value="16">Himachali/Pahari</option>
                <option value="18">Kanauji</option>
                <option value="20">Kashmiri</option>
                <option value="21">Khandesi</option>
                <option value="22">Khasi</option>
                <option value="23">Konkani</option>
                <option value="24">Koshali</option>
                <option value="25">Kumoani</option>
                <option value="26">Kutchi</option>
                <option value="27">Lepcha</option>
                <option value="28">Ladacki</option>
                <option value="29">Magahi</option>
                <option value="30">Maithili</option>
                <option value="32">Manipuri</option>
                <option value="35">Miji</option>
                <option value="36">Mizo</option>
                <option value="37">Monpa</option>
                <option value="38">Nicobarese</option>
                <option value="39">Nepali</option>&gt;
                <option value="42">Rajasthani</option>
                <option value="43">Sanskrit</option>
                <option value="44">Santhali</option>
                <option value="46">Sourashtra</option>
                <option value="49">Tripuri</option>
                <option value="50">Tulu</option>
              </optgroup>
            </select>
                    </div>



          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">


            <div class="donot">If you have an account already? <a href="login.php">So Login Now</a></div>

            <div class="form-group">
              <i class="la la-pencil-square-o"></i>
              <select class="form-control" name="user_caste">
						<option value="0">-Select Caste / Division-</option>
						<option value="Teli">Teli</option>
						<option value="Maratha">Maratha</option>
						<option value="9">Daughter</option>
						<option value="10">Brother</option>
						<option value="11">Sister</option>
						<option value="4">Relative</option>
						<option value="5">Friend</option></select>
            </div>

            <div class="form-group">
              <i class="la la-building"></i>
              <select class="form-control" name="user_stay">
						<option value="">-Select Country living in-</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Delhi">Delhi</option>
						<option value="9">Daughter</option>
						<option value="10">Brother</option>
						<option value="11">Sister</option>
						<option value="4">Relative</option>
						<option value="5">Friend</option></select>
            </div>
            <div class="form-group">
              <i class="la la-phone"></i><input type="text" name="user_phone" value="" placeholder="Phone Number" id="input-email" class="form-control">
					</div>
              <div class="form-group">
                <i class="la la-envelope-o"></i><input type="text" name="user_email" value="" placeholder="Email Address" id="input-email" class="form-control">
					</div>
                <div class="form-group">
                  <i class="la la-unlock"></i><input type="password" name="user_password" value="" placeholder="Password" id="input-password" class="form-control">
					</div>

                  <div class="links">
                    <i class="la la-check-circle"></i>Remember me
                  </div>
                  <input type="submit" value="Register Now" class="btn btn-primary btn-block">
                </form>

			</div>
                </div>
              </div>
            </div>
            <!-- faq end here -->

            <div class="banner"  style="background: url(images/slider-background.jpg);  background-size: cover;">

            	<div class="container">
            		<div class="row wedding-plan">
            			<div class="col-sm-5">
            				<img src="images/WeddingPlanner.png" class="img-responsive" alt="image" title="title"  />
            			</div>
                  <div class="col-sm-7 planner-details">
                    <div class="innerblock-hdr" style="margin:40px 0px 20px 0px;"><a href="marriage-services.php" style="text-decoration:none;" target="_blank">Save Time &amp; Money.</a></div>
						<div class="innerblock-hdr-txt1" style="font-size: 22px;line-height:24px;"><a href="marriage-services.php" style="text-decoration:none;">Get the best deals and great savings<br>on all wedding related services!</a></div>
						<div class="innerblock-hdr-txt1" style="font-size: 21px;line-height:24px;font-style:italic;margin-top:25px;"><a href="marriage-services.php" style="text-decoration:none;">Wedding Venues, Caterers, and<br>hundreds of other such services.</a></div>
						<a href="marriage-services.php" style="text-decoration:none; position:relative; z-index:999;" target="_blank"><span class="innerblock-btn2" style="background:#df7363;">KNOW MORE</span></a>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci
                      lobortis feugiat.</p>

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

            <!-- <script>
              function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
              }

              // Get the element with id="defaultOpen" and click on it
              document.getElementById("defaultOpen").click();
            </script> -->
            <!-- jquery -->
            <script>
              $(function() {
                $('.toggle-menu').click(function() {
                  $('.exo-menu').toggleClass('display');

                });

              });
            </script>



            <script>
              $(document).ready(function() {
                $('#date').datepicker({
                  format: "dd/mm/yyyy"
                });
              });
            </script>
            <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"> </script>
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

<!-- Mirrored from wptheme.co.in/classified_html/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:04 GMT -->

</html>

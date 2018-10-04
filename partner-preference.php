<?php
include_once("config.php");
if(isset($_POST['submit'])){
$partner_age=$_POST["partner_age"];
$partner_height=$_POST["partner_height"];
$partner_martial_status=$_POST["Z"];
$partner_physical_status=$_POST["Y"];
$partner_eating_habits=$_POST["X"];
$partner_drinking_habits=$_POST["W"];
$partner_smoking_habits=$_POST["V"];
$partner_religion=$_POST["partner_religion"];
$partner_mother_tongue=$_POST["partner_mothertongue"];
$partner_caste=$_POST["partner_caste"];
$partner_star=$_POST["partner_star"];
$partner_manglik=$_POST["U"];
$partner_country=$_POST["partner_country"];
$partner_citizenship=$_POST["partner_citizenship"];
$partner_education=$_POST["partner_education"];
$partner_occupation=$_POST["partner_occupation"];
$partner_annualincome=$_POST["partner_annual-income"];
$partner_aboutpartner=$_POST["about_partner"];

$sql = "INSERT INTO partner_preference(partner_age, partner_height, partner_martial_status, partner_physical_status, partner_eating_habits, partner_drinking_habits, partner_smoking_habits, partner_religion, partner_mother_tongue, partner_select_caste, partner_star, partner_manglik, partner_country, partner_citizenship, partner_education, partner_occupation, partner_annual_income, about_partner) 
        VALUES('$partner_age','$partner_height','$partner_martial_status','$partner_physical_status','$partner_eating_habits','$partner_drinking_habits','$partner_smoking_habits','$partner_religion','$partner_mother_tongue','$partner_caste','$partner_star','$partner_manglik','$partner_country','$partner_citizenship','$partner_education','$partner_occupation','$partner_annualincome','$partner_aboutpartner')";

$result = $mysqli->query($sql);
if(!$result){
    echo'<script>alert("Info added failed")</script>';
}else{
    echo'<script>alert("Info adding successfully")</script>';
}

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/terms_and_conditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:30 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Partner Preference</title>
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
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
					<li><a href="login.html"><i class="la la-plus-square"></i> <span>Login</span></a></li>
					<li><a href="register.html"><i class="la la-key"></i> <span>Register</span></a></li>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="logo">
                            <h1 class="partner">Partner Preference</h1>
                        </div>
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
					<li><a href="terms_and_conditions.html">Partner Preference</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>
<!-- breadcrumb end here -->


<!-- faq start here -->
<div class="commontop">
	<div class="container">
            <form action="" method="POST"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
          <h5>Basic Preferences</h5>
          <hr/>
					<div class="mainbox">
            
						<div class="container">
						<div class="row" style="width:75%; margin-top: -34px">
                                <div class="paddright">
										<div class="col-md-2"><span>Age<sup class="top-sup">*</sup></span></div>
										<div class="col-md-10 input-padding">
                                        <select class="selectpicker form-control" name="partner_age">
                                        <option value="Select Age">Select Age</option>
                                        <option value="18-22">18-22</option>
                                        <option value="23-27">23-27</option>
                                        <option value="28-32">28-32</option>
                                        <option value="33-37">33-37</option>
                                        <option value="38-42">38-42</option>
                                        <option value="43-47">43-47</option>
                                        </select>
                                    </div>
									</div>
								<div class="paddright">
								<div class="col-md-2"><span>Height<sup class="top-sup">*</sup></span></div>
								<div class="col-md-10 input-padding">
                                    <select class="selectpicker form-control" name="partner_height">
                                        <option value="Select Height">Select Height</option>
                                        <option value="4ft 0in/121.92cm - 4ft 5in/134.62cm">4ft 0in/121.92cm - 4ft 5in/134.62cm</option>
                                        <option value="4ft 6in/137.16cm - 4ft 11in/149.86cm">4ft 6in/137.16cm - 4ft 11in/149.86cm</option>
                                        <option value="5ft 0in/152.40cm - 5ft 5in/165.10cm">5ft 0in/152.40cm - 5ft 5in/165.10cm</option>
                                        <option value="5ft 6in/167.64cm - 5ft 11in/180.34cm">5ft 6in/167.64cm - 5ft 11in/180.34cm</option>
                                        <option value="6ft 0in/182.88cm - 6ft 5in/195.58cm">6ft 0in/182.88cm - 6ft 5in/195.58cm</option>
                                        <option value="6ft 6in/198.12cm - 6ft 8in/203.20cm">6ft 6in/198.12cm - 6ft 8in/203.20cm</option>
                                        </select>
                             </div>
                            </div>
                            <div class="paddright">
								<div class="col-md-2"><span>Martial Status<sup class="top-sup">*</sup></span></div>
								<div class="col-md-10 input-padding">
                                    <input type="radio"  id="radio33" name="Z" value="All"><label for="radio33">All</label>
                                    <input type="radio"  id="radio34" name="Z" value="Unmarried"><label for="radio34">Unmarried</label>
                                    <input type="radio"  id="radio35" name="Z" value="Widow/Widower"><label for="radio35">Widow/Widower</label>
                                    <input type="radio"  id="radio36" name="Z" value="Divorced"><label for="radio36">Divorced</label>
                                    <input type="radio"  id="radio37" name="Z" value="Awaiting Divorce"><label for="radio37">Awaiting Divorce</label>
                             </div>
                            </div>
                            <div class="paddright">
								<div class="col-md-2"><span>Physical Status<sup class="top-sup">*</sup></span></div>
								<div class="col-md-10 input-padding">
                                    <input type="radio" id="radio38" name="Y" value="Normal"><label for="radio38">Normal</label>
                                    <input type="radio" id="radio39" name="Y" value="Physically Challenged"><label for="radio39">Physically Challenged</label>
                                    <input type="radio" id="radio40" name="Y" value="Doesn't Matter"><label for="radio40">Doesn't Matter</label>
                             </div>
                            </div>
                            <div class="paddright">
								<div class="col-md-2"><span>Eating Habits<sup class="top-sup">*</sup></span></div>
								<div class="col-md-10 input-padding">
                                    <input type="radio" id="radio41" name="X" value="Vegetarian"><label for="radio41">Vegetarian</label>
                                    <input type="radio" id="radio42" name="X" value="Non-Vegetarian"><label for="radio42">Non-Vegetarian</label>
                                    <input type="radio" id="radio43" name="X" value="Eggetarian"><label for="radio43">Eggetarian</label>
                                    <input type="radio" id="radio44" name="X" value="Doesn't Matter"><label for="radio44">Doesn't Matter</label>
                             </div>
                            </div>
                            <div class="paddright">
								<div class="col-md-2"><span>Drinking Habits<sup class="top-sup">*</sup></span></div>
								<div class="col-md-10 input-padding">
                                    <input type="radio" id="radio45" name="W" value="Doesn't Matter"><label for="radio45">Doesn't Matter</label>
                                    <input type="radio" id="radio46" name="W" value="Never Drinks"><label for="radio46">Never Drinks</label>
                                    <input type="radio" id="radio47" name="W" value="Drinks Socially"><label for="radio47">Drinks Socially</label>
                                    <input type="radio" id="radio48" name="W" value="Drinks Regualarly"><label for="radio48">Drinks Regularly</label>
                             </div>
                            </div>
                            <div class="paddright">
								<div class="col-md-2"><span>Smoking Habits<sup class="top-sup">*</sup></span></div>
								<div class="col-md-10 input-padding">
                                    <input type="radio" id="radio49" name="V" value="Doesn't Matter"><label for="radio49">Doesn't Matter</label>
                                    <input type="radio" id="radio50" name="V" value="Never Smokes"><label for="radio50">Never Smokes</label>
                                    <input type="radio" id="radio51" name="V" value="Smokes Occasionally"><label for="radio51">Smokes Occasionally</label>
                                    <input type="radio" id="radio52" name="V" value="Smokes Regularly"><label for="radio52">Smokes Regularly</label>
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

<!-- faq end here -->
<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Religion Preference</h5>
					<hr />
					<div class="mainbox">
						
						<div class="container">
						<div class="row" style="width:75%; margin-top: -34px">
                                <div class="paddright">
                                        <div class="col-md-2"><span>Religion<sup class="top-sup">*</sup></span></div>
                                        <div class="col-md-10 input-padding">
                                            <select class="selectpicker form-control" name="partner_religion">
                                            <option value="Select Religion">Select Religion</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Christain">Christain</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Zoroastrianism">Zoroastrianism</option>
                                            <option value="Buddhism">Buddhism</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="paddright">
                                        <div class="col-md-2"><span>Mother Tongue</span></div>
                                        <div class="col-md-10 input-padding">
                                            <select class="selectpicker form-control" name="partner_mothertongue">
                                            <option value="Select Mother Tongue">Select Mother Tongue</option>
                                            <option value="English">English</option>
                                            <option value="Marathi">Marathi</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Punjabi">Punjabi</option>
                                            <option value="Kannada">Kannada</option>
                                            <option value="Tulu">Tulu</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Telugu">Telugu</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="paddright">
                                        <div class="col-md-2"><span>Select Caste<sup class="top-sup">*</sup></span></div>
                                        <div class="col-md-10 input-padding">
                                            <select class="selectpicker form-control" name="partner_caste">
                                            <option value="Select Caste">Select Caste</option>
                                            <option value="Teli">Teli</option>
                                            <option value="obc">obc</option>
                                            <option value="sc/st">sc/st</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="paddright">
                                        <div class="col-md-2"><span>Star<sup class="top-sup">*</sup></span></div>
                                        <div class="col-md-10 input-padding">
                                            <select class="selectpicker form-control" name="partner_star">
                                             <option value="Select Star">Select Star</option>
                                             <option value="Ashwini">Ashwini</option>
                                             <option value="Bharani">Bharani</option>
                                            <option value="Krittika">Krittika</option>
                                            <option value="Rohini">Rohini</option>
                                            <option value="Mrigashira">Mrigashira</option>
                                            <option value="Ardra">Ardra</option>
                                            <option value="Punarvasu">Punarvasu</option>
                                            <option value="Pushya">Pushya</option>
                                            <option value="Ashlesha">Ashlesha</option>
                                            <option value="Magha">Magha</option>
                                            <option value="Purva Phalguni">Purva Phalguni</option>
                                            <option value="Uttara Phalguni">Uttara Phalguni</option>
                                            <option value="Hasta">Hasta</option>
                                            <option value="Chitra">Chitra</option>
                                            <option value="Swati">Swati</option>
                                            <option value="Vishakha">Vishakha</option>
                                            <option value="Anuradha">Anuradha</option>
                                            <option value="Jyeshtha">Jyeshtha</option>
                                            <option value="Mula">Mula</option>
                                            <option value="Purva Ashadha">Purva Ashadha</option>
                                            <option value="Uttara Ashadha">Uttara Ashadha</option>
                                            <option value="Shravana">Shravana</option>
                                            <option value="Dhanishta">Dhanishta</option>
                                            <option value="ShataBhisha">ShataBhisha</option>
                                            <option value="Purva Bhadrapada">Purva Bhadrapada</option>
                                            <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
                                            <option value="Revati">Revati</option>
                                            </select>
                                    </div>
                                    </div>
                                    <div class="paddright">
                                        <div class="col-md-2"><span>Manglik</span></div>
                                        <div class="col-md-10 input-padding">
                                            <input type="radio" id="radio53" name="U" value="Yes"><label for="radio53">Yes</label>
                                            <input type="radio" id="radio54" name="U" value="No"><label for="radio54">No</label>
                                            <input type="radio" id="radio55" name="U" value="Doesn't Matter"><label for="radio55">Doesn't Matter</label>
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
	
	<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Location </h5>
					<hr />
					<div class="mainbox">
						
						<div class="container">
						<div class="row" style="width:75%; margin-top: -34px">
                                <div class="paddright">
                                        <div class="col-md-2"><span>Country</span></div>
                                        <div class="col-md-10 input-padding">
                                            <select class="selectpicker form-control" name="partner_country">
                                            <option value="Select Country">Select Country</option>
                                            <option value="India">India</option>
                                            <option value="Australia">Australia</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="England">England</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Germany">Germany</option>
                                        </select>
                                    </div>
                                    </div>
                                <div class="paddright">
                                <div class="col-md-2"><span>Citizenship</span></div>
                                <div class="col-md-10 input-padding">
                                    <select class="selectpicker form-control" name="partner_citizenship">
                                    <option value="Select Citizenship">Select Citizenship</option>
                                    <option value="Republic of India">Republic of India</option>
                                    <option value="Citizen Of USA">Citizen Of USA</option>
                                    <option value="Australian Citizenship">Australian Citizenship</option>
                                    <option value="British Citizen">British Citizen</option>
                                    <option value="New Zealand Citizenship">New Zealand Citizenship</option>
                                    </select>           
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
    
    <div class="commontop">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="terms">
                            <h5>Profession Preference </h5>
                            <hr />
                            <div class="mainbox">
                                
                                <div class="container">
                                <div class="row" style="width:75%; margin-top: -34px">
                                        <div class="paddright">
                                                <div class="col-md-2"><span>Education</span></div>
                                                <div class="col-md-10 input-padding">
                                                    <select class="selectpicker form-control" name="partner_education">
                                                    <option value="Select Education">Select Education</option>
                                                    <option value="Accounting (BS, BA)">Accounting (BS, BA)</option>
                                                    <option value="Aerospace Studies (Air Force ROTC)">Aerospace Studies (Air Force ROTC)</option>
                                                    <option value="Agribusiness (BS)">Agribusiness (BS)</option>
                                                    <option value="Agricultural Communication and Journalism (BS)">Agricultural Communication and Journalism (BS)</option>
                                                    <option value="Agricultural Education (BS)">Agricultural Education (BS)</option>
                                                    <option value="Agricultural Machinery Technology Certificate (AAS, Cert)">Agricultural Machinery Technology Certificate (AAS, Cert)</option>
                                                    <option value="Agricultural Science (AS)">Agricultural Science (AS)</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="paddright">
                                                    <div class="col-md-2"><span>Occupation</span></div>
                                                    <div class="col-md-10 input-padding">
                                                    <select class="selectpicker form-control" name="partner_occupation">
                                                    <option value="Select Occupation">Select Occupation</option>
                                                    <option value="Chartered Administrators">Chartered Administrators</option>
                                                    <option value="Audiologists">Audiologists</option>
                                                    <option value="Certified Human Resources and Industrial Relations Counsellors">Certified Human Resources and Industrial Relations Counsellors</option>
                                                    <option value="Guidance Counsellors">Guidance Counsellors</option>
                                                    <option value="Criminologists">Criminologists</option>
                                                    <option value="Dieticians">Dieticians</option>
                                                    <option value="Occupational Therapists">Occupational Therapists</option>
                                                    <option value="Chartered Appraisers">Chartered Appraisers</option>
                                                    <option value="Dental Hygienists">Dental Hygienists</option>
                                                    <option value="Nursing Assistants">Nursing Assistants</option>	
                                                    </select>
                                                    </div>
                                                    </div>
                                            <div class="paddright">
                                                    <div class="col-md-2"><span>Annual Income</span></div>
                                                    <div class="col-md-10 input-padding">
                                                    <select class="selectpicker form-control" name="partner_annual-income">
                                                    <option value="Select Income">Select Income</option>
                                                    <option value="90000 - 150000">90000 - 150000</option>
                                                    <option value="160000 - 220000">160000 - 220000</option>
                                                    <option value="230000 - 290000">230000 - 290000</option>
                                                    <option value="300000 - 360000">300000 - 360000</option>
                                                    <option value="370000 - 430000">370000 - 430000</option>
                                                    <option value="440000 - 500000">440000 - 500000</option>
                                                    </select>
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

<div class="commontop">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="terms">
					<h5>Partner Description</h5>
					<hr />
					<div class="mainbox">
						
						<div class="container">
						<div class="row" style="width:75%; margin-top: -34px">
                <div class="paddright">
                        <div class="col-md-2"><span>About Partner</span></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-10 input-padding">
                        <textarea class="form-control" rows="5" name="about_partner" id="comment" placeholder="Few Lines About Your Partner"></textarea>
                  </div>
                  </div>	
						</div>
</div>
  

					</div>		
					</div>	
				</div>
			</div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 wrapper1 ">

        <button type="submit" name="submit" class="button1 btn btn-primary" style="margin-top: 14px;" value="Complete Registration" onclick="#">Save & Proceed</button>
    </form>
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
                    <li><a href="login.html">Login</a></li>
					<li><a href="contactus.html">Help & Contact us</a></li>
                    <li><a href="register.html">Register</a></li>
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

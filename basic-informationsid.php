<?php


include_once('config.php');


	if(isset($_POST['submit'])){
		$user_martial = $_POST['martial_status'];
		$user_height = $_POST['height'];
		$user_weight = $_POST['user_weight'];
		$user_caste = $_POST['caste'];
		$user_subcaste = $_POST['sub_caste'];
		$user_eating = $_POST['A'];
		$user_drinking = $_POST['B'];
		$user_smoking = $_POST['C'];
		$user_disability = $_POST['D'];
		$user_star = $_POST['star'];
		$user_rashi = $_POST['rashi'];
		$user_birthtime = $_POST['birth_time'];
		$user_birthminute = $_POST['birth_minute'];
		$user_birthperiod = $_POST['birth_period'];
		$user_birthplace = $_POST['place_of_birth'];
		$user_birthcity = $_POST['birth_city'];
		$user_education = $_POST['education'];;
		$user_occupation = $_POST['occupation'];
		$user_currency = $_POST['currency'];
		$user_income = $_POST['income'];
		$user_employed = $_POST['E'];
		$user_father = $_POST['father_status'];
		$user_mother = $_POST['mother_status'];
		$user_brother = $_POST['brother_status'];
		$brother_married = $_POST['brothers_married'];
		$user_sister = $_POST['sister_status'];
		$sister_married = $_POST['sisters_married'];
		$user_countrycode = $_POST['country_code'];
		$user_phone = $_POST['phone_no'];
		$user_plocation = $_POST['F'];
		$user_fstatus = $_POST['G'];
		$user_ftype = $_POST['H'];
		$user_fvalues = $_POST['I'];
		$user_about = $_POST['about'];

	$sql = "INSERT INTO user_info(profile_for,height,user_weight,caste,sub_caste,eating_habits,drinking_habits,smoking_habits,disability,star,rashi,birth_time,birth_minute,birth_period,birth_place,birth_city,education,occupation,currency,income,employed_in,father_status,mother_status,brother_status,brother_married,sister_status,sister_married,country_code,phone,parents_location,family_status,family_type,family_values,about_user)
			VALUES('$user_martial','$user_height','$user_weight','$user_caste','$user_subcaste','$user_eating','$user_drinking','$user_smoking','$user_disability','$user_star','$user_rashi','$user_birthtime','$user_birthminute','$user_birthperiod','$user_birthplace','$user_birthcity','$user_education','$user_occupation','$user_currency','$user_income','$user_employed','$user_father','$user_mother','$user_brother','$brother_married','$user_sister','$sister_married','$user_countrycode','$user_phone','$user_plocation','$user_fstatus','$user_ftype','$user_fvalues','$user_about');";

			$res = $mysqli->query($sql);

			if(!$res){
				echo $res=$mysqli->error;
			}else{
				echo "<script>alert('Info Added Successfully')
				window.location.href='login.php';
				</script>";
			}
			
		
 	}
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from wptheme.co.in/classified_html/terms_and_conditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:30 GMT -->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>basic Information</title>
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
</head>

<body>
	<?php include_once("header.php");?>
	<!--top start here -->
	<div class="bread-crumb">
			<div class="container">
				<div class="matter">
					<div class="pull-left">
						<ul class="list-inline">
							<li><a href="index-2.html">Home</a></li>
							<li><a href="register.php">	Basic Information</a></li>
						</ul>
					</div>
					<div class="pull-right">
						<h2>Basic Information</h2>
					</div>
				</div>
			</div>
		</div>

	<!--top end here -->

	<!-- header start here-->

	<!-- header end here -->

	<!-- breadcrumb end here -->
	<div class="topimage">



		<!-- breadcrumb end here -->


		<!-- faq start here -->


		<!-- faq end here -->
		<form action="" method="POST">
		<div class="commontop">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="terms">
							<h5>Personal Details</h5>

							<div class="mainbox">

									<div class="container">
											
										<div class="row" style="width:75%; margin-top: -34px">
											<div class="paddright">
												<div class="col-md-2"><span>Matrimony for Martial status</span></div>
												<div class="col-md-10 input-padding">
													<select class="selectpicker form-control" name="martial_status">
                      <option value="Select Individual">Select Individual</option>
                      <option value="Myself">Myself</option>
                      <option value="Daughter">Daughter</option>
                      <option value="Son">Son</option>
                      <option value="Sister">Sister</option>
                      <option value="Relative">Relative</option>
                      <option value="Friend">Friend</option>
                    </select>
												</div>
											</div>
											<div class="paddright">
												<div class="col-md-2"><span>Height</span></div>
												<div class="col-md-10 input-padding">
													<select class="selectpicker form-control bs-select-hidden" name="height">
                    <option value="1">Choose Height</option>
                    <option value="2">4ft 0in/121.92cm</option>
                    <option value="3">4ft 1in/124.46cm</option>
                    <option value="4">4ft 2in/127.00cm</option>
                    <option value="5">4ft 3in/129.54cm</option>
                    <option value="6">4ft 4in/132.08cm</option>
                    <option value="7">4ft 5in/134.62cm</option>
                    <option value="8">4ft 6in/137.16cm</option>
                    <option value="9">4ft 7in/139.70cm</option>
                    <option value="10">4ft 8in/142.24cm</option>
                    <option value="11">4ft 9in/144.78cm</option>
                    <option value="12">4ft 10in/147.32cm</option>
                    <option value="13">4ft 11in/149.86cm</option>
                    <option value="14">5ft 0in/152.40cm</option>
                    <option value="15">5ft 1in/154.94cm</option>
                    <option value="16">5ft 2in/157.48cm</option>
                    <option value="17">5ft 3in/160.02cm</option>
                    <option value="18">5ft 4in/162.56cm</option>
                    <option value="19">5ft 5in/165.10cm</option>
                    <option value="20">5ft 6in/167.64cm</option>
                    <option value="21">5ft 7in/170.18cm</option>
                    <option value="22">5ft 8in/172.72cm</option>
                    <option value="23">5ft 9in/175.26cm</option>
                    <option value="24">5ft 10in/177.80cm</option>
                    <option value="25">5ft 11in/180.34cm</option>
                    <option value="26">6ft 0in/182.88cm</option>
                    <option value="27">6ft 1in/185.42cm</option>
                    <option value="28">6ft 2in/187.96cm</option>
                    <option value="29">6ft 3in/190.50cm</option>
                    <option value="30">6ft 4in/193.04cm</option>
                    <option value="31">6ft 5in/195.58cm</option>
                    <option value="32">6ft 6in/198.12cm</option>
                    <option value="33">6ft 7in/200.66cm</option>
                    <option value="34">6ft 8in/203.20cm</option>
                </select>
												</div>
											</div>
											<div class="paddright ">
												<div class="col-md-2"><span>Weight</span></div>
												<div class="col-md-10 input-padding">
													<input type="text" class="input-style" id="" name="user_weight">

										</div>
												</div>

												<div class="paddright">
													<div class="col-md-2"><span>Caste</span></div>
													<div class="col-md-10 input-padding">
														<select class="selectpicker form-control bs-select-hidden" name="caste">
	                        <option value="1">Select Caste</option>
	                        <option value="Teli">Teli</option>
	                        <option value="obc">obc</option>
	                        <option value="sc/st">sc/st</option>
	                      </select></div>
												</div>
												<div class="paddright">
													<div class="col-md-2"><span>Sub-Caste</span></div>
													<div class="col-md-10 input-padding">
														<select class="selectpicker form-control bs-select-hidden" name="sub_caste">
	                    <option value="Select Caste">Select Caste</option>
	                    <option value="Teli">Teli</option>
	                    <option value="obc">obc</option>
	                    <option value="sc/st">sc/st</option>
	                  </select></div>
												</div>
												<div class="paddright">
													<div class="col-md-2"><span>Eating Habits</span></div>
													<div class="col-md-10 input-padding">
														<input type="radio" id="A1" name="A" value="Eggetarian"><label for="A1">Eggetarian</label>
														<input type="radio"  id="A2" name="A" value="Vegetarian"><label for="A2">Vegetarian</label>
														<input type="radio"  id="A3" name="A" value="Non-Vegetarian"><label for="A3">Non-Vegetarian</label>
													</div>
												</div>
												<div class="paddright">
													<div class="col-md-2"><span>Drinking Habits</span></div>
													<div class="col-md-10 input-padding">
														<input type="radio" id="A4" name="B" value="Yes"><label for="A4">Yes</label>
														<input type="radio" id="A5" name="B" value="No"><label for="A5">No</label>
														<input type="radio" id="A6" name="B" value="Occasionally"><label for="A6">Occasionally</label>
													</div>
												</div>
												<div class="paddright">
													<div class="col-md-2"><span>Smoking Habits</span></div>
													<div class="col-md-10 input-padding">
														<input type="radio" id="A7" name="C" value="Yes"><label for="A7">Yes</label>
														<input type="radio" id="A8" name="C" value="No"><label for="A8">No</label>
														<input type="radio" id="A9" name="C" value="Occasionally"><label for="A9">Occasionally</label>
													</div>
												</div>

												<div class="paddright">
													<div class="col-md-2"><span>Any Disability</span></div>
													<div class="col-md-10 input-padding">
														<input type="radio" id="A10" name="D" value="Normal"><label for="A10">Normal</label>
														<input type="radio" id="A11" name="D" value="Physically Challenged"><label for="A11">Physically Challenged</label>
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
							<h5>Horoscope Details</h5>

							<div class="mainbox">


									<div class="container">
										<div class="row" style="width:75%; margin-top: -34px">
											<div class="paddright">
												<div class="col-md-2"><span>Star</span></div>
												<div class="col-md-10 input-padding">
													<select class="selectpicker form-control" name="star">
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
												<div class="col-md-2"><span>Raashi</span></div>
												<div class="col-md-10 input-padding">
													<select class="selectpicker form-control" name="rashi">
								<option value="Select Raasi">Select Raasi</option>
								<option value="Mesha - Aries">Mesha - Aries</option>
								<option value="Vrishabha - Taurus">Vrishabha - Taurus</option>
								<option value="Mithuna - Gemini">Mithuna - Gemini</option>
								<option value="Karka - Cancer">Karka - Cancer</option>
								<option value="Simha - Leo">Simha - Leo</option>
								<option value="Kanya - Virgo">Kanya - Virgo</option>
								<option value="Tula - Libra">Tula - Libra </option>
								<option value="Vrishchika - Scorpio">Vrishchika - Scorpio</option>
								<option value="Dhanu - Sagittarius">Dhanu - Sagittarius</option>
								<option value="Makara - Capricorn">Makara - Capricorn</option>
								<option value="Kumbha - Aquarius">Kumbha - Aquarius</option>
								<option value="Meen - Pisces">Meen - Pisces</option>

							</select>
											</div>
											</div>
											<div class="paddright">
													<div class="col-md-2"><span>Time of Birth</span></div>
													<div class="col-md-3 input-padding">
															<select class="selectpicker form-control" name="birth_time">
																<option value="1">Hour</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
															</select>
								</div>
								<div class="col-md-3 input-padding">
									<select class="selectpicker form-control" name="birth_minute">
									<option value="1">Minute</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									</select>
								</div>
								<div class="col-md-3 input-padding">
									<select class="selectpicker form-control" name="birth_period">
										<option value="AM">AM</option>
										<option value="PM">PM</option>
									</select>
									</div>
							</div>
							<div class="paddright">
												<div class="col-md-2"><span>Place Of Birth</span></div>
												<div class="col-md-3 input-padding">
														<input type="text" class="form-control input-style" name="place_of_birth" id="State" placeholder="State">
							</div>
							<div class="col-md-3 input-padding">
						<input type="text" class="form-control input-style"  id="State"   name="birth_city" placeholder="City">
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
							<h5>Professional Details</h5>

							<div class="mainbox">

									<div class="container">
										<div class="row" style="width:75%; margin-top: -34px">
											<div class="paddright">
												<div class="col-md-2"><span>Highest Education</span></div>
												<div class="col-md-10 input-padding">
													<select class="selectpicker form-control" name="education">
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
													<select class="selectpicker form-control" name="occupation">
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
												<div class="col-md-5 input-padding">
													<select class="selectpicker form-control" name="currency">
                          <option value="Select Currency">Select Currency</option>
                          <option value="Indian Rupee">Indian Rupee</option>
                          <option value="US Dollar">US Dollar</option>
                        </select>
												</div>
												<div class="col-md-5 input-padding">
													<select class="selectpicker form-control" name="income">
                            <option value="Select Income">Select Income</option>
                            <option value="10,000-30,000">10,000-30,000</option>
                            <option value="31,000-50,000">31,000-50,000</option>
                            <option value="51,000-70,000">51,000-70,000</option>
                            <option value="71,000-90,000">71,000-90,000</option>
                            <option value="91,000-110,000">91,000-110,000</option>
                            <option value="110,001-130,000">110,001-130,000</option>
                          </select>
												</div>
											</div>
											<div class="paddright">
												<div class="col-md-2"><span>Employed In</span></div>
												<div class="col-md-10 input-padding">
													<input type="radio" id="A12" name="E" value="Government"><label for="A12">Government</label>&nbsp;&nbsp;
													<input type="radio" id="A13" name="E" value="Private"><label for="A13">Private</label>&nbsp;&nbsp;
													<input type="radio" id="A14" name="E" value="Business"><label for="A14">Business</label>&nbsp;&nbsp;
													<input type="radio" id="A15" name="E" value="Defence"><label for="A15">Defence</label>&nbsp;&nbsp;
													<input type="radio" id="A16" name="E" value="Self-Employed"><label for="A16">Self-Employed</label>
													<input type="radio" id="A17" name="E" value="Not Working"><label for="A17">Not Working</label>
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
							<h5>Family Details</h5>

							<div class="mainbox">

									<div class="container">
										<div class="row" style="width:75%; margin-top: -34px">
											<div class="paddright">
												<div class="col-md-2"><span>Father Status</span></div>
												<div class="col-md-10 input-padding">
														<select class="selectpicker form-control" name="father_status">
							  							<option value="select father status">select father status</option>
							  							<option value="Working">Working</option>
							  							<option value="Retired">Retired</option>
							  							<option value="Expired">Expired</option>
							  							</select>
											</div>
					  </div>
					  <div class="paddright">
						<div class="col-md-2"><span>Mother Status</span></div>
						<div class="col-md-10 input-padding">
							<select class="selectpicker form-control" name="mother_status">
							  <option value="select Mother status">select Mother status</option>
							  <option value="Working">Working</option>
							  <option value="Retired">Retired</option>
							  <option value="Expired">Expired</option>
							  <option value="HomeMaker">HomeMaker</option>
							  </select>
					  </div>
					  </div>
					  <div class="paddright">
						<div class="col-md-2"><span>Brother Status</span></div>
						<div class="col-md-5 input-padding">
							<select class="selectpicker form-control" name="brother_status">
							  <option value="No. of Brothers">No. of Brothers</option>
							  <option value="0">0</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							  </select>
					  </div>
					  <div class="col-md-5 input-padding">
						  <select class="selectpicker form-control" name="brothers_married">
							<option value="Brothers Married">Brothers Married</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							</select>
					</div>
					  </div>
					  <div class="paddright">
						<div class="col-md-2"><span>Sister Status</span></div>
						<div class="col-md-5 input-padding">
							<select class="selectpicker form-control" name="sister_status">
							  <option value="No. of Sister's">No. of Sister's</option>
							  <option value="0">0</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							  </select>
					  </div>
					  <div class="col-md-5 input-padding">
						  <select class="selectpicker form-control" name="sisters_married">
							<option value="Sister's Married">Sister's Married</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							</select>
					</div>
					  </div>
						<div class="paddright">
					 <div class="col-md-2"><span>Parents Contact No.</span></div>
					 <div class="col-md-5 input-padding">
						 <select class="selectpicker form-control" name="country_code">
							 <option value="select Country Code">select Country Code</option>
							 <option value="001">001</option>
							 <option value="+91">+91</option>
							 </select>
					 </div>
					 <div class="col-md-5 input-padding">
					<input type="text" class="form-control input-style"  name="phone_no" id="mobile" placeholder="Mobile Number"></textarea>
				 </div>
					 </div>
					  <div class="paddright">
						<div class="col-md-2"><span>Parents Location</span></div>
						<div class="col-md-10 input-padding">
							<input type="radio" id="A18" name="F" value="Same as my Location"><label for="A18">Same as my Location</label>
							<input type="radio" id="A19" name="F" value="Different Location"><label for="A19">Different Location</label>
					  </div>
					  </div>

						<div class="paddright">
							<div class="col-md-2"><span>Family status</span></div>
							<div class="col-md-10 input-padding">
								<input type="radio" id="A20" name="G" value="Middle Class"><label for="A20">Middle Class</label>
								<input type="radio" id="A21" name="G" value="Upper Middle Class"><label for="A21">Upper Middle Class</label>
								<input type="radio" id="A22" name="G" value="Rich"><label for="A22">Rich</label>
								<input type="radio" id="A23" name="G" value="Affluent"><label for="A23">Affluent</label>
							</div>
						</div>

						<div class="paddright">
							<div class="col-md-2"><span>Family Type</span></div>
							<div class="col-md-10 input-padding">
								<input type="radio" id="A24" name="H" value="Joint"><label for="A24">Joint</label>&nbsp;&nbsp;
								<input type="radio" id="A25" name="H" value="Nuclear"><label for="A25">Nuclear</label>&nbsp;&nbsp;
							</div>
						</div>
						<div class="paddright">
							<div class="col-md-2"><span>Family Values</span></div>
							<div class="col-md-10 input-padding">
								<input type="radio" id="A26" name="I" value="Orthodox"><label for="A26">Orthodox</label>&nbsp;&nbsp;
								<input type="radio" id="A27" name="I" value="Traditional"><label for="A27">Traditional</label>&nbsp;&nbsp;
								<input type="radio" id="A28" name="I" value="Moderate"><label for="A28">Moderate</label>&nbsp;&nbsp;
								<input type="radio" id="A29" name="I" value="liberal"><label for="A29">liberal</label>&nbsp;&nbsp;
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
							<h5>About Yourself</h5>

							<div class="mainbox">

									<div class="container">
										<div class="row" style="width:75%; margin-top: -34px">
											<div class="paddright">
												<div class="col-md-2"></div>
												<div class="col-md-10 input-padding">
													<textarea class="form-control" rows="5" id="comment" name="about" placeholder="Few Lines About Yourself"></textarea>
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

				<button type="submit" class="button1 btn btn-primary" style="margin-top: 14px;" name="submit" value="Complete Registration">Complete Registration</button>
	
			</div>
		</div>
</div>
</form>
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

			<script src="js/js-min-script.js" type="text/javascript"></script>

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

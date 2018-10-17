		<?php

		session_start();

		$user_id=$_SESSION["uid"];

			 //$partner_id=$_GET["id"];
			
		include_once('config.php');
		

		$sql="SELECT * from register WHERE user_id=".$_SESSION["uid"];
		$resb=$mysqli->query($sql);	
		$row=$resb->fetch_assoc();

		$merge_data="SELECT * FROM user_info INNER JOIN partner_preference ON user_info.user_id = partner_preference.user_id ";

		$mergeresults = mysqli_query($mysqli,$merge_data);

if(isset($_POST["submit"]))
				 {
					$uprofile=$_POST["martial_status"];
					$uheight=$_POST["height"];
					$uage=$_POST["user_age"];
					$uweight=$_POST["user_weight"];
					$ueating_habbit=addslashes($_POST["A"]);
					$udrink=addslashes($_POST["B"]);
					$umodal_smoke=addslashes($_POST["C"]);
					$udisability=addslashes($_POST["D"]);

				 $sql="UPDATE user_info SET profile_for='$uprofile', height='$uheight',user_age='$uage', user_weight='$uweight', 
				eating_habits='$ueating_habbit',drinking_habits='$udrink',smoking_habits='$umodal_smoke',disability='$udisability' WHERE user_id=".$_SESSION["uid"];
				 $res=$mysqli->query($sql);
						 echo "<script>alert('Updated Successfully ..!');
						window.location.href='my_profile.php';
						 </script>";
			}
				
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/dashboard_message.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:15 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>My PProfile</title>
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
<!--top start here -->
<?php include_once("header.php");?>
<!--top end here -->
<!-- header end here -->

<!-- breadcrumb start here -->
<div class="bread-crumb">
		<div class="container">
			<div class="matter">
				<div class="pull-left">
					<ul class="list-inline">
						<li><a href="index-2.html">Home</a></li>
						<li><a href="register.php">	My Profile</a></li>
					</ul>
				</div>
				<div class="pull-right">
					<h2>My Profile</h2>
				</div>
			</div>
		</div>
	</div>
<!-- breadcrumb end here -->
<!-- <div class="topimage">
	<img src="images/bck_bg.jpg" class="img-responsive" alt="image" title="image">
</div> -->

<!-- ad-single start here -->
<div class="commontop">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="dashboard">
										<?php 
								if(mysqli_num_rows($mergeresults)>0)
								{
		 while($resb = mysqli_fetch_array($mergeresults)){
      ?>
			
					<div class="profile">
										<div class="col-sm-3 col-xs-12">
												<img src="images/<?php echo $resb['image'];?>" width="100px">
											<div class="st-profile__menu"><i class="fa fa-cog dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
					                          <ul class="dropdown-menu">
					                            <li><a href="#">Delete</a></li>
					                            <li><a href="#">Disable</a></li>
					                          </ul>

					                        </div>
											</div>
											<div class="col-sm-9 col-xs-12 padd0">
												<h4>John Doe</h4>
												<div class="common">
													<p class="info">Location: Mumbai, Maharashtra, India</p>
													<p class="info">Age: <?php echo $resb['user_age'];?></p>
													<p class="info">Caste: <?php echo $resb['caste'];?></p>
													<p class="info">Education: <?php echo $resb['education'];?></p>
													


												</div>

											</div>
											  
										</div>


					<div class="inner-message">
		
						<div class="row">

							<div class="col-sm-9 col-xs-12">

								<div class="msg-box">
	<div class="terms terms-hr-size">
					<h5>Personal Information</h5>
					<hr style="width: 100%;">
					<div class="mainbox">
            	<div class="box">
                  <h4>A few words about myself</h4>
                  <p><?php echo $resb['about_user'];?></p>
                </div>
						<div class="box profile-hr">
                <div class="row" style="margin: 15px;">
                    <div class="col-md-6 details">
                       <h4>Basic Details</h4>
                    </div>
					<div class="col-md-6">
              <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
              right: 10px;" data-toggle="modal" data-target="#add_data_Modal" href=""> Edit <i class=" fa fa-edit"></i></a>

                </div>
                </div>
                <hr style="width: 100%;">
<div class="row">

<div class="col-md-6">
    <p><strong>Physical Status</strong> : <?php echo $resb['disability'];?></p>
    <p><strong>Weight</strong> :<?php echo $resb['user_weight'];?></p>
    <p><strong>Martial Status</strong> :<?php echo $resb['profile_for'];?></p>
    <p><strong>Drinking Habits</strong> :<?php echo $resb['drinking_habits'];?></p>
	<p><strong>Smoking Habits</strong> :<?php echo $resb['smoking_habits'];?></p>
</div>
<div class="col-md-6">
    <p><strong>Name</strong> :</p>
    <p><strong>Age</strong> :<?php echo $resb['user_age'];?></p>
    <p><strong>Height</strong> :<?php echo $resb['height'];?></p>
    <p><strong>Mother Tongue</strong> :</p>
    <p><strong>Eating Habits</strong> :<?php echo $resb['eating_habits'];?></p>
    
</div>
</div>

						</div>
            <div class="box profile-hr">
                <div class="row" style="margin: 15px;">
                    <div class="col-md-6 details">
                       <h4>Religion Information</h4>
                    </div>
					<div class="col-md-6">
              <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
              right: 10px;" > Edit <i class="fa fa-edit"></i></a>

                </div>
                </div>
                <hr style="width: 100%;">
<div class="row">
<div class="col-md-6">

    <p>Religion:</p>
    <p>Caste/Sub-Caste:<?php echo $resb['caste'];?>/<?php echo $resb['sub_caste'];?></p>
    <p>Star/Rashi:<?php echo $resb['star'];?>/<?php echo $resb['rashi'];?></p>

</div>
<div class="col-md-6">
    <p>Time of Birth:<?php echo $resb['birth_time'];?>:<?php echo $resb['birth_minute'];?><?php echo $resb['birth_period'];?></p>
    <p>Place of Birth:<?php echo $resb['birth_city'];?>,<?php echo $resb['birth_place'];?></p>
      <p>Manglik:<?php echo $resb['manglik'];?></p>
</div>
</div>

						</div>

            <div class="box profile-hr">
                <div class="row" style="margin: 15px;">
                    <div class="col-md-6 details">
                       <h4>Location</h4>
                    </div>
					<div class="col-md-6">
              <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
              right: 10px;" data-toggle="modal" data-target="#location_data_Modal"> Edit <i class="fa fa-edit"></i></a>

                </div>
                </div>
                <hr style="width: 100%;">
<div class="row">
<div class="col-md-6">

 
    <p>Location:<?php echo $resb['birth_place'];?></p>
    </div>

</div>
</div>
            <div class="box profile-hr">
                <div class="row" style="margin: 15px;">
                    <div class="col-md-6 details">
                       <h4>Professional Information</h4>
                    </div>
					<div class="col-md-6">
              <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
              right: 10px;"> Edit <i class="fa fa-edit"></i></a>

                </div>
                </div>
                <hr style="width: 100%;">
<div class="row">
<div class="col-md-6">

    <p>Education:<?php echo $resb['education'];?></p>
    <p>Employed in:<?php echo $resb['employed_in'];?></p>

    </div>
    <div class="col-md-6">
      <p>Occupation:<?php echo $resb['occupation'];?></p>
      <p>Annual Income:<?php echo $resb['income'];?></p>
    </div>
</div>
</div>

<div class="box profile-hr">
    <div class="row" style="margin: 15px;">
	<div class="col-md-6 details">
           <h4>Family Details</h4>
        </div>
<div class="col-md-6">
  <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
  right: 10px;" href="my_profile.php?id=<?php echo $row["user_id"];?>"> Edit <i class="fa fa-edit"></i></a>

    </div>
    </div>
    <hr>
<div class="row">
<div class="col-md-6">

<p>Family Values:<?php echo $resb['family_values'];?></p>
<p>Family Type:<?php echo $resb['family_type'];?></p>
<p>Family Status:<?php echo $resb['family_status'];?></p>
<p>Ancestral/Family origin:</p>

</div>
<div class="col-md-6">

    <p>Father Status:<?php echo $resb['father_status'];?></p>
    <p>Mother Status:<?php echo $resb['mother_status'];?></p>
    <p>No. of Brothers:<?php echo $resb['brother_status'];?></p>
    <p>No. of Sisters:<?php echo $resb['sister_status'];?></p>
    </div>
</div>
</div>


					</div>
                </div>
			   <div class="terms terms-hr-size">
            <h5>Partner Preference</h5>
            <hr style="width: 100%;">
            <div class="mainbox">
                <div class="box profile-hr">
                    <div class="row" style="margin: 15px;">
                        <div class="col-md-6 details">
                           <h4>Basic Details</h4>
                        </div>
              <div class="col-md-6">
                  <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
                  right: 10px;" href="my_profile.php?id=<?php echo $row["user_id"];?>"> Edit <i class="fa fa-edit"></i></a>

                    </div>
                    </div>
                  <hr style="width: 100%;">
    <div class="row">
 
    <div class="col-md-6">

        <p>Groom's Age:<?php echo $resb['partner_age']; ?></p>
        <p>Height:<?php echo $resb['partner_height']; ?></p>
        <p>Martial Status:<?php echo $resb['partner_martial_status']; ?></p>
        <p>Physical Status:<?php echo $resb['partner_physical_status']; ?></p>
        <p>Eating Habits:<?php echo $resb['partner_eating_habits']; ?></p>
        <p>Smoking Habits:<?php echo $resb['partner_smoking_habits']; ?></p>
        </div>
        <div class="col-md-6">
        <p>Drinking Habits:<?php echo $resb['partner_drinking_habits']; ?></p>
        <p>Religion:<?php echo $resb['partner_religion']; ?></p>
        <p>Mother Tongue:<?php echo $resb['partner_mother_tongue']; ?></p>
        <p>Caste:<?php echo $resb['partner_select_caste']; ?></p>
        <p>Star:<?php echo $resb['partner_star']; ?></p>
        <p>Manglik:<?php echo $resb['partner_manglik']; ?></p>
    </div>
    </div>

                </div>
              <div class="box profile-hr">
                  <div class="row" style="margin: 15px;">
                      <div class="col-md-6 details">
                         <h4>Professional Preferences</h4>
                      </div>
            <div class="col-md-6">
                <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
                right: 10px;" href="my_profile.php?id=<?php echo $row["user_id"];?>"> Edit <i class="fa fa-edit"></i></a>

                  </div>
                  </div>
                <hr style="width: 100%;">
  <div class="row">
  <div class="col-md-6">

      <p>Education:<?php echo $resb['partner_education']; ?></p>
      <p>Occupation:<?php echo $resb['partner_occupation']; ?></p>
  </div>
  <div class="col-md-6">
      <p>Annual Income:<?php echo $resb['partner_annual_income']; ?></p>

  </div>
  </div>

              </div>
              <div class="box profile-hr">
                  <div class="row" style="margin: 15px;">
                      <div class="col-md-6 details">
                         <h4>Location Preferences</h4>
                      </div>
            <div class="col-md-6">
                <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float: right;
                right: 10px;" href="my_profile.php?id=<?php echo $row["user_id"];?>"> Edit <i class="fa fa-edit"></i></a>

                  </div>
                  </div>
                <hr style="width: 100%;">
  <div class="row">
  <div class="col-md-6">

      <p>Country:<?php echo $resb['partner_country']; ?></p>
      <p>Residing State:</p>

  </div>
  <div class="col-md-6">


      <p>Citizenship:<?php echo $resb['partner_citizenship']; ?></p>
      <p>Residing City:</p>
  </div>
  </div>

              </div>

              <div class="box profile-hr">
                  <div class="row" style="margin: 15px;">
                      <div class="col-md-6 details">
                         <h4>What We Are Looking For?</h4>
                      </div>
              <div class="col-md-6">
                <a style="cursor:pointer;color:#ffffff;text-decoration:none;background:#3a90d2 no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;float:right;
                right: 10px;"> Add <i class="fa fa-edit"></i></a>

                  </div>
                  </div>
                  <hr style="width: 100%;">
                  <p><?php echo $resb['about_partner']; ?></p>
              </div>
               

	
            </div>
          </div>

								</div>
							</div>
								<div class="col-sm-3 col-xs-12">

								<div class="left right-bar">
								<div class="row">
								<div class="col-md-3 col-xs-12">
								<div class="txt-center paddt10 paddb10 fleft">
					<img src="images/user.png" width="40">
				</div>
								</div>
								<div class="col-md-9 col-xs-12">
								<div class="fleft txt-left" style="width:175px;">
				<div class="bigtxt paddt5 lheight120">Add Photos</div>
					<div class="hdtxt lheight120">Photos are the first <br>things members look for <br>in a profile. </div>
			</div>
								</div>
								<div class="clear"></div>
			<div class="paddt10 editboxhover">
				<a style="" target="_blank" class="edithover" href="https://image.marathimatrimony.com/photo/photoupload.php?gaact=addphotonow&amp;gasrc=editprofile">Add Photos Now <span>►</span></a>
			</div>
								</div>
								</div>

								<div class="left right-bar">
								<div class="row">
								<div class="col-md-3 col-xs-12">
								<div class="txt-center paddt10 paddb10 fleft">
					<img src="images/shield.png" width="40">
				</div>
								</div>
								<div class="col-md-9 col-xs-12">
								<div class="fleft txt-left" style="width:175px;">
				<div class="bigtxt paddt5 lheight120">Add Aadhar Details</div>
					<div class="hdtxt lheight120">Photos are the first <br>things members look for <br>in a profile. </div>
			</div>
								</div>
								<div class="clear"></div>
			<div class="paddt10 editboxhover">
				<a style="" target="_blank" class="edithover" href="https://image.marathimatrimony.com/photo/photoupload.php?gaact=addphotonow&amp;gasrc=editprofile">Add Photos Now <span>►</span></a>
			</div>
								</div>
								</div>
								<div class="offer">
								<div class="panel-heading premium-mem">
								<div style="text-align:center;"><img src="images/crown.png" alt="image" title="image"></div>
									<p class="text-center get-off">Become a Premium Member!!!</p>

									<p class="" style="font-size: 16px;"><i class="la la-check" style="font-size:16px;color:#2ad837;padding:5px;"></i>Contact Matches Directly </p>
									<p class="" style="font-size: 16px;"><i class="la la-check" style="font-size:16px;color:#2ad837;padding:5px;"></i>Chat and Send Message </p>
									<p class="" style="font-size: 16px;"><i class="la la-check" style="font-size:16px;color:#2ad837;padding:5px;"></i>View Horoscope </p>

									<p class="upgrade_today text-center get-off">Upgrade Today!</p>
									<button class="btn-primary upgrade-btn" type="button" onclick="location.href='upgrade_package.php'">Upgrade Now <i class="fa fa-check-circle"></i></button>

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
<?php include_once("footer.php");?>

    <!--#add_data_modal basic info-->
    <div id="add_data_Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Basic Details</h4>
          </div>
          <div class="modal-body">
		  
		  
            <form method="post" id="insert_form">
              <div class="col-md-6 form_input">
                <label>Age</label>
                <input type="text" value=" <?php echo $resb['user_age']; ?> " name="user_age" class="form-control"> <br>
			
              </div>
			    <div class="col-md-6 form_input">
                <label>Enter Weight</label>
                <input type="text" value="<?php echo $resb['user_weight']; ?>" name="user_weight" class="form-control"><br>
              </div>
             

				<div class="col-md-6 form_input">
                <label>Enter Martial Status</label>
                <div class="form-group">
                  <select class="selectpicker form-control bs-select-hidden" name="martial_status">
                   
                    <option value="Never Married" <?php if($resb["profile_for"]=='Never Married') { echo "selected";} ?>>Never Married</option>
                    <option value="Divorce" <?php if($resb["profile_for"]=='Divorce') { echo "selected";} ?>>Divorce</option>
                    <option value="Widow" <?php if($resb["profile_for"]=='Widow') { echo "selected";} ?>>Widow</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 form_input">
                <label>Enter Height</label>
                <div class="form-group">
                  <select class="selectpicker form-control bs-select-hidden" name="height">
					<option value="4ft 2in/127.00cm" <?php if($resb["height"]=='4ft 2in/127.00cm') { echo "selected";} ?>>4ft 2in/127.00cm</option>                   
                    <option value="4ft 6in/137.16cm "<?php if($resb["height"]=='4ft 6in/137.16cm') { echo "selected";} ?>>4ft 6in/137.16cm</option>
                    <option value="4ft 10in/147.32cm"<?php if($resb["height"]=='4ft 10in/147.32cm') { echo "selected";} ?>>4ft 10in/147.32cm</option>
					<option value="4ft 11in/149.86cm"<?php if($resb["height"]=='4ft 11in/149.86cm') { echo "selected";} ?>>4ft 11in/149.86cm</option>
                    <option value="5ft 0in/152.40cm"<?php if($resb["height"]=='5ft 0in/152.40cm') { echo "selected";} ?>>5ft 0in/152.40cm</option>
					<option value="5ft 1in/154.94cm" <?php if($resb["height"]=='5ft 1in/154.94cm') { echo "selected";} ?>>5ft 1in/154.94cm</option>
                    <option value="5ft 2in/157.48cm" <?php if($resb["height"]=='5ft 2in/157.48cm') { echo "selected";} ?>>5ft 2in/157.48cm</option>
                    <option value="5ft 3in/160.02cm" <?php if($resb["height"]=='5ft 3in/160.02cm') { echo "selected";} ?>>5ft 3in/160.02cm</option>
                    <option value="5ft 4in/162.56cm" <?php if($resb["height"]=='5ft 4in/162.56cm') { echo "selected";} ?>>5ft 4in/162.56cm</option>
                    <option value="5ft 5in/165.10cm" <?php if($resb["height"]=='5ft 5in/165.10cm') { echo "selected";} ?>>5ft 5in/165.10cm</option>
                    <option value="5ft 6in/167.64cm" <?php if($resb["height"]=='5ft 6in/167.64cm') { echo "selected";} ?>>5ft 6in/167.64cm</option>
                    <option value="5ft 7in/170.18cm" <?php if($resb["height"]=='5ft 7in/170.18cm') { echo "selected";} ?>>5ft 7in/170.18cm</option>
                    <option value="5ft 8in/172.72cm" <?php if($resb["height"]=='5ft 8in/172.72cm') { echo "selected";} ?>>5ft 8in/172.72cm</option>
                    <option value="5ft 9in/175.26cm" <?php if($resb["height"]=='5ft 9in/175.26cm') { echo "selected";} ?>>5ft 9in/175.26cm</option>
                    <option value="5ft 10in/177.80cm" <?php if($resb["height"]=='5ft 10in/177.80cm') { echo "selected";} ?>>5ft 10in/177.80cm</option>
                    <option value="5ft 11in/180.34cm" <?php if($resb["height"]=='5ft 11in/180.34cm') { echo "selected";} ?>>5ft 11in/180.34cm</option>
                    <option value="6ft 0in/182.88cm" <?php if($resb["height"]=='5ft 0in/182.88cm') { echo "selected";} ?>>6ft 0in/182.88cm</option>
                    <option value="6ft 1in/185.42cm"  <?php if($resb["height"]=='6ft 1in/185.42cm') { echo "selected";} ?>>6ft 1in/185.42cm</option>
                    <option value="6ft 2in/187.96cm"  <?php if($resb["height"]=='6ft 2in/187.96cm') { echo "selected";} ?>>6ft 2in/187.96cm</option>
                    <option value="6ft 3in/190.50cm" <?php if($resb["height"]=='6ft 3in/190.50cm') { echo "selected";} ?>>6ft 3in/190.50cm</option>
                    <option value="6ft 4in/193.04cm" <?php if($resb["height"]=='6ft 4in/193.04cm') { echo "selected";} ?>>6ft 4in/193.04cm</option>
                    <option value="6ft 5in/195.58cm" <?php if($resb["height"]=='6ft 5in/195.58cm') { echo "selected";} ?>>6ft 5in/195.58cm</option>
                    <option value="6ft 6in/198.12cm"  <?php if($resb["height"]=='6ft 6in/198.12cm') { echo "selected";} ?>>6ft 6in/198.12cm</option>
                    <option value="6ft 7in/200.66cm" <?php if($resb["height"]=='6ft 7in/200.66cm') { echo "selected";} ?>>6ft 7in/200.66cm</option>
                    <option value="6ft 8in/203.20cm" <?php if($resb["height"]=='6ft 8in/203.20cm') { echo "selected";} ?>>6ft 8in/203.20cm</option> 
                  </select>
                </div>
              </div>
              
              <div class="col-md-6 form_input">
                <label>Physical Status</label>
                <div class="form-group">
                 <input type="radio" id="A10" name="D" value="Normal" <?php if($resb["disability"]=='Normal') { echo "checked";} ?>><label for="A10">Normal</label>
				<input type="radio" id="A11" name="D" value="Physically Challenged" <?php if($resb["disability"]=='Physically Challenged') { echo "checked";} ?>><label for="A11">Physically Challenged</label>
                </div>
              </div>
              <div class="col-md-6 form_input">
                <label>Enter Drinking Habits</label>
                <div class="form-group">
              
				<input type="radio" id="A4" name="B" value="Yes" <?php if($resb["drinking_habits"]=='Yes') { echo "checked";} ?>><label for="A4">Yes</label>
				<input type="radio" id="A5" name="B" value="No" <?php if($resb["drinking_habits"]=='No') { echo "checked";} ?>><label for="A5">No</label>
				<input type="radio" id="A6" name="B" value="Occasionally" <?php if($resb["drinking_habits"]=='Occasionally') { echo "checked";} ?>><label for="A6">Occasionally</label>
				
                </div>
              </div>
              <div class="col-md-6 form_input">
                <label>Enter Eating Habits</label>
                 <div class="form-group">
					<input type="radio" id="A1" name="A" value="Eggetarian" <?php  if($resb["eating_habits"]=='Eggetarian') {echo "checked";}?>><label for="A1">Eggetarian</label>
					<input type="radio"  id="A2" name="A" value="Vegetarian" <?php if($resb["eating_habits"]=='Vegetarian') {echo "checked";}?>><label for="A2">Vegetarian</label>
					<input type="radio"  id="A3" name="A" value="Non-Vegetarian" <?php if($resb["eating_habits"]=='Non-Vegetarian') {echo "checked";}?>><label for="A3">Non-Vegetarian</label>
					
                </div>
              </div>
              <div class="col-md-6 form_input">
                <label>Enter Smoking Habits</label>
                <div class="form-group">
                <input type="radio" id="A7" name="C" value="Yes" <?php  if($resb["smoking_habits"]=='Yes') {echo "checked";}?>><label for="A7">Yes</label>
				<input type="radio" id="A8" name="C" value="No" <?php  if($resb["smoking_habits"]=='No') {echo "checked";}?>><label for="A8">No</label>
				<input type="radio" id="A9" name="C" value="Occasionally" <?php  if($resb["smoking_habits"]=='Occasionally') {echo "checked";}?>><label for="A9">Occasionally</label>
                </div>
              </div>
            

              <input type="submit" name="submit" id="insert" value="update" class="btn btn-success" />

            </form>
			
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
	 
    </div>
	
	
	 <!--Bride's Location modal-->
	<div id="location_data_Modal" class="modal fade">
		 <div class="modal-dialog">
				<div class="modal-content">
				 <div class="modal-header">

						<h4 class="modal-title">Location</h4>
				 </div>
				 <div class="modal-body">
						<form method="post" id="insert_form">
							
 <div class="col-md-12 form_input">
 <label>Location</label>
	<input type="text" name="citizenship" class="form-control" ><br>
 </div>
 <input type="submit" name="submit" id="insert" value="Update" class="btn btn-success" />
						</form>
				 </div>
				 <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				 </div>
				</div>
		 </div>
	</div>
	<!--regional  modal of user-->
		<div class="modal fade" id="religion_data_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Religion Information</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="post" name="insert_form">
						<div class="col-md-6 form_input">
							<label>Enter Religion</label>
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" name="Religion">
									<option value="">
										Select Religion
									</option>
									<option value="Hindu">
										Hindu
									</option>
									<option value="Muslim - Shia">
										Muslim - Shia
									</option>
									<option value="Muslim - Sunni">
										Muslim - Sunni
									</option>
									<option value="Muslim - Others">
										Muslim - Others
									</option>
									<option value="Christian - Catholic">
										Christian - Catholic
									</option>
									<option value="Christian - Orthodox">
										Christian - Orthodox
									</option>
									<option value="Christian - Protestant">
										Christian - Protestant
									</option>
									<option value="Christian - Others">
										Christian - Others
									</option>
									<option value="Sikh">
										Sikh
									</option>
									<option value="Jain - Digambar">
										Jain - Digambar
									</option>
									<option value="Jain - Shwetambar">
										Jain - Shwetambar
									</option>
									<option value="Jain - Others">
										Jain - Others
									</option>
									<option value="Parsi">
										Parsi
									</option>
									<option value="Buddhist">
										Buddhist
									</option>
									<option value="Inter-Religion">
										Inter-Religion
									</option>
								</select>
							</div>
						</div><label>Minutes</label>
						<div class="col-md-2 input-padding">
							<select class="selectpicker form-control" name="birth_time">
								<option value="1">
									Hour
								</option>
								<option value="2">
									0
								</option>
								<option value="3">
									1
								</option>
								<option value="4">
									2
								</option>
								<option value="5">
									3
								</option>
								<option value="6">
									4
								</option>
								<option value="7">
									5
								</option>
								<option value="8">
									6
								</option>
								<option value="9">
									7
								</option>
								<option value="10">
									8
								</option>
								<option value="11">
									9
								</option>
								<option value="11">
									10
								</option>
								<option value="11">
									11
								</option>
								<option value="11">
									12
								</option>
								<option value="11">
									13
								</option>
								<option value="11">
									14
								</option>
								<option value="11">
									15
								</option>
								<option value="11">
									16
								</option>
								<option value="11">
									17
								</option>
								<option value="11">
									18
								</option>
								<option value="11">
									19
								</option>
								<option value="11">
									20
								</option>
								<option value="11">
									21
								</option>
								<option value="11">
									22
								</option>
								<option value="11">
									23
								</option>
							</select>
						</div><label>Minutes</label>
						<div class="col-md-2 input-padding">
							<select class="selectpicker form-control" name="birth_minute">
								<option value="1">
									Minute
								</option>
								<option value="2">
									0
								</option>
								<option value="3">
									1
								</option>
								<option value="4">
									2
								</option>
								<option value="5">
									3
								</option>
								<option value="6">
									4
								</option>
								<option value="7">
									5
								</option>
								<option value="8">
									6
								</option>
								<option value="9">
									7
								</option>
								<option value="10">
									8
								</option>
								<option value="11">
									9
								</option>
								<option value="11">
									10
								</option>
								<option value="11">
									11
								</option>
								<option value="11">
									12
								</option>
								<option value="11">
									13
								</option>
								<option value="11">
									14
								</option>
								<option value="11">
									15
								</option>
								<option value="11">
									16
								</option>
								<option value="11">
									17
								</option>
								<option value="11">
									18
								</option>
								<option value="11">
									19
								</option>
								<option value="11">
									20
								</option>
								<option value="11">
									21
								</option>
								<option value="11">
									22
								</option>
								<option value="11">
									23
								</option>
							</select>
						</div><label>birth period</label>
						<div class="col-md-2 input-padding">
							<select class="selectpicker form-control" name="birth_period">
								<option value="AM">
									AM
								</option>
								<option value="PM">
									PM
								</option>
							</select>
						</div>
						<div class="col-md-6 form_input">
							<label>Caste</label> <select class="selectpicker form-control bs-select-hidden" name="caste">
								<option value="Select Caste">
									Select Caste
								</option>
								<option value="Teli">
									Teli
								</option>
								<option value="obc">
									obc
								</option>
								<option value="sc/st">
									sc/st
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Place of Birth</label> <input class="form-control" name="place_of_birth" type="text"><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Gothram</label> <input class="form-control" name="gothram" type="text"><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Dosh</label> <input class="form-control" name="dosh" type="text"><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Star</label> <select class="selectpicker form-control" name="partner_star">
								<option value="Select Star">
									Select Star
								</option>
								<option value="Ashwini">
									Ashwini
								</option>
								<option value="Bharani">
									Bharani
								</option>
								<option value="Krittika">
									Krittika
								</option>
								<option value="Rohini">
									Rohini
								</option>
								<option value="Mrigashira">
									Mrigashira
								</option>
								<option value="Ardra">
									Ardra
								</option>
								<option value="Punarvasu">
									Punarvasu
								</option>
								<option value="Pushya">
									Pushya
								</option>
								<option value="Ashlesha">
									Ashlesha
								</option>
								<option value="Magha">
									Magha
								</option>
								<option value="Purva Phalguni">
									Purva Phalguni
								</option>
								<option value="Uttara Phalguni">
									Uttara Phalguni
								</option>
								<option value="Hasta">
									Hasta
								</option>
								<option value="Chitra">
									Chitra
								</option>
								<option value="Swati">
									Swati
								</option>
								<option value="Vishakha">
									Vishakha
								</option>
								<option value="Anuradha">
									Anuradha
								</option>
								<option value="Jyeshtha">
									Jyeshtha
								</option>
								<option value="Mula">
									Mula
								</option>
								<option value="Purva Ashadha">
									Purva Ashadha
								</option>
								<option value="Uttara Ashadha">
									Uttara Ashadha
								</option>
								<option value="Shravana">
									Shravana
								</option>
								<option value="Dhanishta">
									Dhanishta
								</option>
								<option value="ShataBhisha">
									ShataBhisha
								</option>
								<option value="Purva Bhadrapada">
									Purva Bhadrapada
								</option>
								<option value="Uttara Bhadrapada">
									Uttara Bhadrapada
								</option>
								<option value="Revati">
									Revati
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Sub-Caste</label> <select class="selectpicker form-control bs-select-hidden" name="sub-caste">
								<option value="Select Sub-Caste">
									Select Sub-Caste
								</option>
								<option value="Teli">
									Teli
								</option>
								<option value="obc">
									obc
								</option>
								<option value="sc/st">
									sc/st
								</option>
							</select><br>
						</div><input class="btn btn-success" id="insert" name="Update" type="submit" value="Update">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--reginal modal end-->
		<!-- Professional Preferences modal-->
	 <div id="professional_preferences_data_Modal" class="modal fade">
     <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">

                    <h4 class="modal-title">Professional Preferences</h4>
             </div>
             <div class="modal-body">
                    <form method="post" id="insert_form">
                        <div class="col-md-12 form_input">
<label>Education</label>
<input type="text" name="education" class="form-control" ><br>
</div>
<div class="col-md-12 form_input">
<label>Occupation</label>
<input type="text" name="occupation" class="form-control" ><br>
</div>


<div class="col-md-12 form_input">
<label>Annual Income</label>
<input type="text" name="per_anum" class="form-control" ><br>
</div>

             <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success" />
                    </form>
             </div>
             <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
            </div>
     </div>
</div>
<!-- Professional Preferences modal-->

	<!--Family Details modal-->
	<div class="modal fade" id="family_details_data_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Family Details</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="post" name="insert_form">
						<div class="col-md-6 form_input">
							<label>Family Values</label> <select class="selectpicker form-control" name="family_values">
								<option value="Select Family Values">
									Select Family Values
								</option>
								<option value="Orthodox">
									Orthodox
								</option>
								<option value="Traditional">
									Traditional
								</option>
								<option value="Moderate">
									Moderate
								</option>
								<option value="Liberal">
									Liberal
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Father Status</label> <select class="selectpicker form-control" name="family_status">
								<option value="Select Family Values">
									Select Family Status
								</option>
								<option value="Middle Class">
									Middle Class
								</option>
								<option value="Upper Middle Class">
									Upper Middle Class
								</option>
								<option value="Rich">
									Rich
								</option>
								<option value="Affluent">
									Affluent
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Family Type</label> <select class="selectpicker form-control" name="family_type">
								<option value="Select Family Type">
									Select Family Type
								</option>
								<option value="Joint">
									Joint
								</option>
								<option value="Nuclear">
									Nuclear
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Mother Status</label> <select class="selectpicker form-control" name="mother_status">
								<option value="select Mother status">
									select Mother status
								</option>
								<option value="Working">
									Working
								</option>
								<option value="Retired">
									Retired
								</option>
								<option value="Expired">
									Expired
								</option>
								<option value="HomeMaker">
									HomeMaker
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Father Status</label> <select class="selectpicker form-control" name="father_status">
								<option value="select Father status">
									select Father status
								</option>
								<option value="Working">
									Working
								</option>
								<option value="Retired">
									Retired
								</option>
								<option value="Expired">
									Expired
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Brothers</label> <select class="selectpicker form-control" name="brother_status">
								<option value="No. of Brothers">
									No. of Brothers
								</option>
								<option value="0">
									0
								</option>
								<option value="1">
									1
								</option>
								<option value="2">
									2
								</option>
								<option value="3">
									3
								</option>
								<option value="4">
									4
								</option>
								<option value="5">
									5
								</option>
								<option value="6">
									6
								</option>
								<option value="7">
									7
								</option>
								<option value="8">
									8
								</option>
								<option value="9">
									9
								</option>
								<option value="10">
									10
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Ancestral/Family origin:</label> <input class="form-control" name="ancestral" type="text"><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Sisters</label> <select class="selectpicker form-control" name="sister_status">
								<option value="No. of Sister's">
									No. of Sister's
								</option>
								<option value="0">
									0
								</option>
								<option value="1">
									1
								</option>
								<option value="2">
									2
								</option>
								<option value="3">
									3
								</option>
								<option value="4">
									4
								</option>
								<option value="5">
									5
								</option>
								<option value="6">
									6
								</option>
								<option value="7">
									7
								</option>
								<option value="8">
									8
								</option>
								<option value="9">
									9
								</option>
								<option value="10">
									10
								</option>
							</select><br>
						</div><input class="btn btn-success" id="insert" name="insert" type="submit" value="Update">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--Family Details modal end-->
	
	<!--partner_basic_details_Modal For modal-->
	<div class="modal fade" id="partner_basic_details_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Partner's Basic Details</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="post" name="insert_form">
						<div class="col-md-6 form_input">
							<label>Groom's Age</label> <select class="selectpicker form-control" name="partner_age">
								<option value="Select Age">
									Select Age
								</option>
								<option value="18-22">
									18-22
								</option>
								<option value="23-27">
									23-27
								</option>
								<option value="28-32">
									28-32
								</option>
								<option value="33-37">
									33-37
								</option>
								<option value="38-42">
									38-42
								</option>
								<option value="43-47">
									43-47
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Drinking Habits</label> <select class="selectpicker form-control" name="drinking_habits">
								<option value="Select Drinking Habits">
									Select Drinking Habits
								</option>
								<option value="Doesn't Matter">
									Doesn't Matter
								</option>
								<option value="Never Drinks">
									Never Drinks
								</option>
								<option value="Drinks Socially">
									Drinks Socially
								</option>
								<option value="Drinks Regularly">
									Drinks Regularly
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Height</label> <select class="selectpicker form-control" name="partner_height">
								<option value="Select Height">
									Select Height
								</option>
								<option value="4ft 0in/121.92cm - 4ft 5in/134.62cm">
									4ft 0in/121.92cm - 4ft 5in/134.62cm
								</option>
								<option value="4ft 6in/137.16cm - 4ft 11in/149.86cm">
									4ft 6in/137.16cm - 4ft 11in/149.86cm
								</option>
								<option value="5ft 0in/152.40cm - 5ft 5in/165.10cm">
									5ft 0in/152.40cm - 5ft 5in/165.10cm
								</option>
								<option value="5ft 6in/167.64cm - 5ft 11in/180.34cm">
									5ft 6in/167.64cm - 5ft 11in/180.34cm
								</option>
								<option value="6ft 0in/182.88cm - 6ft 5in/195.58cm">
									6ft 0in/182.88cm - 6ft 5in/195.58cm
								</option>
								<option value="6ft 6in/198.12cm - 6ft 8in/203.20cm">
									6ft 6in/198.12cm - 6ft 8in/203.20cm
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Religion</label> <select class="selectpicker form-control" name="partner_religion">
								<option value="Select Religion">
									Select Religion
								</option>
								<option value="Hindu">
									Hindu
								</option>
								<option value="Muslim">
									Muslim
								</option>
								<option value="Christain">
									Christain
								</option>
								<option value="Sikh">
									Sikh
								</option>
								<option value="Zoroastrianism">
									Zoroastrianism
								</option>
								<option value="Buddhism">
									Buddhism
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Martial Status</label> <select class="selectpicker form-control" name="partner_martial_status">
								<option value="Select Martial status">
									Select martial status
								</option>
								<option value="Married">
									Married
								</option>
								<option value="Divorced">
									Divorced
								</option>
								<option value="Widow/Widower">
									Widow/Widower
								</option>
								<option value="Awaiting Divorce">
									Awaiting Divorce
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Mother Tongue</label> <select class="selectpicker form-control" name="partner_mothertongue">
								<option value="Select Mother Tongue">
									Select Mother Tongue
								</option>
								<option value="English">
									English
								</option>
								<option value="Marathi">
									Marathi
								</option>
								<option value="Hindi">
									Hindi
								</option>
								<option value="Bengali">
									Bengali
								</option>
								<option value="Punjabi">
									Punjabi
								</option>
								<option value="Kannada">
									Kannada
								</option>
								<option value="Tulu">
									Tulu
								</option>
								<option value="Tamil">
									Tamil
								</option>
								<option value="Telugu">
									Telugu
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Physical Status</label> <select class="selectpicker form-control" name="partner_physicalstatus">
								<option value="Select Physical Status">
									Select Physical Status
								</option>
								<option value="Normal">
									Normal
								</option>
								<option value="Physically Challenged">
									Physically Challenged
								</option>
								<option value="Doesn't Matter">
									Doesn't Matter
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Caste</label> <select class="selectpicker form-control" name="partner_caste">
								<option value="Select Caste">
									Select Caste
								</option>
								<option value="Teli">
									Teli
								</option>
								<option value="obc">
									obc
								</option>
								<option value="sc/st">
									sc/st
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Eating Habits</label> <select class="selectpicker form-control" name="partner_eatinghabits">
								<option value="Select Eating Habits">
									Select Eating Habits
								</option>
								<option value="Vegetarian">
									Vegetarian
								</option>
								<option value="Non-Vegetarian">
									Non-Vegetarian
								</option>
								<option value="Doesn't Matter">
									Doesn't Matter
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Star</label> <select class="selectpicker form-control" name="partner_star">
								<option value="Select Star">
									Select Star
								</option>
								<option value="Ashwini">
									Ashwini
								</option>
								<option value="Bharani">
									Bharani
								</option>
								<option value="Krittika">
									Krittika
								</option>
								<option value="Rohini">
									Rohini
								</option>
								<option value="Mrigashira">
									Mrigashira
								</option>
								<option value="Ardra">
									Ardra
								</option>
								<option value="Punarvasu">
									Punarvasu
								</option>
								<option value="Pushya">
									Pushya
								</option>
								<option value="Ashlesha">
									Ashlesha
								</option>
								<option value="Magha">
									Magha
								</option>
								<option value="Purva Phalguni">
									Purva Phalguni
								</option>
								<option value="Uttara Phalguni">
									Uttara Phalguni
								</option>
								<option value="Hasta">
									Hasta
								</option>
								<option value="Chitra">
									Chitra
								</option>
								<option value="Swati">
									Swati
								</option>
								<option value="Vishakha">
									Vishakha
								</option>
								<option value="Anuradha">
									Anuradha
								</option>
								<option value="Jyeshtha">
									Jyeshtha
								</option>
								<option value="Mula">
									Mula
								</option>
								<option value="Purva Ashadha">
									Purva Ashadha
								</option>
								<option value="Uttara Ashadha">
									Uttara Ashadha
								</option>
								<option value="Shravana">
									Shravana
								</option>
								<option value="Dhanishta">
									Dhanishta
								</option>
								<option value="ShataBhisha">
									ShataBhisha
								</option>
								<option value="Purva Bhadrapada">
									Purva Bhadrapada
								</option>
								<option value="Uttara Bhadrapada">
									Uttara Bhadrapada
								</option>
								<option value="Revati">
									Revati
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Smoking Habits</label> <select class="selectpicker form-control" name="partner_star">
								<option value="Select Smoking Habits">
									Select Smoking Habits
								</option>
								<option value="Doesn't Matter">
									Doesn't Matter
								</option>
								<option value="Never Smokes">
									Never Smokes
								</option>
								<option value="Smokes Socially">
									Smokes Socially
								</option>
								<option value="Smokes Regularly">
									Smokes Regularly
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Manglik</label>
							<div class="form-group">
								<select class="selectpicker form-control" name="manglik">
									<option value="Select Manglik Status">
										-Select Manglik Status-
									</option>
									<option value="Yes">
										Yes
									</option>
									<option value="No">
										No
									</option>
								</select>
							</div>
						</div><br>
						<input class="btn btn-success" id="insert" name="insert" type="submit" value="Update">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--partners Basic Details modal end-->
	
		
	<!--partners Professional Preferences-->
	<div class="modal fade" id="professional_preferences_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Professional Preferences</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="post" name="insert_form">
						<div class="col-md-12 form_input">
							<label>Groom's Education</label> <select class="selectpicker form-control" name="partner_education">
								<option value="Select Education">
									Select Education
								</option>
								<option value="Accounting (BS, BA)">
									Accounting (BS, BA)
								</option>
								<option value="Aerospace Studies (Air Force ROTC)">
									Aerospace Studies (Air Force ROTC)
								</option>
								<option value="Agribusiness (BS)">
									Agribusiness (BS)
								</option>
								<option value="Agricultural Communication and Journalism (BS)">
									Agricultural Communication and Journalism (BS)
								</option>
								<option value="Agricultural Education (BS)">
									Agricultural Education (BS)
								</option>
								<option value="Agricultural Machinery Technology Certificate (AAS, Cert)">
									Agricultural Machinery Technology Certificate (AAS, Cert)
								</option>
								<option value="Agricultural Science (AS)">
									Agricultural Science (AS)
								</option>
							</select><br>
						</div>
						<div class="col-md-12 form_input">
							<label>Annual Income</label> <select class="selectpicker form-control" name="partner_annual-income">
								<option value="Select Income">
									Select Income
								</option>
								<option value="90000 - 150000">
									90000 - 150000
								</option>
								<option value="160000 - 220000">
									160000 - 220000
								</option>
								<option value="230000 - 290000">
									230000 - 290000
								</option>
								<option value="300000 - 360000">
									300000 - 360000
								</option>
								<option value="370000 - 430000">
									370000 - 430000
								</option>
								<option value="440000 - 500000">
									440000 - 500000
								</option>
							</select><br>
						</div>
						<div class="col-md-12 form_input">
							<label>Occupation</label> <select class="selectpicker form-control" name="partner_occupation">
								<option value="Select Occupation">
									Select Occupation
								</option>
								<option value="Chartered Administrators">
									Chartered Administrators
								</option>
								<option value="Audiologists">
									Audiologists
								</option>
								<option value="Certified Human Resources and Industrial Relations Counsellors">
									Certified Human Resources and Industrial Relations Counsellors
								</option>
								<option value="Guidance Counsellors">
									Guidance Counsellors
								</option>
								<option value="Criminologists">
									Criminologists
								</option>
								<option value="Dieticians">
									Dieticians
								</option>
								<option value="Occupational Therapists">
									Occupational Therapists
								</option>
								<option value="Chartered Appraisers">
									Chartered Appraisers
								</option>
								<option value="Dental Hygienists">
									Dental Hygienists
								</option>
								<option value="Nursing Assistants">
									Nursing Assistants
								</option>
							</select><br>
						</div><input class="btn btn-success" id="insert" name="insert" type="submit" value="Update">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--partners Professional Preferences-->
	
	<!--partners Location Preferences-->
	<div class="modal fade" id="partners_Location_preferences_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Location Preferences</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="post" name="insert_form">
						<div class="col-md-6 form_input">
							<label>Country</label> <select class="selectpicker form-control" name="partner_country">
								<option value="Select Country">
									Select Country
								</option>
								<option value="India">
									India
								</option>
								<option value="Australia">
									Australia
								</option>
								<option value="United States of America">
									United States of America
								</option>
								<option value="England">
									England
								</option>
								<option value="New Zealand">
									New Zealand
								</option>
								<option value="United Arab Emirates">
									United Arab Emirates
								</option>
								<option value="Russia">
									Russia
								</option>
								<option value="Germany">
									Germany
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Citizenship</label> <select class="selectpicker form-control" name="partner_citizenship">
								<option value="Select Citizenship">
									Select Citizenship
								</option>
								<option value="Republic of India">
									Republic of India
								</option>
								<option value="Citizen Of USA">
									Citizen Of USA
								</option>
								<option value="Australian Citizenship">
									Australian Citizenship
								</option>
								<option value="British Citizen">
									British Citizen
								</option>
								<option value="New Zealand Citizenship">
									New Zealand Citizenship
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Residing State</label> <input class="form-control" name="residing_state" type="text"><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Residing City</label> <input class="form-control" name="residing_city" type="text"><br>
						</div><input class="btn btn-success" id="insert" name="insert" type="submit" value="Update">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--partners Location Preferences-->
	
	<!--partners Description-->
	<div class="modal fade" id="partners_description_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">What We Are Looking For</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="post" name="insert_form">
						<label>Description Of Partner</label> 
						<textarea class="form-control"></textarea> <input class="btn btn-success" id="insert" name="insert" type="submit" value="Update">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--partners What We Are Looking For-->
	  <?php 
	  	 } 
}

?>

   
    <!--#add_data_modal end-->
<!-- pop-window-->
<div id="menuBall4" class="menuBall open-button">
	<a href="#" class="ball yellowball" onclick="openForm()">
    <div class="menuText">
      <i class="fa fa-comments-o" style="font-size: 25px;"></i>  <p>Chat with us!!</p>
    </div>
  </a>
</div>
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


	<!--Bride's Location modal end-->
<!-- footer end here -->
	
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

</body>

<!-- Mirrored from wptheme.co.in/classified_html/dashboard_message.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:10:17 GMT -->
</html>

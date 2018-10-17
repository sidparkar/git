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
					$ulocation=$_POST["place_of_birth"];
					
					

				 $sql="UPDATE user_info SET profile_for='$uprofile', height='$uheight',user_age='$uage', user_weight='$uweight', 
				eating_habits='$ueating_habbit',drinking_habits='$udrink',smoking_habits='$umodal_smoke',disability='$udisability',birth_place='$ulocation' WHERE user_id=".$_SESSION["uid"];
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
<?php include_once("modals.php");?>
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

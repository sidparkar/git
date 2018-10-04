<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/classified_html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:09 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Payments</title>
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
<!--BlueSnap Hosted Payment Fields JavaScript file-->
<script type="text/javascript" src="https://sandbox.bluesnap.com/services/hosted-payment-fields/v1.0/bluesnap.hpf.mini.js"></script>

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
					<li><a href="register.php">Payments</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>payments</h2>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb end here -->
<div class="topimage">
	<img src="images/form-bg.jpg" class="img-responsive" alt="image" title="image" />
</div>




<!-- faq start here -->
<div class="commontop blog">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12 payment-border">
				<div class="box">

				         <h3>Select Your Payment Option</h3>
				         <hr/>
				         <div class="col-xs-3"> <!-- required for floating -->
				           <!-- Nav tabs -->
				           <ul class="nav nav-tabs tabs-left sideways">
				             <li class="active"><a href="#home-v" data-toggle="tab">Credit Card</a></li>
				             <li><a href="#debit-v" data-toggle="tab">Debit Card</a></li>
				             <li><a href="#messages-v" data-toggle="tab">Free Doorstep Collection</a></li>

				           </ul>
				         </div>

				         <div class="col-xs-9">
				           <!-- Tab panes -->
				           <div class="tab-content">
				             <div class="tab-pane active" id="home-v">
											 <div style="border-bottom:1px solid #d7d7d7;" class="paddb10">
											<div class="">Pay Using Credit Card</div><div class="clear"></div>
											</div>
											 <div class="panel panel-primary">
   <div class="panel-heading">
       <h3 class="panel-title">Credit Card Payment</h3>
   </div>
   <form class="panel-body" action="your-form-handling-page" method="POST" id="checkout-form" onsubmit="return do_when_clicking_submit_button()">
     <div class="row">

       <div class="form-group col-md-12">
           <label for="cardholder-name">Cardholder Name</label>
           <input type="text" class="form-control" id="cardholder-name">
           <span class="helper-text"></span>
        </div>
        <!--Hosted Payment Field for CC number-->
        <div class="form-group col-xs-9">
           <label for="card-number">Card Number</label>
           <div class="input-group">
             <div class="form-control" id="card-number" data-bluesnap="ccn"></div>
             <div id="card-logo" class="input-group-addon"><img src="https://files.readme.io/d1a25b4-generic-card.png" height="20px"></div>
          </div>
          <span class="helper-text" id="card-help"></span>
        </div>
 			 <!--Hosted Payment Field for CC CVV-->
 			<div class="form-group col-xs-3">
          <label for="cvv">CVV</label>
          <div class="form-control" id="cvv" data-bluesnap="cvv"></div>
          <span class="helper-text" id="cvv-help"></span>
       </div>

     <!--Hosted Payment Field for CC EXP-->
        <div class="form-group col-xs-6">
           <label for="exp-date">Exp. (mm/yyyy)</label>
           <div class="form-control" id="exp-date" data-bluesnap="exp"></div>
           <span class="helper-text" id="exp-help"></span>
        </div>
 		  <div class="form-group col-xs-6">
           <label for="cardholder-name">Postal Code</label>
           <input type="text" class="form-control" id="cardholder-name">
           <span class="helper-text"></span>
        </div>
     </div>

 		<button class="btn btn-raised btn-info btn-lg col-md-4" type="submit" id="submit-button">Pay Now</button>

 		</form>

 </div>
</div>


                     <div class="tab-pane" id="debit-v">
											 <div style="border-bottom:1px solid #d7d7d7;" class="paddb10">
											<div class="">Pay Using Debit Card</div><div class="clear"></div>
											</div>
											 <div class="panel panel-primary">
   <div class="panel-heading">
       <h3 class="panel-title">Debit Card Payment</h3>
   </div>
   <form class="panel-body" action="your-form-handling-page" method="POST" id="checkout-form" onsubmit="return do_when_clicking_submit_button()">
     <div class="row">

       <div class="form-group col-md-12">
           <label for="cardholder-name">Cardholder Name</label>
           <input type="text" class="form-control" id="cardholder-name">
           <span class="helper-text"></span>
        </div>
        <!--Hosted Payment Field for CC number-->
        <div class="form-group col-xs-9">
           <label for="card-number">Card Number</label>
           <div class="input-group">
             <div class="form-control" id="card-number" data-bluesnap="ccn"></div>
             <div id="card-logo" class="input-group-addon"><img src="https://files.readme.io/d1a25b4-generic-card.png" height="20px"></div>
          </div>
          <span class="helper-text" id="card-help"></span>
        </div>
 			 <!--Hosted Payment Field for CC CVV-->
 			<div class="form-group col-xs-3">
          <label for="cvv">CVV</label>
          <div class="form-control" id="cvv" data-bluesnap="cvv"></div>
          <span class="helper-text" id="cvv-help"></span>
       </div>

     <!--Hosted Payment Field for CC EXP-->
        <div class="form-group col-xs-6">
           <label for="exp-date">Exp. (mm/yyyy)</label>
           <div class="form-control" id="exp-date" data-bluesnap="exp"></div>
           <span class="helper-text" id="exp-help"></span>
        </div>
 		  <div class="form-group col-xs-6">
           <label for="cardholder-name">Postal Code</label>
           <input type="text" class="form-control" id="cardholder-name">
           <span class="helper-text"></span>
        </div>
     </div>

 		<button class="btn btn-raised btn-info btn-lg col-md-4" type="submit" id="submit-button">Pay Now</button>

 		</form>

 </div>


										 </div>
                  



				             <div class="tab-pane" id="messages-v">
											 <div style="border-bottom:1px solid #d7d7d7;" class="paddb10">
										<div class="">Pay at your Doorstep (FREE)</div><div class="clear"></div>
									</div>
											 <form>
											 <div class="form-group">
											 	<input type="text" name="name" value="" placeholder="Name" id="input-email" class="form-control">
											 </div>
											 <div class="form-group">
											 <input type="text" name="phone" value="" placeholder="Phone Number" id="input-email" class="form-control">
											 </div>
											 <div class="form-group">
											 	<textarea  name="address" value="" placeholder="Address" id="input-password" class="form-control" rows="5" cols="10"></textarea>
											 </div>

											 <input type="submit" value="Submit" class="btn btn-primary btn-block">
										 </form>
				             </div>
				             <div class="tab-pane" id="settings-v">Settings Tab.</div>
				           </div>
				         </div>

				         <div class="clearfix"></div>




				</div>

			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="left">

					<div class="category">
						<h1 style="text-align:center;">Summary</h1>
						<ul class="list-unstyled">
							<li style="text-align:center;"class="clr2 hdtxt1 boldtxt">Membership Package</li>
							<li>
								<div id="addon_cur_membership_display" class="paddt5 paddb10">
													<div class="hdtxt boldtxt clr2">YOU SELECTED :</div>
													<div class="inlineblock paddt5"><span id="spn_package">Classic Advantage - 3 Months</span>  - <span style="display:none;" id="spn_org_pkg">Rs. 3300</span><span id="originalselectedpkgamt">Rs. 5200</span></div>
												</div>

							</li>
							<li>

								<div id="PriceDisplayPart" class="paddt15 paddb15 txt-center" style="background-color:#F7ECCC; font-size:23px;">
				Your Total :  Rs. <span class="boldtxt" id="spn_total_amt">3300</span>

							</div>

							</li>
						</ul>
					</div>


				</div>
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

<script type="text/javascript">
//Initiates the Hosted Payment Fields script with your Hosted Payment Fields token and defines event handlers and styles

var bsObj = {
	hostedPaymentFields: {
		ccn: "ccn", // name cannot contain spaces or special characters
		cvv: "cvv", // name cannot contain spaces or special characters
		exp: "exp"  // name cannot contain spaces or special characters
	},
	onFieldEventHandler: {
		onFocus: function(tagId) {
			// Handle focus
			if (tagId == "ccn") {
				$( "#card-number" ).addClass( "hosted-field-focus" );
			} else if (tagId == "exp") {
				$( "#exp-date" ).addClass( "hosted-field-focus" );
			} else if (tagId == "cvv") {
				$( "#cvv" ).addClass( "hosted-field-focus" );
			}
		},
		onBlur: function(tagId) {
			// Handle blur
			if (tagId == "ccn") {
				$( "#card-number" ).removeClass( "hosted-field-focus" );
			} else if (tagId == "exp") {
				$( "#exp-date" ).removeClass( "hosted-field-focus" );
			} else if (tagId == "cvv") {
				$( "#cvv" ).removeClass( "hosted-field-focus" );
			}
		},
		onError: function(tagId, errorCode) {
			// Handle a change in validation
			/* error codes:
				"001" --> "Please enter a valid credit card number";
				"002" --> "Please enter the CVV/CVC of your card";
				"003" --> "Please enter your credit card's expiration date";
				"004" --> "Session expired please refresh page to continue";
				"005" --> "Internal server error please try again later";
			*/

			if (tagId == "ccn" && errorCode == "001") {
				$( "#card-help" ).text('Please enter a valid credit card number');
			} else if (tagId == "exp" && errorCode == "003") {
				$( "#exp-help" ).text('Please enter the expiration date (mm/yyyy)');
			} else if (tagId == "cvv" && errorCode == "002" ) {
				$( "#cvv-help" ).text('Please enter the CVV/CVC of your card');
			}
		},
		onEmpty: function(tagId, errorCode) {
			// Handle a change in validation
			if (tagId == "ccn" && errorCode == "001") {
				$( "#card-help" ).text('');
				$('#card-logo img').attr("src", "https://files.readme.io/d1a25b4-generic-card.png");
			} else if (tagId == "exp" && errorCode == "003") {
				$( "#exp-help" ).text('');
			} else if (tagId == "cvv" && errorCode == "002" ) {
				$( "#cvv-help" ).text('');
			}
		},
		onType: function(tagId, cardType) {
			// get card type from cardType and display the img accordingly

			if (cardType == "AmericanExpress") { $('#card-logo img').attr("src", "https://files.readme.io/97e7acc-Amex.png");
			} else if (cardType == "CarteBleue") { $('#card-logo img').attr("src", "https://files.readme.io/5da1081-cb.png");
			} else if (cardType == "DinersClub") { $('#card-logo img').attr("src", "https://files.readme.io/8c73810-Diners_Club.png");
			} else if (cardType == "Discover") { $('#card-logo img').attr("src", "https://files.readme.io/caea86d-Discover.png");
			} else if (cardType == "JCB") { $('#card-logo img').attr("src", "https://files.readme.io/e076aed-JCB.png");
			} else if (cardType == "MaestroUK") { $('#card-logo img').attr("src", "https://files.readme.io/daeabbd-Maestro.png");
			} else if (cardType == "MasterCard") { $('#card-logo img').attr("src", "https://files.readme.io/5b7b3de-Mastercard.png");
			} else if (cardType == "Solo") { $('#card-logo img').attr("src", "https://sandbox.bluesnap.com/services/hosted-payment-fields/cc-types/solo.png");
			} else if (cardType == "Visa") { $('#card-logo img').attr("src", "https://files.readme.io/9018c4f-Visa.png");
			}
		},
		onValid: function(tagId) {
			// Handle a change in validation
			if (tagId == "ccn") {
				$( "#card-number" ).removeClass( "hosted-field-focus" );
				$( "#card-help" ).text('');
			} else if (tagId == "exp") {
				$( "#exp-date" ).removeClass( "hosted-field-focus" );
				$( "#exp-help" ).text('');
			} else if (tagId == "cvv") {
				$( "#cvv" ).removeClass( "hosted-field-focus" );
				$( "#cvv-help" ).text('');
			}
		}
	},
	style: {
		// Styling all Hosted Payment Field inputs
		"input": {
			"font-size": "14px",
			"font-family": "RobotoDraft,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif",
			"line-height": "1.42857143",
			"color": "#555"
		},

		/*"#ccn": {

		},*/

		// Styling Hosted Payment Field input state
		":focus": {
			"color": "#555"
		}
	},
	ccnPlaceHolder: "",
	cvvPlaceHolder: "",
	expPlaceHolder: ""
};
bluesnap.hostedPaymentFieldsCreation ("672d02b47ae64498c30ec3312ce57976bf171d86a1b75c805c212b715352639d_", bsObj);


// Submits the credit card, expiration date and CVV data to BlueSnap, where it will be associated with the Hosted Payment Fields token. On success, a card data object containing the card type and last four digits will be be passed to the function (cardData). You should add a function to do the final submit of the form after the card type and last four digits are received.



function do_when_clicking_submit_button(){
	bluesnap.submitCredentials( function(cardData){
		console.log('the card type is ' + cardData.ccType + ' and last 4 digits are ' + cardData.last4Digits + ' and exp is ' + cardData.exp + ' after that I can call final submit');
	});
	/* submit the form
	return true; */
	return false; // don't submit the form
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

<!-- Mirrored from wptheme.co.in/classified_html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Sep 2018 06:09:17 GMT -->
</html>

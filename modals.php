<form id="insert_form" method="post" name="insert_form">
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

			
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
	 
    </div>
	
	
	 <!--user Location modal-->
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
	<input type="text"  value=" <?php echo $resb['birth_place']; ?> " name="place_of_birth" class="form-control" ><br>
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
					
						<label>Description Of Partner</label> 
						<textarea class="form-control"></textarea> <input class="btn btn-success" id="insert" name="insert" type="submit" value="Update">
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--partners What We Are Looking For-->
	</form>
<form action="" method="post">
    <!--#add_data_modal basic info-->
    <div id="add_data_Modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Basic Details</h4>
          </div>
          <div class="modal-body">
		  
		  
            
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
            

              <input type="submit" name="submit" id="insert" value="update" class="btn btn-success" >

			
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
					
							
 <div class="col-md-12 form_input">
 <label>Location</label>
	<input type="text"  value=" <?php echo $resb['birth_place']; ?> " name="place_of_birth" class="form-control" ><br>
 </div>
 <input type="submit" name="submit" id="insert" value="Update" class="btn btn-success" />
						
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
									<option value="">Select Religion</option>
									<option value="Hindu">Hindu
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
						</div>
						<div class="col-md-12 form_input">
<label>Ancestral/Family origin:</label> 
<input class="form-control" value="<?php echo $resb['family_origin']; ?>" name="family_origin" type="text"><br>
</div>
						<input class="btn btn-success" id="insert" name="submit" type="submit" value="Update">
				
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
							<label>Age</label> <select class="selectpicker form-control" name="partner_age">
								<option value="Select Age">Select Age</option>
								<option value="18-22" <?php if ($resb["partner_age"]=='18-22'){echo "selected";}?>>
									18-22
								</option>
								<option value="23-27" <?php if($resb["partner_age"]=='23-27'){echo "selected";}?>>
									23-27
								</option>
								<option value="28-32" <?php if($resb["partner_age"]=='28-32'){echo "selected";}?>>
									28-32
								</option>
								<option value="33-37" <?php if($resb["partner_age"]=='33-37'){echo "selected";}?>>
									33-37
								</option>
								<option value="38-42" <?php if($resb["partner_age"]=='38-42'){echo "selected";}?>>
									38-42
								</option>
								<option value="43-47" <?php if($resb["partner_age"]=='43-47'){echo "selected";}?>>
									43-47
								</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Height</label> <select class="selectpicker form-control" name="partner_height">
							<option value="Select Height">Select Height</option>
							<option value="4ft 0in/121.92cm - 4ft 5in/134.62cm" <?php if($resb["partner_height"]=='4ft 0in/121.92cm - 4ft 5in/134.62cm'){echo "selected";}?>>4ft 0in/121.92cm - 4ft 5in/134.62cm</option>
							<option value="4ft 6in/137.16cm - 4ft 11in/149.86cm" <?php if($resb["partner_height"]=='4ft 6in/137.16cm - 4ft 11in/149.86cm'){echo "selected";}?>>4ft 6in/137.16cm - 4ft 11in/149.86cm</option>
							<option value="5ft 0in/152.40cm - 5ft 5in/165.10cm" <?php if($resb["partner_height"]=='5ft 0in/152.40cm - 5ft 5in/165.10cm'){echo "selected";}?>>5ft 0in/152.40cm - 5ft 5in/165.10cm</option>
							<option value="5ft 6in/167.64cm - 5ft 11in/180.34cm" <?php if($resb["partner_height"]=='5ft 6in/167.64cm - 5ft 11in/180.34cm'){echo "selected";}?>>5ft 6in/167.64cm - 5ft 11in/180.34cm</option>
							<option value="6ft 0in/182.88cm - 6ft 5in/195.58cm" <?php if($resb["partner_height"]=='6ft 0in/182.88cm - 6ft 5in/195.58cm'){echo "selected";}?>>6ft 0in/182.88cm - 6ft 5in/195.58cm</option>
							<option value="6ft 6in/198.12cm - 6ft 8in/203.20cm" <?php if($resb["partner_height"]=='6ft 6in/198.12cm - 6ft 8in/203.20cm'){echo "selected";}?>>6ft 6in/198.12cm - 6ft 8in/203.20cm</option>
							</select>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Martial Status</label><br> 
							<input type="radio"  id="radio33" name="Z" value="Married" <?php if($resb["partner_martial_status"]=='Married'){echo "checked";}?>><label for="radio33">Married</label>
							<input type="radio"  id="radio34" name="Z" value="Unmarried" <?php if($resb["partner_martial_status"]=='Unmarried'){echo "checked";}?>><label for="radio34">Unmarried</label>
							<input type="radio"  id="radio35" name="Z" value="Widow/Widower" <?php if($resb["partner_martial_status"]=='Widow/Widower'){echo "checked";}?>><label for="radio35">Widow/Widower</label>
							<input type="radio"  id="radio36" name="Z" value="Divorced" <?php if($resb["partner_martial_status"]=='Divorced'){echo "checked";}?>><label for="radio36">Divorced</label>
							<input type="radio"  id="radio37" name="Z" value="Awaiting Divorce" <?php if($resb["partner_martial_status"]=='Awaiting Divorce'){echo "checked";}?>><label for="radio37">Awaiting Divorce</label>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Physical Status</label><br> 
							<input type="radio" id="radio38" name="Y" value="Normal" <?php if($resb["partner_physical_status"]=='Normal'){echo "checked";}?>><label for="radio38">Normal</label>
							<input type="radio" id="radio39" name="Y" value="Physically Challenged"<?php if($resb["partner_physical_status"]=='Physically Challenged'){echo "checked";}?>><label for="radio39">Physically Challenged</label>
							<input type="radio" id="radio40" name="Y" value="Does not Matter" <?php if($resb["partner_physical_status"]=='Does not Matter'){echo "checked";}?>><label for="radio40">Does not Matter</label>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Eating Habits</label><br> 
							<input type="radio" id="radio41" name="X" value="Vegetarian" <?php if($resb["partner_eating_habits"]=='Vegetarian'){echo "checked";}?>><label for="radio41">Vegetarian</label>
							<input type="radio" id="radio42" name="X" value="Non-Vegetarian" <?php if($resb["partner_eating_habits"]=='Non-Vegetarian'){echo "checked";}?>><label for="radio42">Non-Vegetarian</label>
							<input type="radio" id="radio43" name="X" value="Eggetarian" <?php if($resb["partner_eating_habits"]=='Eggetarian'){echo "checked";}?>><label for="radio43">Eggetarian</label>
							<input type="radio" id="radio44" name="X" value="Does not Matter" <?php if($resb["partner_eating_habits"]=='Does not Matter'){echo "checked";}?>><label for="radio44">Does not Matter</label>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Drinking Habits</label><br> 
							<input type="radio" id="radio45" name="W" value="Does not Matter"  <?php if($resb["partner_drinking_habits"]=='Does not Matter'){echo "checked";}?>><label for="radio45">Does not Matter</label>
                            <input type="radio" id="radio46" name="W" value="Never Drinks" <?php if($resb["partner_drinking_habits"]=='Never Drinks'){echo "checked";}?>><label for="radio46">Never Drinks</label>
                            <input type="radio" id="radio47" name="W" value="Drinks Socially" <?php if($resb["partner_drinking_habits"]=='Drinks Socially'){echo "checked";}?>><label for="radio47">Drinks Socially</label>
                            <input type="radio" id="radio48" name="W" value="Drinks Regularly" <?php if($resb["partner_drinking_habits"]=='Drinks Regularly'){echo "checked";}?>><label for="radio48">Drinks Regularly</label>
						</div><br>
						<div class="col-md-6 form_input">
							<label>Enter Smoking Habits</label> 
							<input type="radio" id="radio49" name="V" value="Does not Matter"<?php if($resb["partner_smoking_habits"]=='Does not Matter'){echo "checked";}?>><label for="radio49">Does not Matter</label>
							<input type="radio" id="radio50" name="V" value="Never Smokes" <?php if($resb["partner_smoking_habits"]=='Never Smokes'){echo "checked";}?>><label for="radio50">Never Smokes</label>
							<input type="radio" id="radio51" name="V" value="Smokes Occasionally" <?php if($resb["partner_smoking_habits"]=='Smokes Occasionally'){echo "checked";}?>><label for="radio51">Smokes Occasionally</label>
							<input type="radio" id="radio52" name="V" value="Smokes Regularly" <?php if($resb["partner_smoking_habits"]=='Smokes Regularly'){echo "checked";}?>><label for="radio52">Smokes Regularly</label>
						</div><br>
					
						<div class="col-md-6 form_input">
							<label>Enter Mother Tongue</label> 
							<select class="selectpicker form-control" name="partner_mothertongue">
							<option value="Select Mother Tongue">Select Mother Tongue</option>
							<option value="English"<?php if($resb["partner_mother_tongue"]=='English'){echo "selected";}?>>English</option>
							<option value="Marathi" <?php if($resb["partner_mother_tongue"]=='Marathi'){echo "selected";}?>>Marathi</option>
							<option value="Hindi" <?php if($resb["partner_mother_tongue"]=='Hindi'){echo "selected";}?>>Hindi</option>
							<option value="Bengali" <?php if($resb["partner_mother_tongue"]=='Bengali'){echo "selected";}?>>Bengali</option>
							<option value="Punjabi" <?php if($resb["partner_mother_tongue"]=='Punjabi'){echo "selected";}?>>Punjabi</option>
							<option value="Kannada" <?php if($resb["partner_mother_tongue"]=='Kannada'){echo "selected";}?>>Kannada</option>
							<option value="Tulu" <?php if($resb["partner_mother_tongue"]=='Tulu'){echo "selected";}?>>Tulu</option>
							<option value="Tamil" <?php if($resb["partner_mother_tongue"]=='Tamil'){echo "selected";}?>>Tamil</option>
							<option value="Telugu" <?php if($resb["partner_mother_tongue"]=='Telugu'){echo "selected";}?>>Telugu</option>
						</select>
						</div><br>
						
						<div class="col-md-6 form_input">
							<label>Enter Caste</label> <select class="selectpicker form-control" name="partner_caste">
								<option value="Select Caste">
									Select Caste
								</option>
								<option value="Teli" <?php if($resb["partner_select_caste"]=='Teli'){echo "selected";}?>>
									Teli
								</option>
								<option value="obc" <?php if($resb["partner_select_caste"]=='obc'){echo "selected";}?>>
									obc
								</option>
								<option value="sc/st" <?php if($resb["partner_select_caste"]=='sc/st'){echo "selected";}?>>
									sc/st
								</option>
							</select>
						</div><br>
						
						<div class="col-md-6 form_input">
							<label>Enter Star</label> <select class="selectpicker form-control" name="partner_star">
								<option value="Select Star">
									Select Star
								</option>
								<option value="Ashwini" <?php if($resb["partner_star"]=='Ashwini'){echo "selected";}?>>
									Ashwini
								</option>
								<option value="Bharani" <?php if($resb["partner_star"]=='Bharani'){echo "selected";}?>>
									Bharani
								</option>
								<option value="Krittika" <?php if($resb["partner_star"]=='Krittika'){echo "selected";}?>>
									Krittika
								</option>
								<option value="Rohini" <?php if($resb["partner_star"]=='Rohini'){echo "selected";}?>>
									Rohini
								</option>
								<option value="Mrigashira" <?php if($resb["partner_star"]=='Mrigashira'){echo "selected";}?>>
									Mrigashira
								</option>
								<option value="Ardra" <?php if($resb["partner_star"]=='Ardra'){echo "selected";}?>>
									Ardra
								</option>
								<option value="Punarvasu" <?php if($resb["partner_star"]=='Punarvasu'){echo "selected";}?>>
									Punarvasu
								</option>
								<option value="Pushya" <?php if($resb["partner_star"]=='Pushya'){echo "selected";}?>>
									Pushya
								</option>
								<option value="Ashlesha" <?php if($resb["partner_star"]=='Ashlesha'){echo "selected";}?>>
									Ashlesha
								</option>
								<option value="Magha" <?php if($resb["partner_star"]=='Magha'){echo "selected";}?>>
									Magha
								</option>
								<option value="Purva Phalguni" <?php if($resb["partner_star"]=='Purva Phalguni'){echo "selected";}?>>
									Purva Phalguni
								</option>
								<option value="Uttara Phalguni" <?php if($resb["partner_star"]=='Uttara Phalguni'){echo "selected";}?>>
									Uttara Phalguni
								</option>
								<option value="Hasta" <?php if($resb["partner_star"]=='Hasta'){echo "selected";}?>>
									Hasta
								</option>
								<option value="Chitra" <?php if($resb["partner_star"]=='Chitra'){echo "selected";}?>>
									Chitra
								</option>
								<option value="Swati" <?php if($resb["partner_star"]=='Swati'){echo "selected";}?>>
									Swati
								</option>
								<option value="Vishakha" <?php if($resb["partner_star"]=='Vishakha'){echo "selected";}?>>
									Vishakha
								</option>
								<option value="Anuradha" <?php if($resb["partner_star"]=='Anuradha'){echo "selected";}?>>
									Anuradha
								</option>
								<option value="Jyeshtha" <?php if($resb["partner_star"]=='Jyeshtha'){echo "selected";}?>>
									Jyeshtha
								</option>
								<option value="Mula" <?php if($resb["partner_star"]=='Mula '){echo "selected";}?>>
									Mula
								</option>
								<option value="Purva Ashadha" <?php if($resb["partner_star"]=='Purva Ashadha'){echo "selected";}?>>
									Purva Ashadha
								</option>
								<option value="Uttara Ashadha" <?php if($resb["partner_star"]=='Uttara Ashadha'){echo "selected";}?>>
									Uttara Ashadha
								</option>
								<option value="Shravana" <?php if($resb["partner_star"]=='Shravana'){echo "selected";}?>>
									Shravana
								</option>
								<option value="Dhanishta" <?php if($resb["partner_star"]=='Dhanishta'){echo "selected";}?>>
									Dhanishta
								</option>
								<option value="ShataBhisha" <?php if($resb["partner_star"]=='ShataBhisha'){echo "selected";}?>>
									ShataBhisha
								</option>
								<option value="Purva Bhadrapada" <?php if($resb["partner_star"]=='Purva Bhadrapada'){echo "selected";}?>>
									Purva Bhadrapada
								</option>
								<option value="Uttara Bhadrapada" <?php if($resb["partner_star"]=='Uttara Bhadrapada'){echo "selected";}?>>
									Uttara Bhadrapada
								</option>
								<option value="Revati" <?php if($resb["partner_star"]=='Revati'){echo "selected";}?>>
									Revati
								</option>
							</select>
						</div><br>
						
						<div class="col-md-6 form_input">
							<label>Manglik</label>
							<div class="form-group">
							<input type="radio" id="radio53" name="U" value="Yes" <?php if($resb["partner_manglik"]=='Yes'){echo "checked";}?>><label for="radio53">Yes</label>
							<input type="radio" id="radio54" name="U" value="No" <?php if($resb["partner_manglik"]=='No'){echo "checked";}?>><label for="radio54">No</label>
							<input type="radio" id="radio55" name="U" value="Does not Matter" <?php if($resb["partner_manglik"]=='Does not Matter'){echo "checked";}?>><label for="radio55">Does not Matter</label>
							</div>
						</div><br>	
						<input type="submit" name="submit" id="insert" value="Update" class="btn btn-success" />

				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<!--partners Basic Details modal end-->
	
		
	<!--partners Professional Preferences-->
	<div class="modal fade" id="professional_preferences_Modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Professional Preferences</h4>
				</div>
				<div class="modal-body">
					
						<div class="col-md-12 form_input">
							<label> Education</label> <select class="selectpicker form-control" name="partner_education">
								<option value="Select Education">
									Select Education
								</option>
								<option value="Accounting (BS, BA)" <?php if($resb["partner_education"]=='Accounting (BS, BA)'){echo "selected";}?>>
									Accounting (BS, BA)
								</option>
								<option value="Aerospace Studies (Air Force ROTC)" <?php if($resb["partner_education"]=='Aerospace Studies (Air Force ROTC)'){echo "selected";}?>>
									Aerospace Studies (Air Force ROTC)
								</option>
								<option value="Agribusiness (BS)" <?php if($resb["partner_education"]=='Agribusiness (BS)'){echo "selected";}?> >
									Agribusiness (BS)
								</option>
								<option value="Agricultural Communication and Journalism (BS)" <?php if($resb["partner_education"]=='Agricultural Communication and Journalism (BS)'){echo "selected";}?>>
									Agricultural Communication and Journalism (BS)
								</option>
								<option value="Agricultural Education (BS)" <?php if($resb["partner_education"]=='Agricultural Education (BS)'){echo "selected";}?>>
									Agricultural Education (BS)
								</option>
								<option value="Agricultural Machinery Technology Certificate (AAS, Cert)" <?php if($resb["partner_education"]=='Agricultural Machinery Technology Certificate (AAS, Cert)'){echo "selected";}?>>
									Agricultural Machinery Technology Certificate (AAS, Cert)
								</option>
								<option value="Agricultural Science (AS)" <?php if($resb["partner_education"]=='Agricultural Science (AS)'){echo "selected";}?>>
									Agricultural Science (AS)
								</option>
							</select><br>
						</div>
						<div class="col-md-12 form_input">
							<label>Annual Income</label> <select class="selectpicker form-control" name="partner_annual-income">
								<option value="Select Income">
									Select Income
								</option>
								<option value="90000 - 150000" <?php if($resb["partner_annual_income"]='90000 - 150000'){echo "selected";}?>>
									90000 - 150000
								</option>
								<option value="160000 - 220000" <?php if($resb["partner_annual_income"]='160000 - 220000'){echo "selected";}?>>
									160000 - 220000
								</option>
								<option value="230000 - 290000" <?php if($resb["partner_annual_income"]='230000 - 290000'){echo "selected";}?>>
									230000 - 290000
								</option>
								<option value="300000 - 360000" <?php if($resb["partner_annual_income"]='300000 - 360000'){echo "selected";}?>>
									300000 - 360000
								</option>
								<option value="370000 - 430000" <?php if($resb["partner_annual_income"]='370000 - 430000'){echo "selected";}?>>
									370000 - 430000
								</option>
								<option value="440000 - 500000" <?php if($resb["partner_annual_income"]='440000 - 500000'){echo "selected";}?>>
									440000 - 500000
								</option>
							</select><br>
						</div>
						<div class="col-md-12 form_input">
							<label>Occupation</label> <select class="selectpicker form-control" name="partner_occupation">
								<option value="Select Occupation">
									Select Occupation
								</option>
								<option value="Chartered Administrators" <?php if($resb["partner_occupation"]=='Chartered Administrators'){echo "selected";}?>>
									Chartered Administrators
								</option>
								<option value="Audiologists" <?php if($resb["partner_occupation"]=='Audiologists'){echo "selected";}?>>
									Audiologists
								</option>
								<option value="Certified Human Resources and Industrial Relations Counsellors" <?php if($resb["partner_occupation"]=='Certified Human Resources and Industrial Relations Counsellors'){echo "selected";}?>>
									Certified Human Resources and Industrial Relations Counsellors
								</option>
								<option value="Guidance Counsellors" <?php if($resb["partner_occupation"]=='Guidance Counsellors'){echo "selected";}?>>
									Guidance Counsellors
								</option>
								<option value="Criminologists" <?php if($resb["partner_occupation"]=='Criminologists'){echo "selected";}?>>
									Criminologists
								</option>
								<option value="Dieticians" <?php if($resb["partner_occupation"]=='Dieticians'){echo "selected";}?>>
									Dieticians
								</option>
								<option value="Occupational Therapists" <?php if($resb["partner_occupation"]=='Occupational Therapists'){echo "selected";}?>>
									Occupational Therapists
								</option>
								<option value="Chartered Appraisers" <?php if($resb["partner_occupation"]=='Chartered Appraisers'){echo "selected";}?>>
									Chartered Appraisers
								</option>
								<option value="Dental Hygienists" <?php if($resb["partner_occupation"]=='Dental Hygienists'){echo "selected";}?>>
									Dental Hygienists
								</option>
								<option value="Nursing Assistants" <?php if($resb["partner_occupation"]=='Nursing Assistants'){echo "selected";}?>>
									Nursing Assistants
								</option>
							</select><br>
						</div><input class="btn btn-success" id="insert" name="submit" type="submit" value="Update">
					
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
								<option value="India" <?php if($resb["partner_country"]=='India'){echo "selected";}?>>
									India
								</option>
								<option value="Australia" <?php if($resb["partner_country"]=='Australia'){echo "selected";}?>>
									Australia
								</option>
								<option value="United States of America" <?php if($resb["partner_country"]=='unites States Of America'){echo "selected";}?>>
									United States of America
								</option>
								<option value="England" <?php if($resb["partner_country"]=='England'){echo "selected";}?>>
									England
								</option>
								<option value="New Zealand" <?php if($resb["partner_country"]=='New Zealand'){echo "selected";}?>>
									New Zealand
								</option>
								<option value="United Arab Emirates" <?php if($resb["partner_country"]=='United Arab Emirates'){echo "selected";}?>>
									United Arab Emirates
								</option>
								<option value="Russia" <?php if($resb["partner_country"]=='Russia'){echo "selected";}?>>
									Russia
								</option>
								<option value="Germany" <?php if($resb["partner_country"]=='Germany'){echo "selected";}?>>
									Germany
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Citizenship</label> <select class="selectpicker form-control" name="partner_citizenship">
								<option value="Select Citizenship">
									Select Citizenship
								</option>
								<option value="Republic of India" <?php if($resb["partner_citizenship"]=='Republic of India'){echo "selected";}?>>
									Republic of India
								</option>
								<option value="Citizen Of USA" <?php if($resb["partner_citizenship"]=='Citizen of USA'){echo "selected";}?>>
									Citizen Of USA
								</option>
								<option value="Australian Citizenship" <?php if($resb["partner_citizenship"]=='Australian Citizenship'){echo "selected";}?>>
									Australian Citizenship
								</option>
								<option value="British Citizen" <?php if($resb["partner_citizenship"]=='British Citizen'){echo "selected";}?>>
									British Citizen
								</option>
								<option value="New Zealand Citizenship" <?php if($resb["partner_citizenship"]=='New Zealand Citizenship'){echo "selected";}?>>
									New Zealand Citizenship
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Residing State</label> <input class="form-control" name="residing_state" type="text"><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Residing City</label> <input class="form-control" name="residing_city" type="text"><br>
						</div><input class="btn btn-success" id="insert" name="submit" type="submit" value="Update">
					
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
						<textarea class="form-control" value="<?php echo $resb["about_partner"]?>"></textarea> 
						<input class="btn btn-success" id="insert" name="submit" type="submit" value="Update">
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div><!--partners What We Are Looking For-->
	
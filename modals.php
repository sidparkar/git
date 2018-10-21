<form id="insert_form" method="post" name="insert_form" enctype="multipart/form-data">
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
							<label>Caste</label> <select class="selectpicker form-control bs-select-hidden" name="caste">
								
								<option value="Teli"  <?php if($resb["caste"]=='Teli') { echo "selected";} ?>>
									Teli
								</option>
								<option value="obc"  <?php if($resb["caste"]=='obc') { echo "selected";} ?>>
									obc
								</option>
								<option value="sc/st"  <?php if($resb["caste"]=='sc/st') { echo "selected";} ?>>
									sc/st
								</option>
							</select><br>
						</div>
							<div class="col-md-6 form_input">
							<label>Sub-Caste</label> 
							<select class="selectpicker form-control bs-select-hidden" name="sub-caste">
								
								<option value="Teli" <?php if($resb["sub_caste"]=='Teli') { echo "selected";} ?>>
									Teli
								</option>
								<option value="obc" <?php if($resb["sub_caste"]=='obc') { echo "selected";} ?>>
									obc
								</option>
								<option value="sc/st" <?php if($resb["sub_caste"]=='sc/st') { echo "selected";} ?>>
									sc/st
								</option>
							</select>
						</div>
						<div class="col-md-6 form_input">
							<label>Rashi</label> 
							<select class="selectpicker form-control" name="rashi">
							
								<option value="Mesha - Aries"  <?php if($resb["rashi"]=='Mesha - Aries') { echo "selected";} ?>>Mesha - Aries</option>
								<option value="Vrishabha - Taurus"  <?php if($resb["rashi"]=='Vrishabha - Taurus') { echo "selected";} ?>>Vrishabha - Taurus</option>
								<option value="Mithuna - Gemini" <?php if($resb["rashi"]=='Mithuna - Gemini') { echo "selected";} ?>>Mithuna - Gemini</option>
								<option value="Karka - Cancer" <?php if($resb["rashi"]=='Karka - Cancer') { echo "selected";} ?>>Karka - Cancer</option>
								<option value="Simha - Leo" <?php if($resb["rashi"]=='Simha - Leo') { echo "selected";} ?>>Simha - Leo</option>
								<option value="Kanya - Virgo" <?php if($resb["rashi"]=='Kanya - Virgo') { echo "selected";} ?>>Kanya - Virgo</option>
								<option value="Tula - Libra" <?php if($resb["rashi"]=='Tula - Libra') { echo "selected";} ?>>Tula - Libra </option>
								<option value="Vrishchika - Scorpio" <?php if($resb["rashi"]=='Vrishchika - Scorpio') { echo "selected";} ?>>Vrishchika - Scorpio</option>
								<option value="Dhanu - Sagittarius" <?php if($resb["rashi"]=='Dhanu - Sagittarius') { echo "selected";} ?>>Dhanu - Sagittarius</option>
								<option value="Makara - Capricorn" <?php if($resb["rashi"]=='Makara - Capricorn') { echo "selected";} ?>>Makara - Capricorn</option>
								<option value="Kumbha - Aquarius" <?php if($resb["rashi"]=='Kumbha - Aquarius') { echo "selected";} ?>>Kumbha - Aquarius</option>
								<option value="Meen - Pisces" <?php if($resb["rashi"]=='Meen - Pisces') { echo "selected";} ?>>Meen - Pisces</option>

							</select>
						</div>
							
						<div class="col-md-6 form_input">
							<label>Star</label> <select class="selectpicker form-control" name="star">
								
								<option value="Ashwini" <?php if($resb["star"]=='Ashwini') { echo "selected";} ?>> 
									Ashwini
								</option>
								<option value="Bharani" <?php if($resb["star"]=='Bharani') { echo "selected";} ?>>
									Bharani
								</option>
								<option value="Krittika" <?php if($resb["star"]=='Krittika') { echo "selected";} ?>>
									Krittika
								</option>
								<option value="Rohini" <?php if($resb["star"]=='Rohini') { echo "selected";} ?>>
									Rohini
								</option>
								<option value="Mrigashira" <?php if($resb["star"]=='Mrigashira') { echo "selected";} ?>>
									Mrigashira
								</option>
								<option value="Ardra" <?php if($resb["star"]=='Ardra') { echo "selected";} ?>>
									Ardra
								</option>
								<option value="Punarvasu" <?php if($resb["star"]=='Punarvasu') { echo "selected";} ?>>
									Punarvasu
								</option>
								<option value="Pushya" <?php if($resb["star"]=='Pushya') { echo "selected";} ?>>
									Pushya
								</option>
								<option value="Ashlesha" <?php if($resb["star"]=='Ashlesha') { echo "selected";} ?>>
									Ashlesha
								</option>
								<option value="Magha" <?php if($resb["star"]=='Magha') { echo "selected";} ?>>
									Magha
								</option>
								<option value="Purva Phalguni" <?php if($resb["star"]=='Purva Phalguni') { echo "selected";} ?>>
									Purva Phalguni
								</option>
								<option value="Uttara Phalguni" <?php if($resb["star"]=='Uttara Phalguni') { echo "selected";} ?>>
									Uttara Phalguni
								</option>
								<option value="Hasta" <?php if($resb["star"]=='Hasta') { echo "selected";} ?>>
									Hasta
								</option>
								<option value="Chitra" <?php if($resb["star"]=='Chitra') { echo "selected";} ?>>
									Chitra
								</option>
								<option value="Swati" <?php if($resb["star"]=='Swati') { echo "selected";} ?>>
									Swati
								</option>
								<option value="Vishakha" <?php if($resb["star"]=='Vishakha') { echo "selected";} ?>>
									Vishakha
								</option>
								<option value="Anuradha" <?php if($resb["star"]=='Anuradha') { echo "selected";} ?>>
									Anuradha
								</option> 
								<option value="Jyeshtha" <?php if($resb["star"]=='Jyeshtha') { echo "selected";} ?>>
									Jyeshtha
								</option>
								<option value="Mula" <?php if($resb["star"]=='Mula') { echo "selected";} ?>>
									Mula
								</option>
								<option value="Purva Ashadha" <?php if($resb["star"]=='Purva Ashadha') { echo "selected";} ?>>
									Purva Ashadha
								</option>
								<option value="Uttara Ashadha" <?php if($resb["star"]=='Uttara Ashadha') { echo "selected";} ?>>
									Uttara Ashadha
								</option>
								<option value="Shravana" <?php if($resb["star"]=='Shravana') { echo "selected";} ?>>
									Shravana
								</option>
								<option value="Dhanishta" <?php if($resb["star"]=='Dhanishta') { echo "selected";} ?>>
									Dhanishta
								</option>
								<option value="ShataBhisha" <?php if($resb["star"]=='ShataBhisha') { echo "selected";} ?>>
									ShataBhisha
								</option>
								<option value="Purva Bhadrapada" <?php if($resb["star"]=='Purva Bhadrapada') { echo "selected";} ?>>
									Purva Bhadrapada
								</option>
								<option value="Uttara Bhadrapada" <?php if($resb["star"]=='Uttara Bhadrapada') { echo "selected";} ?>>
									Uttara Bhadrapada
								</option>
								<option value="Revati" <?php if($resb["star"]=='Revati') { echo "selected";} ?>>
									Revati
								</option>
							</select>
						</div>
						
						<div class="col-md-6 form_input">
							<label>Place of Birth</label> 
							<input class="form-control"  value=" <?php echo $resb['user_age']; ?> " name = "place_of_birth" type="text">
						</div>
						<div class="col-md-6 form_input">
							<label>Manglik</label>  
							 <div class="form-group">
							 
                              <input type="radio" id="A30" name="J" value="Yes" <?php if($resb["manglik"]=='Yes') { echo "checked";} ?>><label for="A30">Yes</label>
                               <input type="radio" id="A31" name="J" value="No" <?php if($resb["manglik"]=='No') { echo "checked";} ?>><label for="A31">No</label>
                               <input type="radio" id="A32" name="J" value="Does not Matter" <?php if($resb["manglik"]=='Doesnt Matter') { echo "checked";} ?>><label for="A32">Does not Matter</label>
                                    </div>
						</div>
						   <input type="submit" name="submit" id="insert" value="update" class="btn btn-success" />
				
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

                    <h4 class="modal-title">Professional Details</h4>
             </div>
             <div class="modal-body">
                  
                        <div class="col-md-6 form_input">
<label>Education</label>
<select class="selectpicker form-control" name="education">
<option value="Accounting (BS, BA)" <?php if($resb["education"]=='Accounting (BS, BA)') { echo "selected";}?>>Accounting (BS, BA)</option>
 
<option value="Aerospace Studies (Air Force ROTC)"<?php if($resb["education"]=='Aerospace Studies (Air Force ROTC)') { echo "selected";}?>>Aerospace Studies (Air Force ROTC)</option>
 <option value="Agribusiness (BS)"<?php if($resb["education"]=='Agribusiness (BS)') { echo "selected";}?>>Agribusiness (BS)</option>
<option value="Agricultural Communication and Journalism (BS)"<?php if($resb["education"]=='Agricultural Communication and Journalism (BS)') { echo "selected";}?>>Agricultural Communication and Journalism (BS)</option>
<option value="Agricultural Education (BS)"<?php if($resb["education"]=='Agricultural Education (BS)') { echo "selected";}?>>Agricultural Education (BS)</option>
<option value="Agricultural Machinery Technology Certificate (AAS, Cert)"<?php if($resb["education"]=='Agricultural Machinery Technology Certificate (AAS, Cert)') { echo "selected";}?>>Agricultural Machinery Technology Certificate (AAS, Cert)</option>
<option value="Agricultural Science (AS)"<?php if($resb["education"]=='Agricultural Science (AS)') { echo "selected";}?>>Agricultural Science (AS)</option>
                    </select>
</div>
<div class="col-md-6 form_input">
<label>Occupation</label>

<select class="selectpicker form-control" name="occupation">
   
    <option value="Chartered Administrators" <?php if($resb["occupation"]=='Aerospace Studies (Air Force ROTC)') { echo "selected";}?>>Chartered Administrators</option>
   <option value="Audiologists" <?php if($resb["occupation"]=='Audiologists') { echo "selected";}?>>Audiologists</option>
  <option value="Certified Human Resources and Industrial Relations Counsellors" <?php if($resb["occupation"]=='Certified Human Resources and Industrial Relations Counsellors') { echo "selected";}?>>Certified Human Resources and Industrial Relations Counsellors</option>
<option value="Guidance Counsellors" <?php if($resb["occupation"]=='Guidance Counsellors') { echo "selected";}?>>Guidance Counsellors</option>
  <option value="Criminologists" <?php if($resb["occupation"]=='Criminologists') { echo "selected";}?>>Criminologists</option>
 <option value="Dieticians" <?php if($resb["occupation"]=='Dieticians') { echo "selected";}?>>Dieticians</option>
<option value="Occupational Therapists" <?php if($resb["occupation"]=='Occupational Therapists') { echo "selected";}?>>Occupational Therapists</option>
<option value="Chartered Appraisers" <?php if($resb["occupation"]=='Chartered Appraisers') { echo "selected";}?>>Chartered Appraisers</option>
<option value="Dental Hygienists" <?php if($resb["occupation"]=='Dental Hygienists') { echo "selected";}?>>Dental Hygienists</option>
<option value="Nursing Assistants" <?php if($resb["occupation"]=='Nursing Assistants') { echo "selected";}?>>Nursing Assistants</option>
                      </select>
</div>


<div class="col-md-12 form_input">
<label>Annual Income</label>
<input type="text" value="<?php echo $resb['income']; ?> " name="income" class="form-control" ><br>
</div>
<div class="col-md-12 form_input">
	<label>Employed in</label>  
 <div class="form-group">
							 
<input type="radio" id="A12" name="E" value="Government" <?php if($resb["employed_in"]=='Government') { echo "checked";} ?>><label for="A12">Government</label>&nbsp;&nbsp;
<input type="radio" id="A13" name="E" value="Private" <?php if($resb["employed_in"]=='Private') { echo "checked";} ?>><label for="A13">Private</label>&nbsp;&nbsp;
<input type="radio" id="A14" name="E" value="Business" <?php if($resb["employed_in"]=='Business') { echo "checked";} ?>><label for="A14">Business</label>&nbsp;&nbsp;
<input type="radio" id="A15" name="E" value="Defence" <?php if($resb["employed_in"]=='Defence') { echo "checked";} ?>><label for="A15">Defence</label>&nbsp;&nbsp;
<input type="radio" id="A16" name="E" value="Self-Employed" <?php if($resb["employed_in"]=='Self-Employed') { echo "checked";} ?>><label for="A16">Self-Employed</label>
<input type="radio" id="A17" name="E" value="Not Working" <?php if($resb["employed_in"]=='Not Working') { echo "checked";} ?>><label for="A17">Not Working</label>
                                    </div>
						</div>


             <input type="submit" name="submit" id="insert" value="Update" class="btn btn-success" />
                  
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
							<label>Mother Status</label> 
							<select class="selectpicker form-control" name="mother_status">
								
								<option value="Working" <?php if($resb["mother_status"]=='Working') { echo "selected";} ?>>
									Working
								</option>
								<option value="Retired" <?php if($resb["mother_status"]=='Retired') { echo "selected";} ?>>
									Retired
								</option>
								<option value="Expired" <?php if($resb["mother_status"]=='Expired') { echo "selected";} ?>>
									Expired
								</option>
								<option value="HomeMaker" <?php if($resb["mother_status"]=='HomeMaker') { echo "selected";} ?>>
									HomeMaker
								</option>
							</select>
						</div>
						<div class="col-md-6 form_input">
							<label>Father Status</label> 
							<select class="selectpicker form-control" name="father_status">
								
								<option value="Working" <?php if($resb["father_status"]=='Working') { echo "selected";} ?>>
									Working
								</option>
								<option value="Retired" <?php if($resb["father_status"]=='Retired') { echo "selected";} ?>>
									Retired
								</option>
								<option value="Expired" <?php if($resb["father_status"]=='Expired') { echo "selected";} ?>>
									Expired
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Brothers</label>
							<select class="selectpicker form-control" name="brother_status">
								
								<option value="0" <?php if($resb["brother_status"]=='0') { echo "selected";} ?>>
									0
								</option>
								<option value="1" <?php if($resb["brother_status"]=='1') { echo "selected";} ?>>
									1
								</option>
								<option value="2" <?php if($resb["brother_status"]=='2') { echo "selected";} ?>>
									2
								</option>
								<option value="3" <?php if($resb["brother_status"]=='3') { echo "selected";} ?>>
									3
								</option>
								<option value="4" <?php if($resb["brother_status"]=='4') { echo "selected";} ?>>
									4
								</option>
								<option value="5" <?php if($resb["brother_status"]=='5') { echo "selected";} ?>>
									5
								</option>
								<option value="6" <?php if($resb["brother_status"]=='6') { echo "selected";} ?>>
									6
								</option>
								<option value="7" <?php if($resb["brother_status"]=='7') { echo "selected";} ?>>
									7
								</option>
								<option value="8" <?php if($resb["brother_status"]=='8') { echo "selected";} ?>>
									8
								</option>
								<option value="9" <?php if($resb["brother_status"]=='9') { echo "selected";} ?>>
									9
								</option>
								<option value="10" <?php if($resb["brother_status"]=='10') { echo "selected";} ?>>
									10
								</option>
							</select><br>
						</div>
						<div class="col-md-6 form_input">
							<label>Sisters</label> 
							<select class="selectpicker form-control" name="sister_status">
								
								<option value="0" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									0
								</option>
								<option value="1" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									1
								</option>
								<option value="2" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									2
								</option>
								<option value="3" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									3
								</option>
								<option value="4" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									4
								</option>
								<option value="5" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									5
								</option>
								<option value="6" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									6
								</option>
								<option value="7" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									7
								</option>
								<option value="8" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									8
								</option>
								<option value="9" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									9
								</option>
								<option value="10" <?php if($resb["sister_status"]=='Widow') { echo "selected";} ?>>
									10
								</option>
							</select><br>
						</div>
						<div class="col-md-12 form_input">
							<label>Ancestral/Family origin:</label> 
							<input class="form-control" value="<?php echo $resb['family_origin']; ?>" name="family_origin" type="text"><br>
						</div>
						
						<div class="col-md-12 form_input">
							<label>Family Values</label> 
						<input type="radio" id="A26" name="I" value="Orthodox"<?php if($resb["family_values"]=='Orthodox') { echo "checked";} ?>><label for="A26">Orthodox</label>
								<input type="radio" id="A27" name="I" value="Traditional" <?php if($resb["family_values"]=='Traditional') { echo "checked";} ?>><label for="A27">Traditional</label>
								<input type="radio" id="A28" name="I" value="Moderate"  <?php if($resb["family_values"]=='Moderate') { echo "checked";} ?>><label for="A28">Moderate</label>
								<input type="radio" id="A29" name="I" value="liberal"  <?php if($resb["family_values"]=='liberal') { echo "checked";} ?>><label for="A29">liberal</label>
						</div>
						<br>
						<div class="col-md-12 form_input">
							<label>Family Status</label> 
							<input type="radio" id="A20" name="G" value="Middle Class" <?php if($resb["family_status"]=='Middle Class') { echo "checked";} ?>><label for="A20">Middle Class</label>
								<input type="radio" id="A21" name="G" value="Upper Middle Class" <?php if($resb["family_status"]=='Upper Middle Class') { echo "checked";} ?>><label for="A21">Upper Middle Class</label>
								<input type="radio" id="A22" name="G" value="Rich" <?php if($resb["family_status"]=='Rich') { echo "checked";} ?>><label for="A22">Rich</label>
								<input type="radio" id="A23" name="G" value="Affluent" <?php if($resb["family_status"]=='Affluent') { echo "checked";} ?>><label for="A23">Affluent</label>
						</div>
						<br>
						<div class="col-md-12 form_input">
							<label>Family Type</label> 
							<input type="radio" id="A24" name="H" value="Joint" <?php if($resb["family_type"]=='Joint') { echo "checked";} ?>><label for="A24">Joint</label>
								<input type="radio" id="A25" name="H" value="Nuclear" <?php if($resb["family_type"]=='Nuclear') { echo "checked";} ?>><label for="A25">Nuclear</label>
						</div>
						<br>
						<input class="btn btn-success" id="insert" name="submit" type="submit" value="Update">
				
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!--Family Details modal end-->
	
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
	
			</div>
		</div>
	</div><!--partners What We Are Looking For-->
	
	<!--image update-->
	<div class="modal fade" id="profile_pic_update">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update profile pic</h4>
				</div>
				<div class="modal-body">
					
						<div class="avatar-upload">
	
      
        <div class="avatar-preview">
            <div id="imagePreview"  style="background-image: url(images/<?php echo $resb['image'];?>);">
            </div>
			<div class="paddright ">
												<div class="col-md-2"><span>Image</span></div>
												<div class="col-md-10 input-padding">
													<input type="file" name="image" value="<?php echo $resb["image"]; ?>" required>

										</div>
												</div>
        </div>
    </div>
				<input class="btn btn-success" id="insert" name="submit" type="submit" value="Update">	
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--image update-->
	
	</form>
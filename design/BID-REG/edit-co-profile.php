<?php include 'modules/header1.php';?>
  <?php include 'modules/header2.php';?>
     <div class="full-wrap edit-profile-wrap">
						<div class="lg-container">
							<div class="row bhoechie-tab-container">
							   <!-- <div class="col-md-12 "> -->
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 bhoechie-tab-menu">
            	<div class="hero-avathar">
            		<img src="images/logo4.jpg">
                <div class="avathar-sec">
              		<div class="title">Edit Profile</div>
              		<div class="name">Emaar Properties</div>
                </div>
            		
            	</div>
             <div class="list-group">
             		
                <a href="#" class="list-group-item active">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                  <div class="block-head">User Info</div>
                </a>
                <a href="#" class="list-group-item">
                  <i class="fa fa-copyright" aria-hidden="true"></i>
                  <div class="block-head">Company Main Info</div>
                </a>
                <a href="#" class="list-group-item">
                 <i class="fa fa-money" aria-hidden="true"></i>
                  <div class="block-head">Investor Info</div>
                </a>
                
                <a href="#" class="list-group-item">
                 <i class="fa fa-sitemap" aria-hidden="true"></i>
                  <div class="block-head">Branches</div>
                </a>
                <a href="#" class="list-group-item">
                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <div class="block-head">Location</div>
                </a>
                <a href="#" class="list-group-item">
                 <i class="fa fa-product-hunt" aria-hidden="true"></i>
                  <div class="block-head">Edit Product</div>
                </a>
                
                <a href="#" class="list-group-item">
                 <i class="fa fa-cog" aria-hidden="true"></i>
                  <div class="block-head">Settings</div>
                </a>
                
              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <div class="head">User Information</div>
                    <div class="content-wrap reg-form">
                      <div class="profileimg-upload-wrap">
                        <figure class="edit-profile-img"><img src="images/logo4.jpg"></figure>
                        <div class="profileimg-upload">
                          <span class="upload-button"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</span>
                            <input type="file" class="fupload" name="imageUpload" id="imageUpload" accept="image/*">
                        </div>
                      </div>

                       <div class="lg-reg reg-form">
                       <!--  <h2 class="reg-sec-header user-info"><i class="fa fa-user-circle" aria-hidden="true"></i>User Info</h2> -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">First Name:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Last Name:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">DOB:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Designation:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Mobile Number:</label>
                                <div class="full-wrap mobile-code co-edit-mob">
                                  <input type="text" class="form-control field-control col-md-2" placeholder="">
                                  <input type="text" class="form-control field-control col-md-2" placeholder="">
                                  <input type="text" class="form-control field-control col-md-8">
                                </div>
                              </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="usr" class="field-label">E-mail:</label>
                              <input type="email" class="form-control field-control" id="usr">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="usr" class="field-label">Old Password:</label>
                              <input type="text" class="form-control field-control" id="usr">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="usr" class="field-label">New Password:</label>
                              <input type="text" class="form-control field-control" id="usr">
                            </div>
                        </div>
                      </div>

                     

                       <div class="row">
                          <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                            <button class="switch-acc">Delete</button>
                            <button class="switch-acc">Add</button>
                          </div>
                        </div> 
                
                     </div>  
          
                    	
                    <div class="row">
                      <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>
                </div>
            </div>
                <div class="bhoechie-tab-content">
                	<div class="head">Company Main Information</div>

                  <div class="content-wrap reg-form">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Trade Name:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="Emaar Properties" data-fv-field="first_name">
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                                <label for="city" class="field-label">Activity:</label>
                                                <select class="form-control js-example-basic-single" id="" name=""  title="">
                                                  <option value="">- Select -</option>
                                                  <option value="27">Bank</option>
                                                  <option value="26">Business center</option>
                                                  <option value="2">Business Development</option>
                                                  <option value="3" selected="">Construction</option>
                                                  <option value="13">consulting </option>
                                                  <option value="10">cosmatics</option>
                                                  <option value="24">Events</option>
                                                  <option value="4">Hospitality</option>
                                                  <option value="17">Import/Export</option>
                                                  <option value="1">Information Technology</option>
                                                  <option value="18">Installation</option>
                                                  <option value="20">Leasing</option>
                                                  <option value="15">manufacturing</option>
                                                  <option value="19">Marketing</option>
                                                  <option value="11">Media</option>
                                                  <option value="9">medical</option>
                                                  <option value="16">Organizing</option>
                                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                                <label for="city" class="field-label">Sub Activity:</label>
                                                <select class="form-control js-example-basic-single" id="" name=""  title="">
                                                  <option value="">- Select -</option>
                                                  <option value="27">Bank</option>
                                                  <option value="26">Business center</option>
                                                  <option value="2">Business Development</option>
                                                  <option value="3">Construction</option>
                                                  <option value="13">consulting </option>
                                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                                <label for="city" class="field-label">Company Type:</label>
                                                <select class="form-control js-example-basic-single" id="" name=""  title="">
                                                 <option value="" data-select2-id="10">Select Company Type</option>
                                                <option value="1" data-select2-id="610">Information Technology</option>
                                                <option value="2" data-select2-id="611">Business Development</option>
                                                <option value="3" data-select2-id="612">Construction</option>
                                                <option value="4" data-select2-id="613">Hospitality</option>
                                                <option value="5" data-select2-id="614">Real Estate</option>
                                                <option value="8" data-select2-id="615">Trading</option>
                                                <option value="9" data-select2-id="616">Medical</option>
                                                <option value="10" data-select2-id="617">Cosmatics</option>
                                                <option value="11" data-select2-id="618">Media</option>
                                                <option value="12" data-select2-id="619">Services</option>
                                                <option value="13" data-select2-id="620">Consulting </option>
                                                <option value="14" data-select2-id="621">Shipping</option>
                                                <option value="15" data-select2-id="622">Manufacturing</option>
                                                <option value="16" data-select2-id="623">Organizing</option>
                                                <option value="17" data-select2-id="624">Import/Export</option>
                                                <option value="18" data-select2-id="625">Installation</option>
                                                </select>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                                <div class="form-group">
                                                <label for="city" class="field-label">Legal Status:</label>
                                                <select class="form-control js-example-basic-single" id="" name=""  title="">
                                                  <option value="" data-select2-id="12">Select Legal Status</option>
                                                  <option value="1" data-select2-id="641">LLC</option>
                                                  <option value="2" data-select2-id="642">Service Agency</option>
                                                  <option value="3" data-select2-id="643">FZE</option>
                                                  <option value="4" data-select2-id="644">Group</option>
                                                  <option value="5" data-select2-id="645">FZ-LLC</option>
                                                  <option value="6" data-select2-id="646">Civil company</option>
                                                  <option value="7" data-select2-id="647">Partnership Company</option>
                                                  <option value="8" data-select2-id="648">Foreign Recognized Company</option>
                                                  <option value="9" data-select2-id="649">Private Joint Stock Company</option>
                                                  <option value="10" data-select2-id="650">Public Joint Stock Company</option>
                                                  <option value="11" data-select2-id="651">Holding Company</option>
                                                  <option value="12" data-select2-id="652">Sole Proprietorship</option>
                                                  <option value="13" data-select2-id="653">Professional Trade Licence</option>
                                                  <option value="14" data-select2-id="654">Professional Freelance Licence</option>
                                                  <option value="15" data-select2-id="655">LLP</option>
                                                </select>
                              </div>
                          </div>

                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">License No:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>

                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Registration No:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Upload Trade Licence</label>
                                <div class="custom-file upload-reg">
                                <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                               <!--  <span class="text-muted">*We will not share with this except the account holder
                                </span> -->
                                </div>

                              </div>
                            </div>
                          
                        </div>

                        <div class="row">
                           <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Issue Date:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Expiry Date:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>

                          <div class="col-md-3">
                           <div class="form-group">
                            <label for="country" class="field-label">Country:</label>
                            <select class="form-control js-example-basic-single" id="" name=""  title="Select Current Country">
                                  <option value="">Select Country</option>
                                            <option value="AF" >Afghanistan</option>
                                            <option value="AL" >Albania</option>
                                            <option value="AG" >Algeria</option>
                                            <option value="AS" >American Samoa</option>
                                            <option value="AD" >Andorra</option>
                                            <option value="AO" >Angola</option>
                                            <option value="AI" >Anguilla</option>
                                            <option value="AQ" >Antarctica</option>
                                            <option value="AB" >Antigua and Barbuda</option>
                                            <option value="AR" >Argentina</option>
                                            <option value="AM" >Armenia</option>
                                            <option value="AW" >Aruba</option>
                                        </select>
                        </div>
                       </div>

                       <div class="col-md-3">
                        <div class="form-group">
                          <label for="city" class="field-label">City:</label>
                          <select class="form-control js-example-basic-single" id="city1" name="city"  title="Select Current Location">
                            <option value="">Select City</option>
                                                  <option value="Dubai" >Dubai</option>
                                                  <option value="Sharjah" >Sharjah</option>
                                                  <option value="Abu Dhabi" >Abu Dhabi</option>
                                                  <option value="Ras Al Khaimah" >Ras Al Khaimah</option>
                                                  <option value="Fujairah" >Fujairah</option>
                                                  <option value="Ajman" >Ajman</option>
                                                  <option value="Umm Al Qawain" >Umm Al Qawain</option>
                                                  <option value="Al Ain" >Al Ain</option>
                                                </select>
                        </div>
                       </div>
                          
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                  <div class="form-group">
                    <label for="location" class="field-label">Area:</label>
                    <select class="form-control js-example-basic-single" name="" id="">
                      <optgroup label="United Arab Emirates">
                      <option value="">Select Area</option>
                                            <option value="Abu Baker Al Siddique Road" selected>Abu Baker Al Siddique Road</option>
                                            <option value="Abu Dhabi Gate City" selected>Abu Dhabi Gate City</option>
                                            <option value="Abu Hail" selected>Abu Hail</option>
                                            <option value="Abu shagara" selected>Abu Shagara</option>
                                            <option value="Ain Ajman" selected>Ain Ajman</option>
                                            <option value="Airport Road" selected>Airport Road</option>
                                            <option value="Ajman Corniche Road" selected>Ajman Corniche Road</option>
                                            <option value="Ajman Downtown" selected>Ajman Downtown</option>
                                            <option value="Ajman Industrial Area" selected>Ajman Industrial Area</option>
                                            <option value="Ajman Marina" selected>Ajman Marina</option>
                                            <option value="Ajman Meadows" selected>Ajman Meadows</option>
                                            <option value="Ajman Uptown" selected>Ajman Uptown</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">P.O.Box:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>

                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Address:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>

                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Latitude:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>

                        </div>

                        <div class="row">
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Longitude:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Mobile Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                     
                   
                           <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Landline Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Fax Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                          </div>
                          
                          <div class="row"> 
                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Email:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Website:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                          </div> 

                          <div class="row">
                              <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                          </div>  
                      </div> 
                </div>

          
    
                <div class="bhoechie-tab-content">
                  <div class="head">Investor Information</div> 
                      <div class="content-wrap reg-form">
                        <div class="row">
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Full Name:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">ID No:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>

                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Upload Your ID</label>
                                <div class="custom-file upload-reg">
                                <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                <!-- <span class="text-muted">*This will not be share with  anyone
                                </span> -->
                                </div>

                              </div>
                            </div>

                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Nationality:</label>
                                <select class="form-control js-example-basic-single" name="" id="">
                                <optgroup label="United Arab Emirates">
                                        <option value="1" data-select2-id="953">Afghanistan</option>
                                        <option value="2" data-select2-id="954">Albania</option>
                                        <option value="3" data-select2-id="955">Algeria</option>
                                        <option value="4" data-select2-id="956">American Samoa</option>
                                        <option value="5" data-select2-id="957">Andorra</option>
                                        <option value="6" data-select2-id="958">Angola</option>
                                        <option value="7" data-select2-id="959">Anguilla</option>
                                        <option value="8" data-select2-id="960">Antarctica</option>
                                        <option value="9" data-select2-id="961">Antigua and Barbuda</option>
                                        </optgroup>
                                    </select>
                              </div>
                          </div>
                         </div> 


                        <div class="row"> 
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Type:</label>
                                <select class="form-control js-example-basic-single" name="" id="">
                                <optgroup label="United Arab Emirates">
                                        <option value="" data-select2-id="20">Select Type</option>
                                        <option value="1" data-select2-id="1212">Local Sponsor</option>
                                        <option value="2" data-select2-id="1213">Owner</option>
                                        <option value="3" data-select2-id="1214">Partner</option>
                                        </optgroup>
                                    </select>
                              </div>
                          </div>
                           <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Mobile Number:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                        </div> 

                        <div class="row">
                          <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                            <button class="switch-acc">Delete</button>
                            <button class="switch-acc">Add</button>
                          </div>
                        </div>

                        <div class="row">
                              <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                        </div>

                      </div>   
                </div><!-- tab -->
             
              
                <div class="bhoechie-tab-content">
                  <div class="head">Branches</div>
                     <div class="content-wrap reg-form">
                        <div class="row">
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Branch Name:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Landline Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Mobile Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Fax Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Email:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="city" class="field-label">Location:</label>
                              <select class="form-control js-example-basic-single" id="city1" name="city"  title="Select Current Location">
                                <option value="">Select Location</option>
                                <option value="Dubai" >Dubai</option>
                                <option value="Sharjah" >Sharjah</option>
                                <option value="Abu Dhabi" >Abu Dhabi</option>
                                <option value="Ras Al Khaimah" >Ras Al Khaimah</option>
                                <option value="Fujairah" >Fujairah</option>
                                <option value="Ajman" >Ajman</option>
                                <option value="Umm Al Qawain" >Umm Al Qawain</option>
                                <option value="Al Ain" >Al Ain</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-3">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Branch Address:</label>
                            <textarea class="form-control" name="" id="" placeholder=""></textarea>
                          </div>
                        </div>
                          
                        </div>

                        <div class="row">
                          <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-1">
                            <button class="switch-acc">Delete</button>
                            <button class="switch-acc">Add</button>
                          </div>
                        </div>

                        <div class="row">
                              <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                        </div>
                   
                    </div>
                </div><!-- tab -->

                 <div class="bhoechie-tab-content">
                  <div class="head">Location</div>
                     <div class="content-wrap reg-form">
                      <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Drag Your Location:</label>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7216.350927162272!2d55.31808257349632!3d25.264682285459234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ccf30bc59df%3A0xe1f5b339a2799f6d!2sAl+Muraqqabat+-+Dubai!5e0!3m2!1sen!2sae!4v1530687547937" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                              </div>
                        </div>
                      </div>

                    <div class="row">
                          <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-1">
                            <button class="switch-acc">Delete</button>
                            <button class="switch-acc">Add</button>
                          </div>
                    </div>      
                      
                     <div class="row mt-3">
                              <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>  
                    
                </div>
                </div><!-- tab -->

              

                 <div class="bhoechie-tab-content">
                  <div class="head">Edit Your Product</div>
                     <div class="content-wrap reg-form">
                        <div class="row">
                                <div class="col-md-9 mx-auto mt-1">
                        <nav class="nav nav-pills nav-justified store-cat">
                          <a class="nav-link" href="#">
                            <span class="cat-img new-ico"></span>
                            <title class="active">New</title>
                          </a>
                          <a class="nav-link" href="#">
                            <span class="cat-img whole-ico"></span>
                            <title class="whole-title">Wholesale</title>
                          </a>
                          <a class="nav-link" href="#">
                            <span class="cat-img used-ico"></span>
                            <title>Used</title>
                          </a>
                          <a class="nav-link" href="#">
                            <span class="cat-img service-ico"></span>
                            <title>Services</title>
                          </a>
                          <a class="nav-link" href="#">
                            <span class="cat-img properties-ico"></span>
                            <title>Proprties</title>
                          </a>
                          <a class="nav-link" href="#">
                            <span class="cat-img auto-ico"></span>
                            <title>Auto &amp; Vehicles</title>
                          </a>
            
                        </nav>
                        
                      </div>
                      
                    </div>


                    <div class="row">
                       <div class="col-md-12 col-sm-12 edit-product-show">
                        <ul class="store-box-list-item-show">
                          <div class="row item-show-row">
                          <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/1.webp">
                              </figure>
                            </a>
                              <a href="" class="title">For Iphone Screen Protector, Mobile Tempered Glass</a>
                              <div class="price"><i>100</i> AED</div>
                              <div class="price old"><i>200</i> AED</div>
                              <div class="co-logo"><a href=""><img src="images/logo4.jpg"></a></div>
                              <div class="ribbon  ribbon--red number-style">10&nbsp;%</div>
                            </div>
                            <!-- <div class="divider-inlist"></div> -->
                             <div class="full-wrap bottom-btn">
                                <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                              </div>
                          </li>
                          <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/2.webp">
                              </figure>
                            </a>
                              <a href="" class="title">Mobile phone for iPhone Wireless Charger</a>
                              <div class="price"><i>500</i> AED</div>
                              <div class="price old"><i>700</i> AED</div>
                              <div class="co-logo"><a href=""><img src="images/logo1.png"></a></div>
                            </div>
                            <div class="full-wrap bottom-btn">
                                <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                              </div>
                          </li>
                          <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/3.webp">
                              </figure>
                            </a>
                              <a href="" class="title">wireless charging pad Qi magnetic wireless charger</a>
                              <div class="price"><i>200</i> AED</div>
                            </div>
                            <div class="full-wrap bottom-btn">
                                <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                              </div>
                          </li>
                          <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/4.webp">
                              </figure>
                            </a>
                              <a href="" class="title">wireless charging pad Qi magnetic wireless charger</a>
                              <div class="price"><i>200</i> AED</div>
                            </div>
                          </li>
                          <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/4.webp">
                              </figure>
                            </a>
                              <a href="" class="title">wireless charging pad Qi magnetic wireless charger</a>
                              <div class="price"><i>200</i> AED</div>
                            </div>
                          </li>

                           <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/6.webp">
                              </figure>
                            </a>
                              <a href=""><div class="title">amazon qi wireless charger for iphone</div></a>
                              <div class="price"><i>700</i> AED</div>
                            </div>
                          </li>

                          <li class="col-md-3">
                            <div class="item-box">
                              <a href="">
                              <figure>
                                <img src="images/store/1.webp">
                              </figure>
                            </a>
                              <a href=""><div class="title">wireless charging pad Qi magnetic wireless charger</div></a>
                              <div class="price"><i>200</i> AED</div>
                            </div>
                          </li>

                          
                        </div>
                        </ul>
      </div>
                      
                    </div>






                      <div class="row">
                        
                      
                        
                  
                      </div>
                    
                    
                    </div>
                </div><!-- tab -->

              

          <div class="bhoechie-tab-content">
                  <div class="head">Settings</div>
                     <div class="content-wrap reg-form">
                      <div class="row">
                        <ul class="col-md-12 setting-desc">
                          <li>Who can see my comment
                            <div class="setting-privacy">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="All" type="checkbox" checked="">
                                <label for="All">All</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers" type="checkbox">
                                <label for="Followers">My Followers</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Me" type="checkbox">
                                <label for="Me">Only Me</label>
                              </div>
                            </div>
                          </li>
                          <li>Who can comment my post
                            <div class="setting-privacy">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="All1" type="checkbox" checked="">
                                <label for="All1">All</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers1" type="checkbox">
                                <label for="Followers1">My Followers</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Me1" type="checkbox">
                                <label for="Me1">Only Me</label>
                              </div>
                            </div>
                          </li>
                          <li>Who can see my post
                            <div class="setting-privacy">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="All2" type="checkbox" checked="">
                                <label for="All2">All</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers2" type="checkbox">
                                <label for="Followers2">My Followers</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Me2" type="checkbox">
                                <label for="Me2">Only Me</label>
                              </div>
                            </div>
                          </li>
                          <li>Block notification
                             <div class="switch-toog">
                              <div class="TriSea-technologies-Switch pull-right">
                                <input id="TriSeaPrimary" name="TriSea1" type="checkbox"/>
                                <label for="TriSeaPrimary" class="label-primary"></label>
                              </div>
                            </div>
                          </li>

                          <li>Reset Password
                             <button type="button" class="btn btn-primary del-account" id="reset-pass">Reset Password</button>
                             <div class="reset-password-sec">
                             <div class="row mt-4">
                              <div class="col-md-4">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Old Password:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label for="first_name" class="field-label">New Password:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label for="first_name" class="field-label">Confirm New Password:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                              </div>

                              
                               
                             </div>
                             <div class="reset-password-btns">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel
                                </button>
                                <button type="button" class="btn change" data-dismiss="modal">Change Password
                                </button>
                              </div>
                           </div>   
                          </li>
                          <li>Who can chat with me
                            <div class="setting-privacy">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="eve" type="checkbox" checked="">
                                <label for="eve">Every One</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers4" type="checkbox">
                                <label for="Followers4">Following</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers3" type="checkbox">
                                <label for="Followers3">Followers</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers5" type="checkbox">
                                <label for="Followers5">Both</label>
                              </div>
                            </div>
                          </li>
                          <li>Who can see my  followers
                            <div class="setting-privacy">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="evee" type="checkbox" checked="">
                                <label for="evee">Every One</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers44" type="checkbox">
                                <label for="Followers44">Followers</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="Followers55" type="checkbox">
                                <label for="Followers55">Both</label>
                              </div>
                            </div>
                          </li>
                          <li>Private Account
                             <div class="switch-toog">
                              <div class="TriSea-technologies-Switch pull-right">
                                <input id="p-a" name="TriSea1" type="checkbox"/>
                                <label for="p-a" class="label-primary"></label>
                              </div>
                            </div>
                          </li>
                          <li>Hide Contact
                             <div class="switch-toog">
                              <div class="TriSea-technologies-Switch pull-right">
                                <input id="p-a1" name="TriSea1" type="checkbox"/>
                                <label for="p-a1" class="label-primary"></label>
                              </div>
                            </div>
                          </li>
                          <li>Delete account
                            <button type="button" class="btn btn-primary del-account" data-toggle="modal" data-target="#exampleModal">Delete Account</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered delete-acc-modal" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete your Account</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="modal-footer delete-acc">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Yes</button>
                                  </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                    </div>
                    <div class="row mt-3">
                      <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>  
                  </div>
                </div><!-- tab -->
            </div><!-- col-lg -->
        </div>
  </div>
				 	

		</div><!-- lg-container -->		
<!-- 	</div> -->
<script type="text/javascript">
</script>
 <?php include 'modules/footer1.php';?>
  </div>
<?php include 'modules/footer2.php';?>
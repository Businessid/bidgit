<?php include 'modules/header1.php';?>
  <?php include 'modules/header2.php';?>
     <div class="full-wrap edit-profile-wrap">
						<div class="lg-container">
							<div class="row bhoechie-tab-container">
							   <!-- <div class="col-md-12 "> -->
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 bhoechie-tab-menu">
            	<div class="hero-avathar">
            		<img src="images/decap.jpg">
                <div class="avathar-sec">
              		<div class="title">Edit Profile</div>
              		<div class="name">John Doe</div>
                </div>
            		
            	</div>
             <div class="list-group">
             		
                <a href="#" class="list-group-item active">
                  <i class="fa fa-info" aria-hidden="true"></i>
                  <div class="block-head">General Details</div>
                </a>
                <a href="#" class="list-group-item">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <div class="block-head">Address</div>
                </a>
                <a href="#" class="list-group-item">
                 <i class="fa fa-address-book-o" aria-hidden="true"></i>
                  <div class="block-head">CV Details</div>
                </a>
                
                <a href="#" class="list-group-item">
                 <i class="fa fa-share-alt" aria-hidden="true"></i>
                  <div class="block-head">Social Networks</div>
                </a>
                <a href="#" class="list-group-item">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  <div class="block-head">More Information</div>
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
                    <div class="head">General Details</div>
                    <div class="content-wrap reg-form">
                      <div class="profileimg-upload-wrap">
                        <figure class="edit-profile-img"><img src="images/decap.jpg"></figure>
                        <div class="profileimg-upload">
                          <span class="upload-button"><i class="fa fa-user-o" aria-hidden="true"></i> Upload Image</span>
                            <input type="file" class="fupload" name="imageUpload" id="imageUpload" accept="image/*">
                        </div>
                      </div>  
          
                    	<div class="row">
			                <div class="col-md-4 mx-auto">
			                  	<div class="form-group">
			                    <label for="first_name" class="field-label">First Name:</label>
			                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="John" placeholder="First Name" data-fv-field="first_name">
			                	</div>
			            	</div>
			            	<div class="col-md-4 mx-auto">
			                  	<div class="form-group">
			                    <label for="first_name" class="field-label">Last Name:</label>
			                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="Doe" placeholder="First Name" data-fv-field="first_name">
			                	</div>
			            	</div>
			            	<div class="col-md-4 mx-auto">
				                  <div class="form-group">
				                    <label for="gender" class="field-label">Gender : </label>
                            <div class="custom-radio-wrap">
				                    <div class="custom-control custom-radio mr-3">
                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline1">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">Female</label>
                            </div>
                          </div>
				                  </div>
                			</div>
			        	</div>

			        	<div class="row">
			        		<div class="col-md-4 mx-auto">
                 				 <div class="form-group">
                    			 <label for="dob" class="field-label">Date Of Birth : </label>
                    			 <input class="form-control field-control number-style dob-date" type="text" id="dob" name="dob" placeholder="Date Of Birth" value="2017-08-06">
                    			</div>
                          <div class="privacy-check">
                      			<div class="checkbox-edit checkbox-primary">
  			                        <input id="checkbox2" type="checkbox" checked>
  			                        <label for="checkbox2">Show</label>
                      			</div>
                      			<div class="checkbox-edit checkbox-primary">
  			                        <input id="checkbox3" type="checkbox">
  			                        <label for="checkbox3">Hide</label>
                      			</div>
                        </div>
			        		</div>

			        		<div class="col-md-4 mx-auto">
			                  <div class="form-group">
			                    <label for="gender" class="field-label">Marital Status : </label>
			                    <div class="form-group switch-btn">
			                      <div class="custom-radio-wrap">
                            <div class="custom-control custom-radio mr-3">
                              <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline3">Married</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline4">Single</label>
                            </div>
                          </div>
                            <div class="privacy-check mt-2">
  			                        <div class="checkbox-edit checkbox-primary">
  			                        <input id="gender1" type="checkbox" checked>
  			                        <label for="gender1">Show</label>
                      			   </div>
                      			   <div class="checkbox-edit checkbox-primary">
  			                        <input id="gender2" type="checkbox">
  			                        <label for="gender2">Hide</label>
                      			   </div>
                          </div>
			                    </div>
			                  </div>
                			</div>

                			<div class="col-md-4">
						                  <div class="form-group">
						                    <label for="nationality" class="field-label"> Nationality: </label>
						                    <select class="form-control js-example-basic-single" id="nationality" name="nationality"  title="Select Nationality">
						                      <option value="">Select Nationality</option>
                                            <option value="United Arab Emirates" >United Arab Emirates</option>
                                            <option value="Andorra " >Andorra </option>
                                            <option value="Afghanistan" >Afghanistan</option>
                                            <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                                            <option value="Anguilla" >Anguilla</option>
                                            <option value="Albania" >Albania</option>
                                        </select>
                                    </div>
                            </div>
                             
                    </div>
                    <div class="row">
                      <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save Changes</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>
                </div>
            </div>
                <div class="bhoechie-tab-content">
                	<div class="head">Address</div>
                     
                   <div class="content-wrap reg-form">
                    <!-- <div class="switch-address-tab-wrap text-center">
                    <div class="list-group switch-address-tab" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Personal Address</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Delivery Address</a>
                    </div>
                  </div> -->

                  <ul class="nav nav-tabs switch-address-tab-wrap" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pesrsonal-address" data-toggle="tab" href="#pesrsonal-address" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-address-card-o" aria-hidden="true"></i>Personal Address</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="del" data-toggle="tab" href="#del" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-truck" aria-hidden="true"></i>Delivery Address</a>
                    </li>
                 </ul>
                 <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pesrsonal-address" role="tabpanel" aria-labelledby="pesrsonal-address">
                    <div class="row">
                      <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn" id="add-address"><i class="fa fa-plus">&nbsp;</i>Add New</button>
                       </div>
                     </div>
                    <div class="full-wrap">
                    	<div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                          <label for="city" class="field-label">Location:</label>
                          <select class="form-control js-example-basic-single" id="city" name="city"  title="Select Current Location">
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

			                <div class="col-md-4">
			                  	 <div class="form-group">
				                    <label for="country" class="field-label">City:</label>
				                    <select class="form-control js-example-basic-single" id="country" name="country"  title="Select Current Country">
                      						<option value="54903" selected="selected">City centre</option><option value="181636102">Al Barsha Dubai</option><option value="197543902">Al Garhoud</option><option value="196423102">Al Mamzar Park</option><option value="197566302">Al Muraqqabat</option><option value="197568902">Al Rigga</option><option value="196666102">Bur Dubai</option><option value="13358902">Bur Dubai Cloth Souq</option><option value="110260602">Burj Khalifa</option><option value="306923802">Business Bay</option><option value="196665502">Deira</option><option value="13349702">Deira City Center Mall</option><option value="306922002">Downtown Dubai</option><option value="13417202">Dubai Autodrome</option><option value="13360802">Dubai Creek</option><option value="241208802">Dubai Festival City</option>
                                        </select>

			                	</div>
			            	</div>

			            	
               				 <div class="col-md-4">
                  <div class="form-group">
                    <label for="location" class="field-label">Area:</label>
                    <select class="form-control js-example-basic-single" name="area" id="area">
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
			        	</div>
                <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="first_name" class="field-label">Street:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="Hamariya Street" placeholder="First Name" data-fv-field="">
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Building:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="Nasco" placeholder="" data-fv-field="">
                  </div>
                </div>
                <div class="col-md-4 mx-auto">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Street Address:</label>
                            <textarea class="form-control" name="job_summary" id="job_summary" placeholder=""></textarea>
                          </div>
                        </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Land Mark:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="Clock Tower" placeholder="" data-fv-field="">
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Villa or Flat Number:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="" placeholder="" data-fv-field="">
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Mobile Number:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="" placeholder="" data-fv-field="">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Landline Number:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="" placeholder="" data-fv-field="">
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Other Mobile Number:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="" placeholder="" data-fv-field="">
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="checkbox-edit-wrap address-sec">
                          <div class="checkbox-edit checkbox-primary">
                              <input id="checkbox22" type="checkbox" checked>
                              <label for="checkbox22">Show</label>
                          </div>
                          <div class="checkbox-edit checkbox-primary">
                              <input id="checkbox33" type="checkbox">
                              <label for="checkbox33">Hide</label>
                          </div>
                  </div>
                </div>
              </div>
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="first_name" class="field-label">Location Map:</label>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7216.350927162272!2d55.31808257349632!3d25.264682285459234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ccf30bc59df%3A0xe1f5b339a2799f6d!2sAl+Muraqqabat+-+Dubai!5e0!3m2!1sen!2sae!4v1530687547937" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
               </div>
          </div><!-- full-wrap -->

                <div class="full-wrap newadded-sec" id="addnew-address">
                      <div class="row">
                      <div class="col-md-4">
                           <div class="form-group">
                            <label for="country" class="field-label">Country:</label>
                            <select class="form-control js-example-basic-single" id="country1" name="country"  title="Select Current Country">
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

                    <div class="col-md-4">
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

                       <div class="col-md-4">
                  <div class="form-group">
                    <label for="location" class="field-label">Area:</label>
                    <select class="form-control js-example-basic-single" name="area" id="area1">
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
                </div>
                <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="first_name" class="field-label">Street:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="Hamariya Street" placeholder="First Name" data-fv-field="">
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                      <label for="first_name" class="field-label">Building:</label>
                      <input type="text" class="form-control field-control" name="" id="" value="Nasco" placeholder="" data-fv-field="">
                  </div>
                </div>
                 <div class="col-md-4">
                          <div class="form-group">
                            <label for="institution" class="field-label">E-mail:</label>
                            <input class="form-control field-control" type="email" id="institution" name="institution[]" placeholder="" value="">
                          </div>
                </div>
               <!--  <div class="col-md-4">
                  <div class="checkbox-edit-wrap address-sec">
                          <div class="checkbox-edit checkbox-primary">
                              <input id="add-address1" type="checkbox" checked>
                              <label for="add-address1">Show</label>
                          </div>
                          <div class="checkbox-edit checkbox-primary">
                              <input id="add-address2" type="checkbox">
                              <label for="add-address2">Hide</label>
                          </div>
                  </div>
                </div> -->
              </div>
             <div class="row">
                <div class="col-md-12">
                      <button type="button" class="btn btn-danger pull-right removequa" id="remove-address"><i class="fa fa-times">&nbsp;</i>Remove</button>
                </div>
              </div>
            </div><!-- full-wrap -->

               <div class="row">
                      <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn editprofile-btn">Save Changes</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
              </div>
            </div><!-- tab-pane   -->

            <div class="tab-pane fade" id="del" role="tabpanel" aria-labelledby="del">...</div>
            </div><!-- tab-content -->

                </div>
            </div>

          
    
                <div class="bhoechie-tab-content">
                  <div class="head">CV Details 
                  </div>
                  <button type="button" class="btn editprofile-btn" id="edit-cv-btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit Your CV</button>
                    <div class="content-wrap reg-form" id="hero-cv">

                      <div class="left-col-block blocks">
                        <header class="header theiaStickySidebar">
                            <div class="profile-img">
                                <figure><img src="images/img-profile.jpg" class="img-responsive" alt=""/></figure>
                                <div class="content-right">
                                <h1 style="color: #ff6f00;">Leon Weif
                                  <span class="lead">Marketing Consultant</span>
                                </h1>
                                <div class="about-text">
                                    <p>
                                        Credibly embrace visionary internal or "organic" sources and business benefits. Collaboratively
                                        integrate efficient portals rather than customized customer service. Assertively deliver
                                        frictionless services via leveraged interfaces. Conveniently evisculate accurate sources and
                                        process-centric expertise.
                                    </p>

                                    <p>Energistically fabricate customized imperatives through cooperative catalysts for change.</p>


                                    <p><img src="images/Signature.png" alt="" class="img-responsive"/></p>
                                </div>
                              </div>
                              <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </header>
                        <!-- .header-->
                      </div>
                      <!-- .left-col-block -->


                    <div class="right-col-block blocks">
                    <div class="theiaStickySidebar">
                       <section class="section-contact section-wrapper gray-bg pt-3 pb-3">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-title">
                              <h2>About Me</h2>
                          </div>
                      </div>
                  </div>
                  <!--.row-->
                  <div class="row">
                      <div class="col-md-12 about-me-sec">
                          <address class="about-me">
                              <strong>Gender:</strong>
                               <div class="field">Male</div>

                          </address>
                          <address class="about-me">
                              <strong>Nationality:</strong>
                              <div class="field">Indian</div>
                          </address>

                         <address class="about-me">
                              <strong>Current Location:</strong>
                              <div class="field">UAE</div>
                          </address>


                          <address class="about-me">
                              <strong>DOB:</strong>
                              <div class="field">25-12-1990</div>
                          </address>
                          <address class="about-me">
                              <strong>Marital Status:</strong>
                              <div class="field">Single</div>
                          </address>
                          <address class="about-me">
                              <strong>E-mail:</strong>
                              <div class="field">leonw@gmail.com</div>
                          </address>
                      </div>
                  </div>
                  <!--.row-->
              </div>
              <!--.container-fluid-->
          </section>
          <!--.section-about-->

          
                      <section class="section-wrapper section-education pt-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title"><h2>Education</h2></div>
                                </div>
                            </div>
                            <!--.row-->
                            <div class="row">
                               
                                    <div class="col-md-4 content-item">
                                        <h3>MA Product Design</h3>
                                        <h4>University of California</h4>
                                        <p>United Kingdom, London</p>
                                        <small>2010 - 2012</small>

                                    </div>
                                    <!-- .experience-item -->
                                    <div class="col-md-4 content-item">
                                        <h3>Business marketing course</h3>
                                        <h4>Royal Academy of Business</h4>
                                        <p>United Kingdom, London</p>
                                        <small>2007 - 2010</small>
                                    </div>
                                    <!-- .experience-item -->
                                    <div class="col-md-4 content-item">
                                        <h3>BA (Hons) Design</h3>
                                        <h4>University of Michigan</h4>
                                        <p>United Kingdom, London</p>
                                        <small>2002 - 2006</small>
                                    </div>
                                    <!-- .experience-item -->
                          
                            </div>
                            <!--.row-->
                        </div>
                        <!-- .container-fluid -->

                    </section>
                    <!-- .section-education -->

            <section class="section-wrapper skills-wrapper pt-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Skills</h2>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress-wrapper pb-5">

                                <div class="progress-item">
                                    <span class="progress-title">Marketing</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 62%"><span class="progress-percent"> 62%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->


                                <div class="progress-item">
                                    <span class="progress-title">Market Research</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 90%"><span class="progress-percent"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->


                                <div class="progress-item">
                                    <span class="progress-title">Organisational Skills</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 75%;"><span class="progress-percent"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">Communtcation Skills</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 55%;"><span class="progress-percent"> 55%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->
                                <div class="progress-item">
                                    <span class="progress-title">Project Management</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 80%;"><span class="progress-percent"> 80%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                    </div>
                    <!--.row -->
                </div>
                <!-- .container-fluid -->
            </section>
            <!-- .skills-wrapper -->

            <section class="section-contact section-wrapper gray-bg pt-3 pb-3">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-title">
                              <h2>Languages</h2>
                          </div>
                      </div>
                  </div>
                  <!--.row-->
                  <div class="row">
                      <div class="col-md-3 lang-known">
                        <div class="lang">English:</div>
                        <span>Write,</span>
                        <span>Speak</span>
                      </div>
                      <div class="col-md-3 lang-known">
                        <div class="lang">Arabic:</div>
                        <span>Write,</span>
                        <span>Speak</span>
                      </div>
                      <div class="col-md-3 lang-known">
                        <div class="lang">Hindi:</div>
                        <span>Write,</span>
                        <span>Speak</span>
                      </div>
                  </div>
                  <!--.row-->
              </div>
              <!--.container-fluid-->
          </section>
          <!--.section-languages-->


          <section class="section-wrapper section-experience gray-bg pt-3">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-title"><h2>Work Experience</h2></div>
                      </div>
                  </div>
                  <!--.row-->
                  <div class="row">
                          <div class="content-item col-md-4">
                              <h3>Head of market research</h3>
                              <h4>Computer & Motor Ltd.</h4>
                              <p>United Kingdom, London</p>
                               <small>2015 - Present</small>
                          </div>
                          <!-- .experience-item -->
                          <div class="content-item col-md-4">
                              <h3>Media Analyst</h3>
                              <h4>BizzNiss</h4>
                              <p>United Kingdom, London</p>
                               <small>2012 - 2015</small>
                          </div>
                          <!-- .experience-item -->
                          <div class="content-item col-md-4">
                              <h3>Budget Administrator</h3>
                              <h4>Somsom LLC</h4>
                              <p>United Kingdom, London</p>
                              <small>2010 - 2012</small>
                          </div>
                          <!-- .experience-item -->
                  </div>
                  <!--.row-->
              </div>
              <!-- .container-fluid -->

          </section>
          <!-- .section-experience -->


            <section class="section-wrapper portfolio-section pt-3 pb-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Portfolio</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio-1.jpg" alt="">
                                </div>

                                <div class="portfolio-info">
                                    <h3>Creative concepts</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-4">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio-2.jpg" alt="">
                                </div>

                                <div class="portfolio-info">
                                    <h3>Customer focused</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-4">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio-3.jpg" alt="">
                                </div>

                                <div class="portfolio-info">
                                    <h3>Management methodology</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-4">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio-4.jpg" alt="">
                                </div>

                                <div class="portfolio-info">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- .portfolio -->

          <section class="section-contact section-wrapper gray-bg pt-3">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-title">
                              <h2>Contact</h2>
                          </div>
                      </div>
                  </div>
                  <!--.row-->
                  <div class="row">
                      <div class="col-md-12">
                          <address>
                              <strong>Address</strong><br>
                              1355 Market Street, Suite 900<br>
                              San Francisco, CA 94103

                          </address>
                          <address>
                              <strong>Phone Number</strong><br>
                              +61 3 8376 6284
                          </address>

                          <address>
                              <strong>Mobile Number</strong><br>
                              987 654 321
                          </address>


                          <address>
                              <strong>Email</strong><br>
                              <a href="mailto:#">coffee@amelie.me</a>
                          </address>
                      </div>
                  </div>
                  <!--.row-->
              </div>
              <!--.container-fluid-->
          </section>
          <!--.section-contact-->

          <section class="section-contact section-wrapper gray-bg pt-3 pb-3">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-title">
                              <h2>References</h2>
                          </div>
                      </div>
                  </div>
                  <!--.row-->
                  <div class="row">
                      <div class="col-md-3">
                        <address>
                              <strong>John Doe</strong><br>
                              Emaar Properties<br>
                              Dubai<br>
                              E-mail:john@gmail.com
                              Mobile:0562825258
                          </address>
                      </div>
                       <div class="col-md-3">
                        <address>
                              <strong>Mohammed Ali</strong><br>
                              Sobha Properties<br>
                              Dubai<br>
                              E-mail:shobha@gmail.com
                              Mobile:0562825258
                          </address>
                      </div>
                      
                  </div>
                  <!--.row-->
              </div>
              <!--.container-fluid-->
          </section>
          <!--.section-languages-->
     </div>
    </div>
   </div>

   <div class="full-wrap" id="edit-cv-form">
                    <div class="content-wrap reg-form">
                      <div class="full-wrap cv-sec">
                      <div class="cv-sec-head">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>General Info </div>
                      <div class="row mt-1">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">CV Title:</label>
                             <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="Web Designer" value="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">First Name:</label>
                             <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="John" value="">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Last Name:</label>
                             <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="John" value="">
                          </div>
                        </div>
                        
                      </div>

                       <div class="row mt-1">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="from_month" class="field-label">Nationality:</label>
                                <select name="from_year[]" id="" class="form-control js-example-basic-single"  tabindex="-1" aria-hidden="true">
                                  <option value="" data-select2-id="390">Select Nationality </option>
                                  <option value="2018" data-select2-id="391">Unite Arab Emirates</option>
                                  <option value="2018" data-select2-id="392">India</option>
                                  <option value="2018" data-select2-id="393">America</option>
                                  <option value="2018" data-select2-id="394">Australia</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Current Location:</label>
                             <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="UAE" value="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="gender" class="field-label">Gender : </label>
                            <div class="custom-radio-wrap pb-9px">
                            <div class="custom-control custom-radio mr-3">
                              <input type="radio" id="g1" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="g1">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="g2" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="g2">Female</label>
                            </div>
                          </div>
                          </div>
                      </div>
                      </div>

                       <div class="row mt-1">
                        <div class="col-md-4"><div class="form-group"><label class="field-label">DOB :</label>
                          <div class="form-group"><input class="form-control field-control" type="month" id="month_1" name="from[]" placeholder="From"></div></div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="gender" class="field-label">Martial Status : </label>
                            <div class="custom-radio-wrap  pb-9px">
                            <div class="custom-control custom-radio mr-3">
                              <input type="radio" id="m1" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="m1">Married</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="m2" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="m2">Single</label>
                            </div>
                          </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Mobile Number :</label>
                             <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="" value="">
                          </div>
                        </div>
                      </div>

                       <div class="row mt-1">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Telephone :</label>
                             <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="" value="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">E-mail :</label>
                             <input class="form-control field-control" type="email" id="institution" name="institution[]" placeholder="" value="">
                          </div>
                        </div>
                       </div>

                      </div>
                      <div class="full-wrap cv-sec">
                      <div class="row mt-1">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Address:</label>
                            <textarea class="form-control" name="job_summary" id="job_summary" placeholder=""></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="job_summary" class="field-label">Summary:</label>
                            <textarea class="form-control" name="job_summary" id="job_summary" placeholder="Job Summary"></textarea>
                          </div>
                        </div>
                        
                      </div>
                      </div>

                    <div class="full-wrap cv-sec">
                      <div class="cv-sec-head">
                        <i class="fa fa-university" aria-hidden="true"></i>Education 
                      </div>
                      <div class="full-wrap">
                      <div class="row mt-1">
                         <div class="col-md-4">
                          <div class="form-group">
                            <label for="institution" class="field-label">Institution:</label>
                            <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="Institution" value="ignou">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="degree" class="field-label">Degree:</label>
                            <select name="degree[]" id="" class="form-control js-example-basic-single" title="Select Degree">
                              <option value="">Select Degree</option>
                              <option value="High school or equivalent">High school or equivalent</option>
                              <option value="Diploma" selected="">Diploma</option>
                              <option value="Bachelors degree">Bachelors degree</option>
                              <option value="Masters degree">Masters degree</option>
                              <option value="Doctorate">Doctorate</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="field" class="field-label">Field Of Study:</label>
                          <input class="form-control field-control" type="text" id="field" name="field[]" placeholder="Field Of Study" value="IT">
                        </div>
                      </div>

                      </div>

                       <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="from_month" class="field-label">From Year:</label>
                              <div class="form-group">
                                <select name="" id="" class="form-control js-example-basic-single"  tabindex="-1" aria-hidden="true">
                                  <option value="">Select Year</option>
                                  <option value="2018" data-select2-id="391">2018</option>
                                  <option value="2018" data-select2-id="391">2017</option>
                                  <option value="2018" data-select2-id="391">2016</option>
                                </select>
                              </div>
                            </div>
                       </div>
                       <div class="col-md-4">
                            <div class="form-group" data-select2-id="388">
                              <label for="from_month" class="field-label">To Year</label>
                              <div class="form-group">
                                <select name="" id="" class="form-control js-example-basic-single" tabindex="-1" aria-hidden="true">
                                  <option value="">Select Year</option>
                                  <option value="2018" data-select2-id="391">2018</option>
                                  <option value="2018" data-select2-id="391">2017</option>
                                  <option value="2018" data-select2-id="391">2016</option>
                                </select>
                              </div>
                            </div>
                       </div>
                       <div class="col-md-4">
                            <div class="form-group" data-select2-id="388">
                              <label for="from_month" class="field-label">Country:</label>
                              <div class="form-group">
                                <select name="" id="" class="form-control js-example-basic-single" tabindex="-1" aria-hidden="true">
                                 <option value="" data-select2-id="390">Select Country</option>
                                                    <option value="United Arab Emirates" selected="" data-select2-id="263">United Arab Emirates</option>
                                                    <option value="Andorra " data-select2-id="391">Andorra </option>
                                                    <option value="Afghanistan" data-select2-id="392">Afghanistan</option>
                                                    <option value="Antigua and Barbuda" data-select2-id="393">Antigua and Barbuda</option>
                                                    <option value="Anguilla" data-select2-id="394">Anguilla</option>
                                                    <option value="Albania" data-select2-id="395">Albania</option>
                                                    <option value="Armenia" data-select2-id="396">Armenia</option>
                                                    <option value="Angola" data-select2-id="397">Angola</option>
                                                    <option value="Antarctica" data-select2-id="398">Antarctica</option>
                                                    <option value="Argentina" data-select2-id="399">Argentina</option>
                                                    <option value="American Samoa" data-select2-id="400">American Samoa</option>
                                </select>
                              </div>
                            </div>
                       </div>

                       <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn" id="qualification-add-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                         
                       </div>
                   </div>
                 </div><!-- full-wrap   -->

                 <div class="full-wrap newadded-sec mt-3 mb-3" id="new-qualification">
                      <div class="row mt-1">
                         <div class="col-md-4">
                          <div class="form-group">
                            <label for="institution" class="field-label">Institution:</label>
                            <input class="form-control field-control" type="text" id="institution" name="institution[]" placeholder="Institution" value="ignou">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="degree" class="field-label">Degree:</label>
                            <select name="degree[]" id="degree" class="form-control js-example-basic-single" title="Select Degree">
                              <option value="">Select Degree</option>
                              <option value="High school or equivalent">High school or equivalent</option>
                              <option value="Diploma" selected="">Diploma</option>
                              <option value="Bachelors degree">Bachelors degree</option>
                              <option value="Masters degree">Masters degree</option>
                              <option value="Doctorate">Doctorate</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="field" class="field-label">Field Of Study:</label>
                          <input class="form-control field-control" type="text" id="field" name="field[]" placeholder="Field Of Study" value="IT">
                        </div>
                      </div>

                      </div>

                       <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="from_month" class="field-label">From Year:</label>
                              <div class="form-group">
                                <select name="from_year[]" id="" class="form-control js-example-basic-single"  tabindex="-1" aria-hidden="true">
                                  <option value="" data-select2-id="390">Select Year</option>
                                  <option value="2018" data-select2-id="391">2018</option>
                                  <option value="2018" data-select2-id="391">2017</option>
                                  <option value="2018" data-select2-id="391">2016</option>
                                </select>
                              </div>
                            </div>
                       </div>
                       <div class="col-md-4">
                            <div class="form-group" data-select2-id="388">
                              <label for="from_month" class="field-label">To Year</label>
                              <div class="form-group">
                                <select name="from_year[]" id="from_year" class="form-control js-example-basic-single" data-select2-id="from_year" tabindex="-1" aria-hidden="true">
                                  <option value="" data-select2-id="390">Select Year</option>
                                  <option value="2018" data-select2-id="391">2018</option>
                                  <option value="2018" data-select2-id="391">2017</option>
                                  <option value="2018" data-select2-id="391">2016</option>
                                </select>
                              </div>
                            </div>
                       </div>
                       <div class="col-md-4">
                            <div class="form-group" data-select2-id="388">
                              <label for="from_month" class="field-label">Country:</label>
                              <div class="form-group">
                                <select name="from_year[]" id="" class="form-control js-example-basic-single" data-select2-id="" tabindex="-1" aria-hidden="true">
                                 <option value="" data-select2-id="390">Select Country</option>
                                                    <option value="United Arab Emirates" selected="" data-select2-id="263">United Arab Emirates</option>
                                                    <option value="Andorra " data-select2-id="391">Andorra </option>
                                                    <option value="Afghanistan" data-select2-id="392">Afghanistan</option>
                                                    <option value="Antigua and Barbuda" data-select2-id="393">Antigua and Barbuda</option>
                                                    <option value="Anguilla" data-select2-id="394">Anguilla</option>
                                                    <option value="Albania" data-select2-id="395">Albania</option>
                                                    <option value="Armenia" data-select2-id="396">Armenia</option>
                                                    <option value="Angola" data-select2-id="397">Angola</option>
                                                    <option value="Antarctica" data-select2-id="398">Antarctica</option>
                                                    <option value="Argentina" data-select2-id="399">Argentina</option>
                                                    <option value="American Samoa" data-select2-id="400">American Samoa</option>
                                </select>
                              </div>
                            </div>
                       </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                            <button type="button" class="btn btn-danger pull-right removequa" id="remove-qualific"><i class="fa fa-times">&nbsp;</i>Remove</button>
                      </div>
                  </div>
                 </div><!-- full-wrap   -->
                </div>
             

                <div class="full-wrap cv-sec mt-1">
                      <div class="cv-sec-head">
                       <i class="fa fa-paint-brush" aria-hidden="true"></i>Skills 
                      </div>
                      <div class="row  mt-1">
                         <div class="col-md-4"><div class="form-group"><label for="application" class="field-label">Application or topic</label><input class="form-control field-control" type="text" id="application" name="application[]" placeholder="Application or topic"></div>
                      </div>
                       <div class="col-md-4"><div class="form-group"><label for="type" class="field-label">Type</label><select name="type[]" id="type" class="form-control js-example-basic-single" placeholder="Select Type"><option value="Windows &amp; Office Tools">Windows &amp; Office Tools</option><option value="Web Programming &amp; Development">Web Programming &amp; Development</option><option value="Non-web programming languages">Non-web programming languages</option><option value="Operating System, Networking &amp; Hardware">Operating System, Networking &amp; Hardware </option></select></div>
                      </div>
                       <div class="col-md-4 mx-auto"><div class="form-group"><label for="level" class="field-label">Skill Level</label><select id="level" name="level[]" class="form-control js-example-basic-single" title="Select Skill Level"><option value="Basic">Basic</option><option value="Intermediate">Intermediate</option><option value="Advanced">Advanced</option><option value="Expert">Expert</option></select></div>
                   </div>
                   <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                    </div>
                      </div>

                 </div> 

                  <div class="full-wrap cv-sec mt-1">
                      <div class="cv-sec-head">
                        <i class="fa fa-language" aria-hidden="true"></i>Languages
                      </div>
                      <div class="row  mt-1">
                        <div class="col-md-4"><div class="form-group"><label for="application" class="field-label">Language1</label><input class="form-control field-control" type="text" id="application" name="application[]" placeholder="English">
                          <div class="setting-privacy lang">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="w1" type="checkbox" checked="">
                                <label for="w1">Write</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="s1" type="checkbox">
                                <label for="s1">Speak</label>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4"><div class="form-group"><label for="application" class="field-label">Language2</label><input class="form-control field-control" type="text" id="application" name="application[]" placeholder="Arabic">
                          <div class="setting-privacy lang">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="w2" type="checkbox" checked="">
                                <label for="w2">Write</label>
                              </div>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="s2" type="checkbox">
                                <label for="s2">Speak</label>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                    </div>
                      </div>
                </div>
                 

                 <div class="full-wrap cv-sec mt-1">
                      <div class="cv-sec-head">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>Experience 
                      </div>
                      <div class="row  mt-1">
                        <div class="col-md-4">
                          <div class="form-group"><label class="field-label">Experience:</label>
                            <select class="form-control js-example-basic-single" id="" name="experience[]" title="Select Experience"><option value="No Experience">No Experience</option><option value="1+ Years">1+ Years</option><option value="2+ Years">2+ Years</option><option value="3+ Years">3+ Years</option><option value="4+ Years">4+ Years</option><option value="5+ Years">5+ Years</option><option value="6+ Years">6+ Years</option><option value="7+ Years">7+ Years</option><option value="8+ Years">8+ Years</option><option value="9+ Years">9+ Years</option><option value="10+ Years">10+ Years</option></select></div>
                        </div>
                        <div class="col-md-4"><div class="form-group"><label class="field-label">Company:</label><input class="form-control field-control" type="text" name="company[]" placeholder="Company"></div>
                        </div>
                        <div class="col-md-4"><div class="form-group"><label class="field-label">Job Position:</label><input class="form-control field-control" type="text" name="position[]" placeholder="Job Position"></div>
                      </div>
                       </div>

                       <div class="row">
                      <div class="col-md-4"><div class="form-group"><label class="field-label">From:</label><div class="form-group"><input class="form-control field-control" type="month" id="month_1" name="from[]" placeholder="From"></div></div>
                      </div>
                      <div class="col-md-4"><div class="form-group"><label class="field-label">To</label><div class="form-group"><input class="form-control field-control" type="month" id="month_1" name="from[]" placeholder="From"></div></div>
                      </div>
                      <div class="col-md-4">
                            <div class="form-group" data-select2-id="388">
                              <label for="from_month" class="field-label">Country:</label>
                              <div class="form-group">
                                <select name="from_year[]" id="" class="form-control js-example-basic-single" data-select2-id="" tabindex="-1" aria-hidden="true">
                                 <option value="" data-select2-id="390">Select Country</option>
                                                    <option value="United Arab Emirates" selected="" data-select2-id="263">United Arab Emirates</option>
                                                    <option value="Andorra " data-select2-id="391">Andorra </option>
                                                    <option value="Afghanistan" data-select2-id="392">Afghanistan</option>
                                                    <option value="Antigua and Barbuda" data-select2-id="393">Antigua and Barbuda</option>
                                                    <option value="Anguilla" data-select2-id="394">Anguilla</option>
                                                    <option value="Albania" data-select2-id="395">Albania</option>
                                                    <option value="Armenia" data-select2-id="396">Armenia</option>
                                                    <option value="Angola" data-select2-id="397">Angola</option>
                                                    <option value="Antarctica" data-select2-id="398">Antarctica</option>
                                                    <option value="Argentina" data-select2-id="399">Argentina</option>
                                                    <option value="American Samoa" data-select2-id="400">American Samoa</option>
                                </select>
                              </div>
                            </div>
                       </div>
                       <div class="col-md-12"><div class="form-group"><label class="field-label">Work Description:</label><textarea class="form-control field-control cv-desc-area" type="text" name="description[]" placeholder="Work Description" rows="6"></textarea></div>
                     </div>
                     <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                    </div>
                    </div>

                 </div> 

                  <div class="full-wrap cv-sec mt-1">
                      <div class="cv-sec-head">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>Portfolio 
                      </div>
                      <div class="row  mt-1">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="id_image" class="field-label">Upload Image:</label><br>
                              <label class="btn btn-primary browse-new upload-btn-edit">
                                Browse… <input type="file" class="form-control fileupload" accept="application/pdf, application/doc, application/docx, application/xlsx" data-fv-file-type="application/pdf, application/doc, application/docx, application/xlsx" name="user_cv" id="user_cv" value="" style="display: none;">
                            </label>
                              
                              <span class="help-block text-muted"> Allowed type ( .jpg, .png ) </span>
                              <div class="update-img"> <img alt="image" src="" class="cv-user-image mr-10" id="change-trade-image" style="display:none;">
                              </div>
                         </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="field" class="field-label">Portfolio Title:</label>
                          <input class="form-control field-control" type="text" id="field" name="field[]" placeholder="Business ID" value="">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label for="field" class="field-label">Portfolio Link:</label>
                          <input class="form-control field-control" type="text" id="field" name="field[]" placeholder="http://businessid.net/desktop/" value="">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                    </div>
                      </div>
                  </div>    


                 <div class="full-wrap cv-sec mt-1">
                      <div class="cv-sec-head">
                       <i class="fa fa-upload" aria-hidden="true"></i>Uploads 
                      </div>
                      <div class="row  mt-1">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="id_image" class="field-label">Upload CV:</label><br>
                              <label class="btn btn-primary browse-new upload-btn-edit">
                                Browse… <input type="file" class="form-control fileupload" accept="application/pdf, application/doc, application/docx, application/xlsx" data-fv-file-type="application/pdf, application/doc, application/docx, application/xlsx" name="user_cv" id="user_cv" value="" style="display: none;">
                            </label>
                              
                              <span class="help-block text-muted"> Allowed type ( .pdf, .doc ) </span>
                              <div class="update-img"> <img alt="image" src="" class="cv-user-image mr-10" id="change-trade-image" style="display:none;">
                              </div>
                                                    <a class="view-cv" href="../uploads/user-cv/shejin_Abu_22Aug2017122934_A8TczPTEYn.pdf&#10;" target="_blank"><i class="fa fa-download fa-3" aria-hidden="true">&nbsp;</i>View CV</a>&nbsp; &nbsp; <a data-toggle="modal" data-target="#DeleteCV" data-loading-text="Deleting..." class="view-cv" href="javascript:void(0);"><i class="fa fa-close fa-3" aria-hidden="true">&nbsp;</i>Delete CV</a>
                         </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="id_image"  class="field-label">Cover Image:</label><br>
                            <label class="btn btn-primary browse-new upload-btn-edit">
                            Browse… <input type="file" class="form-control fileupload" accept="image/png, image/jpeg, image/jpg" data-fv-file-type="image/png, image/jpeg, image/jpg" name="cover_image" id="cover_image" value="" style="display: none;">
                            </label>
                          
                          <span class="help-block text-muted"> Allowed type ( .pdf, .jpg, .png, .jpeg) </span>
                          <div class="update-img"> <img alt="image" src="" class="cv-user-image mr-10" id="change-cover-image" style="display:none;"></div>
                          <div class="clearfix">&nbsp;</div>
                      </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                      <div class="form-group">
                        <label for="id_image" class="field-label">Signature:</label><br>
                          <label class="btn btn-primary browse-new upload-btn-edit">
                          Browse… <input type="file" class="form-control fileupload" accept="image/png, image/jpeg, image/jpg" data-fv-file-type="image/png, image/jpeg, image/jpg" name="signature" id="signature" value="" style="display: none;">
                           </label>
                        <span class="help-block text-muted"> Allowed type ( .pdf, .jpg, .png, .jpeg ) </span>
                        <div class="update-img"> <img alt="image" src="" class="cv-user-image mr-10" id="change-cover-image" style="display:none;"></div>
                        <div class="clearfix">&nbsp;</div>
                     </div>
                  </div>
                      </div>
                 </div> 

                  <div class="full-wrap cv-sec mt-1">
                      <div class="cv-sec-head">
                       <i class="fa fa-hand-o-right" aria-hidden="true"></i>References 
                      </div>
                      <div class="row  mt-1">
                        <div class="col-md-4"><div class="form-group"><label for="application" class="field-label">Reference 1</label>
                          <textarea class="form-control" name="job_summary" id="job_summary" placeholder=""></textarea>
                        </div>
                      </div> 
                      <div class="col-md-4"><div class="form-group"><label for="application" class="field-label">Reference 2</label>
                          <textarea class="form-control" name="job_summary" id="job_summary" placeholder=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="button" class="btn pull-right add-more-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                    </div>    
                  </div>

                     <div class="row">
                      <div class="editprofile-btn-wrap float-right ml-auto mt-3">
                                <button type="button" class="btn editprofile-btn">Save Changes</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>

                    </div>
                  </div>
                   
                </div>
             





  </div><!-- tab -->
             
              
                <div class="bhoechie-tab-content">
                  <div class="head">Social Networks</div>
                     <div class="content-wrap reg-form">
                      <div class="edit-add-more">
                       <button type="button" class="btn job-btn pull-right add-qualification add-more-btn"><i class="fa fa-plus">&nbsp;</i>Add More</button>
                       </div>
                      <div class="row mt-3">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="s_type" class="field-label">Social Type:</label>
                            <select name="s_type[]" id="s_type" class="form-control js-example-basic-single" placeholder="Select Type">  <option value="">Select Type</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Linkedin">Linkedin</option>
                            <option value="Instagram">Instagram</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="link" class="field-label">Social Link</label>
                          <input class="form-control field-control" type="text" id="link" name="link[]" placeholder="Social Link">
                        </div>
                      </div>
                      
                      
                   

                   
                      </div>
                     <div class="row mt-3">
                      <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn btn-danger pull-right removequa remove2"><i class="fa fa-times">&nbsp;</i>Remove</button>
                                <button type="button" class="btn editprofile-btn">Save Changes</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>
                </div>
                </div><!-- tab -->

                 <div class="bhoechie-tab-content">
                  <div class="head">More Information</div>
                     <div class="content-wrap reg-form">
                      <div class="row">
                        <div class="col-md-12 mx-auto">
                          <div class="form-group"><label class="field-label">Work Description:</label><textarea class="form-control field-control" type="text" name="description[]" placeholder="Work Description" rows="6" style="margin-top: 5px !important;"></textarea>
                        </div>
                      </div>
                      
                        
                  
                      </div>
                     <div class="row mt-3">
                      <div class="editprofile-btn-wrap float-right ml-auto">
                                <button type="button" class="btn btn-danger pull-right removequa remove2"><i class="fa fa-times">&nbsp;</i>Remove</button>
                                <button type="button" class="btn editprofile-btn">Save Changes</button>
                                <button type="button" class="btn editprofile-btn reset">Clear</button>
                             </div>
                    </div>  
                    
                </div>
                </div><!-- tab -->

                 <div class="bhoechie-tab-content">
                  <div class="head">Edit Product</div>
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
                                <button type="button" class="btn editprofile-btn">Save Changes</button>
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
@include('front_end.modules.header-hero-nav')
@include('front_end.modules.hero-header')
<style type="text/css">
  .sw-toolbar-bottom{
    display: none;
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="full-wrap bg-store pb-4">
      <div class="cmn-container-reg">
        <div class="row">
          <div class="col-md-4 mx-auto select-acc-box mt-3">
            <div class="select-acc">Choose Your Account Type</div>
            <div class="full-wrap bg-white area acc-choose">
              <div class="custom-control custom-radio d-inline-block">
                <input type="radio" id="per" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="per">Personal</label>
              </div>
              <div class="custom-control custom-radio d-inline-block pull-right">
                <input type="radio" id="busi" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="busi">Business</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full-wrap bg-store pb-4"> 
              <!-- <div class="container"> -->
              <div class="row">
                <div class="col-md-12 order-box mt-2">
                  <div id="smartwizard1" class="mt-2">
                    <ul>
                      <li class="text-center"><a href="#step-2"><i class="fa fa-copyright" aria-hidden="true"></i><br />
                        <small>Company Main Info</small></a></li>
                      <li class="text-center"><a href="#step-8"><i class="fa fa-id-card-o" aria-hidden="true"></i><br />
                        <small>Quick Registration</small></a></li>
                      <li class="text-center"><a href="#step-1"><i class="fa fa-user-circle" aria-hidden="true"></i><br />
                        <small>Create Users </small></a></li>
                      <li class="text-center"><a href="#step-3"><i class="fa fa-money" aria-hidden="true"></i><br />
                        <small>Owner / Share Holder Info </small></a></li>
                      <li class="text-center"><a href="#step-4"><i class="fa fa-sitemap" aria-hidden="true"></i><br />
                        <small>Branches</small></a></li>
                      <li class="text-center"><a href="#step-5"><i class="fa fa-map-marker" aria-hidden="true"></i><br />
                        <small>Location</small></a></li>
                      <li class="text-center"><a href="#step-7"><i class="fa fa-file-text-o" aria-hidden="true"></i><br />
                        <small>Licence Info</small></a></li>
                      <li class="text-center"><a href="#step-6"><i class="fa fa-upload" aria-hidden="true"></i><br />
                        <small>Upload Documents</small></a></li>
                      <li class="text-center"><a href="#step-9"><i class="fa fa-credit-card" aria-hidden="true"></i><br />
                        <small>Verifiy & Payment</small></a> </li>
                    </ul>
                    <div>
                      <div id="step-8">
                        <div class="lg-reg reg-form"> 
                          <!--  <h2 class="reg-sec-header user-info"><i class="fa fa-user-circle" aria-hidden="true"></i>User Info</h2> -->
                          <div class="row">
                            <div class="col-md-12 mx-auto">
                              <div class="row">
                                <div class="col-md-6 pr-0">
                                  <div class="full-wrap full-register-box first"> <a href="" class="btn mx-auto complete-reg">Register Now</a>
                                    <p class="first-desc"> If you registered with this stage you can't get BID's all facility ,and you will not verfied by us until complete necessary requirements.However you will get the basic facility of the BID. </p>
                                    <div class="or-box"> 
                                      <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->OR </div>
                                  </div>
                                </div>
                                <div class="col-md-6 pl-0">
                                  <div class="full-wrap full-register-box border-left-0 second"> <a href="" class="btn mx-auto complete-reg">Go to, &nbsp;<span>Next Step</span></a>
                                    <p class="first-desc pl-4"> If you willing for complete registration , You are able to use all facility , our support , and guidness (Some of other Facilities) </p>
                                    <ul>
                                      <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Add Your Product</li>
                                      <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Manage Product</li>
                                      <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Dashboard</li>
                                      <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Logistics Support</li>
                                      <li><i class="fa fa-check-square-o" aria-hidden="true"></i> You can add Property, New Car , Used Car, Services, Wholesale ... </li>
                                    </ul>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="text-right">
                           <div class="btn-group mr-2 sw-btn-group" role="group"><button class="btn btn-secondary sw-btn-prev disabled" type="button">Previous</button>
                           </div>
                          </div> 
                        </div>
                      </div>
                      <div id="step-2" class="mt-2">
                      {{ Form::open(array('url' => 'register/post')) }}
                        <div class="lg-reg reg-form">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Company Name:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
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
                                  <option value="3">Construction</option>
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
                                <label for="usr" class="field-label">E-mail:</label>
                                <input type="email" class="form-control field-control" id="usr">
                              </div>
                            </div>
                          </div>
                          <div class="row">
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
                          </div>
                          <div class="full-wrap super-user-wrap">
                            <div class="full-wrap"> <img src="{{ URL::asset('front_end/images/icon/super.png') }}" class="d-inline-block"> <span class="super-user d-inline-block align-middle">Main User Details</span> </div>
                            <div class="row mt-3">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="first_name" class="field-label">User Name:</label>
                                  <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="first_name" class="field-label">Designation:</label>
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
                                  <label for="first_name" class="field-label">E-mail:</label>
                                  <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="first_name" class="field-label">Confirm E-mail:</label>
                                  <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="first_name" class="field-label">Password:</label>
                                  <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="first_name" class="field-label">Confirm Password:</label>
                                  <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                </div>
                              </div>
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-5 text-center mx-auto note-super"> 
                                <!-- <i class="fa fa-lock" aria-hidden="true"></i> --> 
                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                                <p>This user has full limit  to use all facilities and functions in your company account in Businessid.net. In addition he can add and manage sub user who can manage your company account. </p>
                                <p>Businessid.net will generate a personal account for this user. </p>
                              </div>
                            </div>
                          </div>
                        </div>

                      {{ Form::close() }} 
                      <div class="text-right">
                        <div class="btn-group  sw-btn-group" role="group"><button class="btn btn-secondary sw-btn-prev disabled" type="button">Previous</button><button class="btn btn-secondary sw-btn-next" type="button">Next</button>
                        </div>
                      </div>
                      </div>
                      <div id="step-3" class="mt-2">
                        <div class="lg-reg reg-form">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Full Name:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Type:</label>
                                <select class="form-control js-example-basic-single" name="" id="">
                                  <option value="" data-select2-id="20">Select Type</option>
                                  <option value="1" data-select2-id="1212">Local Sponsor</option>
                                  <option value="2" data-select2-id="1213">Owner</option>
                                  <option value="3" data-select2-id="1214">Partner</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Percentage Of Share</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
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
                                <label for="first_name" class="field-label">Mobile Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">E-mail:</label>
                                <input type="email" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">ID No:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Upload Your ID</label>
                                <div class="custom-file upload-reg">
                                  <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                  <span class="text-muted">*This will not be share with  anyone </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-4">
                              <button class="switch-acc">Delete</button>
                              <button class="switch-acc">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-1" class="mt-2">
                        <div class="lg-reg reg-form">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Upload Your Photo</label>
                                <div class="custom-file upload-reg">
                                  <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Full Name:</label>
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
                                <div class="full-wrap mobile-code">
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
                                <label for="usr" class="field-label">Password:</label>
                                <input type="text" class="form-control field-control" id="usr">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="usr" class="field-label">Confirm Password:</label>
                                <input type="text" class="form-control field-control" id="usr">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="lg-reg reg-form col-md-12">
                              <div class="full-wrap user-action-part mt-4">
                                <div class="label-head"><img src="{{ URL::asset('front_end/images/icon/allow.png') }}" class="mr-1"><span class="d-inline-block">This user authorized to :</span></div>
                                <div class="full-wrap mt-2">
                                  <div class="custom-control custom-radio d-inline-block acc-choose mt-2">
                                    <input type="radio" id="1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="1">Delegation of using all the businessid.net functions, facilities and actions.</label>
                                  </div>
                                  <div class="custom-control custom-radio d-inline-block acc-choose mt-2">
                                    <input type="radio" id="2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="2">All E-commerce:</label>
                                  </div>
                                  <ul class="list-for-user">
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="e1" type="checkbox" checked="">
                                        <label for="e1">Add product / Delete product / Manage Product / Edit product… etc.</label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="e2" type="checkbox">
                                        <label for="e2">Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.</label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="e3" type="checkbox">
                                        <label for="e3">Buy from supplier /   product / Edit the buying order… etc. </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="e4" type="checkbox">
                                        <label for="e4">Create tender / accept tender / Delete tender / Edit tender… etc. </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="e5" type="checkbox">
                                        <label for="e5">Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.</label>
                                      </div>
                                    </li>
                                    <li class="ml-3">
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="e6" type="checkbox">
                                        <label for="e6">Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from  businessid.net / Edit your advertising package</label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="full-wrap mt-2">
                                  <div class="custom-control custom-radio d-inline-block acc-choose mt-2 ml-1">
                                    <input type="radio" id="s0" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="s0">All Social Media</label>
                                  </div>
                                  <ul class="list-for-user">
                                    <li class="ml-3">
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="s1" type="checkbox" checked="">
                                        <label for="s1">Post video, Post photo, Follow, Un Follow, Change the name of company / background photo / Profile photo / Write comment / Like post / Share / Delete all type of post and comments / Edit all the posts in profile and in newsfeed… etc.</label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="s2" type="checkbox" checked="">
                                        <label for="s2">Chat / Send message</label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="user-for-msg text-center"> <i class="fa fa-info-circle" aria-hidden="true"></i> All user will have a personal account with same user name and password </div>
                              </div>
                            </div>
                          </div>
                          <div class="full-wrap text-right send-author-wrap"> <span>* This user has to authorized by <a href="">[Name]</a></span>
                            <button class="btn send-author"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send For Authorization</button>
                          </div>
                          <div class="row">
                            <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                              <button class="switch-acc">Delete</button>
                              <button class="switch-acc">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-4" class="mt-2">
                        <div class="lg-reg reg-form">
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
                        </div>
                      </div>
                      <div id="step-5" class="mt-2">
                        <div class="lg-reg reg-form">
                          <div class="row">
                            <div class="col-md-12 location-btns"> 
                              <!-- <button class="switch-acc">Add New</button> -->
                              <button class="get-current-location"><i class="fa fa-paper-plane" aria-hidden="true"></i>Use my current location</button>
                            </div>
                          </div>
                          <div class="row mt-3">
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
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Fax Number:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Latitude:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Longitude:</label>
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
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
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Address:</label>
                                <textarea class="form-control" name="" id="" placeholder=""></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Drag Your Location:</label>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7216.350927162272!2d55.31808257349632!3d25.264682285459234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ccf30bc59df%3A0xe1f5b339a2799f6d!2sAl+Muraqqabat+-+Dubai!5e0!3m2!1sen!2sae!4v1530687547937" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>
                          <div>
                            <button class="switch-acc mt-2">Add New location</button>
                          </div>
                        </div>
                      </div>
                      <div id="step-6" class="mt-2">
                        <div class="lg-reg reg-form">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="first_name" class="field-label">Upload Logo</label>
                                <div class="custom-file upload-reg">
                                  <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-7" class="mt-2">
                        <div class="lg-reg reg-form pb-5">
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
                                  <span class="text-muted">*We will not share with this except the account holder </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      </div>
                  </div>
                  <!-- Smart-Wizard --> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('front_end.modules.footer')
</body>
</html>
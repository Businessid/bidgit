@include('front_end.modules.header-hero-nav')
@include('front_end.modules.hero-header')
<link rel="stylesheet" href="{{ URL::asset('front_end/css/prism.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/isValidNumber.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/reg-wizard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker3.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/modal.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/dropzone.css') }}">
<style type="text/css">
  .store-cat-nav{
    display: none;
  }
  .masthead .nav-container {
    top: 5px;
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="full-wrap bg-store pb-4">
      <div class="cmn-container-reg">
        <div class="row">
          <!-- Top content -->
          <div class="top-content">
            <div class="head">Follow the registration steps</div>
            <div class="row">
              <div class="col-md-12 form-box f1">

                <div class="f1-steps">
                  <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="6" data-number-of-steps="4" style="width: 6%;"></div>
                  </div>
                  <div class="f1-step <?php if(@$step==1) echo 'active'; elseif(@$step>1) echo 'activated'; else echo '';?>">
                    <div class="f1-step-icon"><i class="fa fa-copyright" aria-hidden="true"></i></div>
                    <p>Company Information</p>
                  </div>
                  <div class="f1-step <?php if(@$step==2) echo 'active'; elseif(@$step>2) echo 'activated';else echo '';?>">
                    <div class="f1-step-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                    <p>Licence </br>Information</p>
                  </div>
                  <div class="f1-step <?php if(@$step==3) echo 'active'; elseif(@$step>3) echo 'activated';else echo '';?>">
                    <div class="f1-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <p>Location</p>
                  </div>
                  <div class="f1-step <?php if(@$step==4) echo 'active'; elseif(@$step>4) echo 'activated';else echo '';?>">
                    <div class="f1-step-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                    <p>Quick Registration</p>
                  </div>
                  <a   href="@if($step > 5) {{url('/register/location')}} @else # @endif">
                    <div class="f1-step <?php if(@$step==5) echo 'active'; elseif(@$step>5) echo 'activated';else echo '';?>">
                      <div class="f1-step-icon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                      <p>Create Users</p>
                    </div>
                  </a>
                  <a   href="@if($step > 6) {{url('/register/location')}} @else # @endif">
                    <div class="f1-step <?php if(@$step==6) echo 'active'; elseif(@$step>6) echo 'activated';else echo '';?>">
                      <div class="f1-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                      <p>Owner / Share Holder Information</p>
                    </div>
                  </a>
                  <a   href="@if($step > 7) {{url('/register/location')}} @else # @endif">
                    <div class="f1-step <?php if(@$step==7) echo 'active'; elseif(@$step>7) echo 'activated';else echo '';?>">
                      <div class="f1-step-icon"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                      <p>Branches</p>
                    </div>
                  </a>
                  <a   href="@if($step > 8) {{url('/register/location')}} @else # @endif">
                    <div class="f1-step <?php if(@$step==8) echo 'active'; elseif(@$step>8) echo 'activated';else echo '';?>">
                      <div class="f1-step-icon"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                      <p>Verifiy</p>
                    </div>
                  </a>
                  <!-- <a   href="@if($step > 9) {{url('/register/location')}} @else # @endif">
                    <div class="f1-step <?php //if(@$step==9) echo 'active'; elseif(@$step>9) echo 'activated';else echo '';?>">
                      <div class="f1-step-icon"><i class="fa fa-upload" aria-hidden="true"></i></div>
                      <p>Verifiy</p>
                    </div>
                  </a> -->
                  <a   href="@if($step > 9) {{url('/register/payment')}} @else # @endif">
                    <div class="f1-step <?php if(@$step==10) echo 'active'; elseif(@$step>10) echo 'activated';else echo '';?>">
                      <div class="f1-step-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                      <p>Payment</p>
                    </div>
                  </a>
                </div>

                <fieldset class="users"  @if($step==5) style="display:block" @else  style="display:none !important" @endif >
                  <div class="lg-reg reg-form">
                    {{ Form::open(array('url' => 'register/insert_users', 'enctype' => 'multipart/form-data','id'=>'users_form')) }}
                    <div id="users_repeater">
                      <div data-repeater-list="users">
                        <div data-repeater-item>
                          <div class="user-for-msg text-center mt-2 mb-4 border-0">
                            ( You can add multiple users in your account with unlimited facilities for each user or you can specify the area where your user can work on it  …  If not you can <b>skip</b> from this step )
                          </div>
                          <div class='section-users'> <!-- data-repeater-item="" -->
                            <div class="add-more-user">
                              <div class="row mt-3">
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_userimage" class="field-label">Upload Your Photo</label>
                                    <div class="custom-file upload-reg">
                                      <input type="file" class="custom-file-input form-control field-control" name="user_userimage">
                                      <label class="custom-file-label" for="user_userimage">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_first_name" class="field-label">First Name:</label>
                                    <input type="text" data-validation="length alphanumeric" data-validation-length="min4" class="form-control field-control user_first_name" name="user_first_name"  value="{{old('user_first_name')}}"  placeholder="" data-fv-field="user_first_name">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_last_name" class="field-label">Last Name:</label>
                                    <input type="text" class="form-control field-control" name="user_last_name"  value="" placeholder="" data-fv-field="user_last_name">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="field-label">Gender : </label>
                                    <div class="custom-radio-wrap">
                                      <div class="custom-control custom-radio mr-3">
                                        <input type="radio" id="user_gender" name="user_gender" class="custom-control-input" value="Male">
                                        <label class="custom-control-label" for="user_gender">Male</label>
                                      </div>
                                      <div class="custom-control custom-radio pull-right">
                                        <input type="radio" id="user_gender1" name="user_gender" class="custom-control-input" value="Female">
                                        <label class="custom-control-label" for="user_gender1">Female</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_designation" class="field-label">Designation:</label>
                                    <input type="text" class="form-control field-control" name="user_designation" value="" placeholder="" data-fv-field="user_designation">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_dob" class="field-label">DOB:</label>
                                    <input type="text" class="form-control field-control datepicker" name="user_dob" value="" placeholder="" data-fv-field="user_dob">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_mobile" class="field-label">Mobile Number:</label>
                                    <input type="text" class="form-control field-control mobile usermobile" name="user_mobile" value="" placeholder="" data-fv-field="user_mobile">
                                    <input type="hidden" class="user_mobile_code" name="user_mobile_code" value="">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_phone" class="field-label">Landline Number:</label>
                                    <input type="text" class="form-control field-control mobile" name="user_phone" value="" placeholder="" data-fv-field="user_phone">
                                    <input type="hidden" class="user_phone_code" name="user_phone_code" value="">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_nationality" class="field-label">Nationality:</label>
                                    <select class="form-control js-example-basic-single" name="user_nationality"  title="">
                                      <option value="">- Select -</option>
                                      @if(!empty($countries))
                                        @foreach($countries as $val)
                                          <option value="{{ $val->pk_countries_id }}" <?php if(old('user_nationality')==$val->pk_countries_id) echo "selected"; ?>>{{ $val->name }}</option>
                                        @endforeach
                                      @endif
                                    </select>
                                   </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_email" class="field-label">E-mail:</label>
                                    <input type="email" class="form-control field-control" name="user_email" value="" placeholder="" data-fv-field="user_email">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_email_confirmation" class="field-label">Confirm E-mail:</label>
                                    <input type="email" class="form-control field-control" name="user_email_confirmation"  value="" placeholder="" data-fv-field="user_email_confirmation">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_password" class="field-label">Password:</label>
                                    <input type="password" class="form-control field-control" name="user_password" value="" placeholder="" data-fv-field="password">
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="user_password_confirmation" class="field-label">Confirm Password:</label>
                                    <input type="password" class="form-control field-control" name="user_password_confirmation" value="" placeholder="" data-fv-field="confirmpassword">
                                    </div>
                                </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                 <input type="hidden" class="form-control field-control" name="auth_type" value="0" placeholder=""> 
                                </div>
                              </div>

                              </div>
                              <div class="row">
                                <div class="lg-reg reg-form col-md-12">
                                  <div class="full-wrap user-action-part mt-4">
                                    <div class="label-head"><img src="{{ URL::asset('front_end/images/icon/allow.png') }}" class="mr-1"><span class="d-inline-block">This user authorized to :</span></div>
                                    <div class="full-wrap mt-2">

                                    <div class="checkbox-edit checkbox-primary d-inline-block acc-choose mt-2">
                                          <input id="type1" name="permission_type" type="checkbox" class="checkboxes permission_type" value="1" >
                                          <label for="type1">Delegation of using all the businessid.net functions, facilities and actions.</label>
                                    </div>


                                      <div class="full-wrap text-left"><span class="or-box-for">OR</span></div>
                                    </div>
                                    <div class="full-wrap mt-2">
                                      <div class="checkbox-edit checkbox-primary d-inline-block acc-choose mt-2">
                                          <input id="type2" name="permission_type" type="checkbox" class="checkboxes permission_type" value="2" >
                                          <label for="type2">All E-commerce:</label>
                                      </div>

                                      <ul class="list-for-user">
                                        <li>
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="products1"  name="auth_ecommerce" type="checkbox" class="checkboxes auth-ecommerce" value="allow_product" title="Add product / Delete product / Manage Product / Edit product… etc.">
                                            <label for="products1">Add product / Delete product / Manage Product / Edit product… etc.</label>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="products2" type="checkbox" name="auth_ecommerce" class="checkboxes auth-ecommerce" value="allow_manage_order" title="Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.">
                                            <label for="products2">Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.</label>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="products3" type="checkbox" name="auth_ecommerce" class="checkboxes auth-ecommerce" value="allow_buy" title="Buy from supplier /   product / Edit the buying order… etc.">
                                            <label for="products3">Buy from supplier /   product / Edit the buying order… etc. </label>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="products4" type="checkbox" name="auth_ecommerce" class="checkboxes auth-ecommerce" value="allow_tender" title="Create tender / accept tender / Delete tender / Edit tender… etc.">
                                            <label for="products4">Create tender / accept tender / Delete tender / Edit tender… etc. </label>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="products5" type="checkbox" name="auth_ecommerce" class="checkboxes auth-ecommerce" value="allow_job" title="Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.">
                                            <label for="products5">Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.</label>
                                          </div>
                                        </li>
                                        <li class="ml-3">
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="products6" id="advertising" type="checkbox" name="auth_ecommerce" class="checkboxes auth-ecommerce" value="allow_advertising" title="Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from  businessid.net / Edit your advertising package">
                                            <label for="products6">Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from  businessid.net / Edit your advertising package</label>
                                          </div>
                                        </li>
                                      </ul>
                                      <div class="full-wrap text-left"><span class="or-box-for">OR</span></div>
                                    </div>
                                    <div class="full-wrap mt-2">
                                      <div class="checkbox-edit checkbox-primary d-inline-block acc-choose mt-2">
                                          <input id="type3" name="permission_type" type="checkbox" class="checkboxes permission_type" value="3" >
                                          <label for="type3">All Social Media:</label>
                                      </div>
                                      <ul class="list-for-user">
                                        <li class="ml-3">
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="social1" type="checkbox" name="auth_social" class="checkboxes auth-social" value="allow_post" title="Post video, Post photo, Follow, Un Follow, Change the name of company / background photo / Profile photo / Write comment / Like post / Share / Delete all type of post and comments / Edit all the posts in profile and in newsfeed… etc.">
                                            <label for="social1">Post video, Post photo, Follow, Un Follow, Change the name of company / background photo / Profile photo / Write comment / Like post / Share / Delete all type of post and comments / Edit all the posts in profile and in newsfeed… etc.</label>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="checkbox-edit checkbox-primary">
                                            <input id="social2" type="checkbox" name="auth_social" class="checkboxes auth-social" value="allow_chat" title="Chat / Send message">
                                            <label for="social2">Chat / Send message</label>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="user-for-msg text-center"> <i class="fa fa-info-circle" aria-hidden="true"></i> All user will have a personal account with same user name and password </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Auth Message -->
                              <span class="auth-message">
                                
                              </span>
                              <div class="full-wrap text-right send-author-wrap"> <span>* This user has to authorized by <a href="">[Name]</a></span>
                                <button name="authorization_name" type="button" class="btn send-author"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send For Authorization</button> 
                                <a name="remove_user" href="javascript:void(0);" data-repeater-delete class="btn switch-acc "><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="javascript:add_users_form_roles();"  data-repeater-create class="btn switch-acc create-new-user"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New</a>
                    </div>
                    <div class="f1-buttons">
                      <button type="button" class="btn btn-previous">Previous</button>
                       <button type="submit" class="btn btn-next">Skip</button>
                      <button type="submit" class="btn">Next</button>
                    </div>
                    {{ Form::close() }}
                  </div>
                </fieldset>

                <fieldset class="investors"  @if($step==6) style="display:block" @else  style="display:none !important" @endif>
                  {{ Form::open(array('url' => 'register/insert_owners', 'enctype' => 'multipart/form-data','id'=>'owners_form')) }}
                  <div id="owners_repeater">
                    <div data-repeater-list="owners">
                      <div data-repeater-item>
                        <input type="hidden" name="tab" value="investors">
                        <div class="lg-reg reg-form">
                          <div class="add-more-investor">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_name" class="field-label">Full Name:</label>
                                  <input type="text" class="form-control field-control" name="owners_name" value="" placeholder="" data-fv-field="owners_name">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_type" class="field-label">Type:</label>
                                  <select class="form-control js-example-basic-single" name="owners_type">
                                    <option value="">Select Type</option>
                                    <option value="1">Local Sponsor</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Partner</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_share" class="field-label">Percentage Of Share</label>
                                  <input type="text" class="form-control field-control" name="owners_share" value="" placeholder="" data-fv-field="owners_share">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_nationality" class="field-label">Nationality:</label>
                                  <select class="form-control js-example-basic-single" name="owners_nationality"  title="">
                                    <option value="">- Select -</option>
                                    @if(!empty($countries))
                                      @foreach($countries as $value)
                                        <option value="{{ $value->pk_countries_id}}">{{ $value->name }}</option>
                                      @endforeach
                                    @endif
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_mobile" class="field-label">Mobile Number:</label>
                                  <input type="text" class="form-control field-control mobile" name="owners_mobile" value="" placeholder="" data-fv-field="owners_mobile">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_phone" class="field-label">Landline:</label>
                                  <input type="text" class="form-control field-control mobile" name="owners_phone" value="" placeholder="" data-fv-field="owners_phone">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_email" class="field-label">E-mail:</label>
                                  <input type="email" class="form-control field-control" name="owners_email" value="" placeholder="" data-fv-field="owners_email">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_id_no" class="field-label">ID No:</label>
                                  <input type="text" class="form-control field-control" name="owners_id_no" value="" placeholder="" data-fv-field="owners_id_no">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="owners_file" class="field-label">Upload Your ID</label>
                                  <div class="custom-file upload-reg">
                                    <input type="file" class="custom-file-input form-control field-control" name="owners_file">
                                    <label class="custom-file-label" for="owners_file">Choose file</label>
                                    <span class="text-muted">*This will not be share with  anyone </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <a href="javascript:void(0);" data-repeater-delete class="btn switch-acc"><i class="fa fa-envelope-o" aria-hidden="true"></i> Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                        <a href="javascript:add_owners_form_roles();" data-repeater-create="" class="switch-acc add-user">Add</a>
                      </div>
                    </div>
                    <div class="f1-buttons">
                      <button type="button" class="btn btn-previous">Previous</button>
                       <button type="submit" class="btn btn-next">Skip</button>
                      <button type="submit" class="btn">Next</button>
                    </div>
                  </div>
                  {{ Form::close() }}
                </fieldset>

                <fieldset class="branches"  @if($step==7) style="display:block" @else  style="display:none !important" @endif>
                  {{ Form::open(array('url' => 'register/insert_branches', 'enctype' => 'multipart/form-data','id'=>'branches_form')) }}
                  <div id="branches_repeater">
                    <div data-repeater-list="branches">
                      <div data-repeater-item>
                        <div class="lg-reg reg-form">
                          <div class="add-more-branch">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="branches_name" class="field-label">Branch Name:</label>
                                  <input type="text" class="form-control field-control" name="branches_name" value="" placeholder="" data-fv-field="branches_name">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="branches_mobile" class="field-label">Mobile Number:</label>
                                  <input type="text" class="form-control field-control mobile" name="branches_mobile" value="" placeholder="" data-fv-field="branches_mobile">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="branches_phone" class="field-label">LandLine:</label>
                                  <input type="text" class="form-control field-control mobile" name="branches_phone" value="" placeholder="" data-fv-field="branches_phone">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="branches_email" class="field-label">Email:</label>
                                  <input type="email" class="form-control field-control" name="branches_email" value="" placeholder="" data-fv-field="branches_email">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                              <div class="form-group">
                                <label for="branches_country" class="field-label">Country:</label>
                                <select class="form-control js-example-basic-single fk_country_id" name="branches_country"  title="">
                                  <option value="">- Select -</option>
                                  @if(!empty($countries))
                                    @foreach($countries as $value)
                                      <option value="{{ $value->pk_countries_id}}">{{ $value->name }}</option>
                                    @endforeach
                                  @endif
                                </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                              <div class="form-group">
                                <label for="branches_city" class="field-label">City:</label>
                                <select class="form-control js-example-basic-single fk_city_id" name="branches_city"  title="">
                                </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                              <div class="form-group">
                                <label for="branches_area" class="field-label">Area:</label>
                                <select class="form-control js-example-basic-single" name="branches_area"  title="">
                                </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="branch_address" class="field-label">Branch Address:</label>
                                  <textarea class="form-control" name="branch_addres" placeholder=""></textarea>
                                </div>
                              </div>
                            </div>

                            <div class=" row" style="margin-bottom: 40px;">
                              <a href="javascript:void(0);" data-repeater-delete class="btn switch-acc"><i class="fa fa-envelope-o" aria-hidden="true"></i> Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                        <a href="javascript:add_branches_form_roles();" data-repeater-create="" class="switch-acc add-user">Add</a>
                      </div>
                    </div>
                    <div class="f1-buttons">
                      <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn btn-next">Skip</button>
                      <button type="submit" class="btn">Next</button>
                    </div>
                  </div>
                  {{ Form::close() }}
                </fieldset>
                <fieldset class="upload_document" @if($step==8) style="display:block" @else  style="display:none !important" @endif >
                    @if(@$submitted==1)
                    <div class="user-for-msg text-center document-success"> <i class="fa fa-file" aria-hidden="true"></i> Documents are successfully recieved, it may take several hours to check them. We will let you know about the results of your company profle verification by email.</div><br/><br/><br/>
                    @else
                        <div class="lg-reg reg-form">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group" style="text-align: center;">
                                <label for="document_file" class="field-label">Upload Documents( Eg: Trade liecnce,Memorandum of association. etc...)</label><br/>
     {{ Form::open(array('url' => 'docuemnt', 'enctype' => 'multipart/form-data','id'=>'myDropzone', 'class'=>'dropzone')) }}

     {{ Form::close() }}


                              </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class='document_prevew'>
                              </div>
                              <div class="full-wrap text-right send-author-wrap"> <span>* This document we will use only for verify account..</a></span>
                                <button type="submit" class="btn"><i class="fa fa-upload" aria-hidden="true"></i> Submit Documents</button> 
                              </div>
                          </div>
                        </div>
                    @endif
                  <!--   <div class="row">
                      <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                        <a href="javascript:void(0);" data-repeater-create="" class="switch-acc add-user">Add</a>
                      </div>
                    </div> -->
                    <div class="f1-buttons">
                      <button type="button" class="btn btn-previous">Previous</button>
                      <button type="button" class="btn btn-next">Next</button>
                    </div>
                </fieldset>
                <fieldset class="logo">
                  <div class="lg-reg reg-form">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="company_logo" class="field-label">Upload Logo</label>
                          <div class="custom-file upload-reg">
                            <input type="file" class="custom-file-input form-control field-control" id="company_logo" name="company_logo">
                            <label class="custom-file-label" for="company_logo">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn">Next</button>
                  </div>
                </fieldset>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Authorise Modal -->
  <!--   Authorize Box -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered cst-1" role="document">
      <div class="modal-content cst-1">
        <div class="modal-body">
          <div class="auth-mod-cnt">
            <div class="auth-mod-cnt-bx">
              <div class="auth-mod-cnt-br">
                <div class="mod-txt-tp-1 text-center">Authorizaton Request</div>
                <div class="rg-cnt-tp-1 mt-3">
                  <div class="text-center mt-4 mod-txt-tp-2">New user <span id='auth-new-username'></span></div>
                  <div class="text-center mt-2 mod-txt-tp-2">Requested  to following Facilities</div>
                  <div class="mt-3">
                    <ul id='checked-auth-list' class="list-unstyled mdl-lst-grp-1">
                      
                    </ul>
                  </div>
                  <div class="md-frm-1 mt-3">
                    <form>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Main User</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="auth-username" id="inputUser" placeholder="username">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="auth-password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                      </div>
                      <span class='auth-alert-error'></span>
                    </form>
                  </div>
                  <div class="btn-grp-1 mt-5">
                    <ul class="nav nav-fill">
                      <li>
                        <a href="#" class="md-tp-lnk accept ceck-authorize">Authorized</a>
                      </li>
                      <li>
                        <a href="#" class="md-tp-lnk decline">Decline</a>
                      </li>
                      <li>
                        <a href="#" class="md-tp-lnk pending">Pending</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Get Map adress -->
  <p id='address'></p>
  @include('front_end.modules.footer')
  <script src="{{ URL::asset('front_end/js/jquery.repeter.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/jquery.validate.min.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/bootstrap-datepicker.min.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function(e) {
          $('#company_dob').datepicker({
              format: 'yyyy-mm-dd'
          }).on('changeDate', function(ev){
              $(this).datepicker('hide');
          });
          $(".permission_type").click(function() {
              $(this).closest("input").find(".checkboxes").attr('checked', this.checked);
          });
          $('.datepicker').datepicker({
              format: 'yyyy-mm-dd'
          }).on('changeDate', function(ev){
              $(this).datepicker('hide');
          });
          $('.fk_country_id').change(function(e) {
            El_name=$(this).attr("name");
              getCity(this.value,El_name);
          });
          $('.fk_city_id').change(function(e) {
            El_name=$(this).attr("name");
              getArea(this.value,El_name);
          });
      });
 
      function getCity(countryid,El_name='') {  
          var City_name = El_name.replace("branches_country", "branches_city");
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/selectCities'; ?>",
              method: 'POST',
              data: {fk_country_id:countryid, _token:token},
              success: function(data) {
                console.log(data);
                  $("select[name='"+City_name+"'").html('');
                  $("select[name='"+City_name+"'").html(data.options);
              }
          });
      }
      function getArea(cityid,areaid='') {
         var Area_name = El_name.replace("branches_city", "branches_area");
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/selectAreas'; ?>",
              method: 'POST',
              data: {fk_city_id:cityid, _token:token},
              success: function(data) {
                  $("select[name='"+Area_name+"'").html('');
                  $("select[name='"+Area_name+"'").html(data.options);
              }
          });
      }
  </script>
  <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyCb8mnr3T1fcU8UgpCWylaH3rqfVdBsPbk&sensor=false&libraries=places'></script>
  <script src="{{ URL::asset('front_end/js/locationpicker.jquery.js') }}"></script>
  <script>
      function updateControls(addressComponents) {
          $('#country').val(addressComponents.country);
      }
      initMap();
      function initMap(lat='',lot=''){
          if(isNaN(lat)) lat=25.271452;
          if(isNaN(lot)) lot=55.3244922;
          $('#map').locationpicker({
              location: {
                  latitude:lat,
                  longitude:lot
              },
              radius: 300,
              zoom: 15,
              onchanged: function (currentLocation, radius, isMarkerDropped) {
                  var addressComponents = $(this).locationpicker('map').location.addressComponents;
                  updateControls(addressComponents);
              },
              inputBinding: {
                  latitudeInput: $('#latitude'),
                  longitudeInput: $('#longitude'),
                  radiusInput: $('#us3-radius'),
                  locationNameInput: $('#map_address')
              },
              enableAutocomplete: true,
              oninitialized: function (component) {
                  var addressComponents = $(component).locationpicker('map').location.addressComponents;
                  updateControls(addressComponents);
              }
          });
      }
      // Get Current location //
      $(document).on('click','.get-current-location',function(e){
          if (navigator.geolocation){
              navigator.geolocation.getCurrentPosition(showPosition);
          }else{
              x.innerHTML = "Geolocation is not supported by this mobile.";
          }
          /*    function showPosition(position){
          var lat=position.coords.latitude;
          var lot=position.coords.longitude;
          initMap(lat,lot);
          }*/
          function showPosition(position){
              location.latitude=position.coords.latitude;
              location.longitude=position.coords.longitude;
              initMap(location.latitude,location.longitude);
              var geocoder = new google.maps.Geocoder();
              var latLng = new google.maps.LatLng(location.latitude, location.longitude);
              if (geocoder) {
                  geocoder.geocode({ 'latLng': latLng}, function (results, status) {
                      if (status == google.maps.GeocoderStatus.OK) {
                          console.log(results);
                          $('#address').html(results[0].formatted_address);
                          var street = results[1].formatted_address;
                          var res = street.split("-");
                          $('#street').val(res[0]);
                          var country = results[5].formatted_address;
                          var city = res[1];
                          var areastr = results[2].formatted_address;
                          var ar = areastr.split("-");
                          var area = ar[0];
                          /* Country */
                          country=country.trim();
                          city=city.trim();
                          area=area.trim();
                          $("#fk_country_id").html("<option>"+country+"</option>");
                          $("#fk_city_id").html("<option>"+city+"</option>");
                          $("#fk_area_id").html("<option>"+area+"</option>");
                          var token = $("input[name='_token']").val();
                          $.ajax({
                              url: "<?php echo URL::to('/').'/register/getCurrentCountry'; ?>",
                              method: 'POST',
                              data: {country:country, _token:token},
                              success: function(data) {
                                  $("select[name='fk_country_id'").html('');
                                  $("select[name='fk_country_id'").html(data.options);
                                  fetch_current_city(data.pk_countries_id,city,area);
                              }
                          });
                      }
                      else {
                          $('#address').html('Geocoding failed: '+status);
                          console.log("Geocoding failed: " + status);
                      }
                  }); //geocoder.geocode()
              }
          } //showPosition
      });
      function fetch_current_city(countryid,city,area){
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/getCurrentCity'; ?>",
              method: 'POST',
              data: {fk_country_id:countryid, _token:token,fk_city_id:city},
              success: function(data) {
                  $("select[name='fk_city_id'").html('');
                  $("select[name='fk_city_id'").html(data.options);
                  fetch_current_area(data.fk_city_id,area);
              }
          });
      }
      function fetch_current_area(cityid,area){
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/getCurrentArea'; ?>",
              method: 'POST',
              data: {fk_city_id:cityid, _token:token,fk_area_id:area},
              success: function(data) {
                  $("select[name='fk_area_id'").html('');
                  $("select[name='fk_area_id'").html(data.options);
              }
          });
      }


      function add_users_form_roles(){
          var oFormData = $('#users_form').serializeArray();
          for (var i = 0; i < oFormData.length; i++){

              if (oFormData[i]['name'].indexOf('user_nationality') > -1)
              {
                  var FormElemant_Name = $( "select[name='"+oFormData[i]['name']+"']" ).attr('name');
              }else{
                  var FormElemant_Name = $( "input[name='"+oFormData[i]['name']+"']" ).attr('name');
              }
              var FormElemant = $( "input[name='"+oFormData[i]['name']+"']" );
              FormElemant.rules( "remove" );

              if(FormElemant_Name.indexOf('user_first_name') > -1){
                  FormElemant.rules( "add", {required: true, minlength: 3});
              }
              if(FormElemant_Name.indexOf('user_last_name') > -1){
                  FormElemant.rules( "add", {required: true, minlength: 3});
              }
              if(FormElemant_Name.indexOf('user_gender') > -1){
                  FormElemant.rules( "add", {required: true,});
              }
              if(FormElemant_Name.indexOf('user_designation') > -1){
                  FormElemant.rules( "add", {required: true,});
              }
              if(FormElemant_Name.indexOf('user_dob') > -1){
                  FormElemant.rules( "add", {required: true,});
              }
               if(FormElemant_Name.indexOf('user_mobile') > -1){
                    FormElemant.rules( "add", {required: true,minlength: 9});
                }
                if(FormElemant_Name.indexOf('user_nationality') > -1){
                    FormElemant.rules( "add", {required: true,});
                }
                if(FormElemant_Name.indexOf('user_email') > -1){
                    var ConfirmEmail = FormElemant_Name.replace("user_email", "user_email_confirmation");
                    FormElemant.rules( "add", {required: true,  equalTo:'[name="'+ConfirmEmail+'"]'});
                }
                if(FormElemant_Name.indexOf('user_email_confirmation') > -1){
                    var ConfirmEmail = FormElemant_Name.replace("user_email_confirmation", "user_email");
                    FormElemant.rules( "add", {required: true,  equalTo:'[name="'+ConfirmEmail+'"]'});
                }
                if(FormElemant_Name.indexOf('user_password') > -1){
                    var ConfirmPass = FormElemant_Name.replace("user_password", "user_password_confirmation");
                    FormElemant.rules( "add", {required: true,minlength: 6,  equalTo:'[name="'+ConfirmPass+'"]'});
                }
                if(FormElemant_Name.indexOf('user_password_confirmation') > -1){
                  var ConfirmPass = FormElemant_Name.replace("user_password_confirmation", "user_password");
                  FormElemant.rules( "add", {required: true,minlength: 6,  equalTo:'[name="'+ConfirmPass+'"]'});
                }
          }
      }

      function add_owners_form_roles(){
          var oFormData = $('#owners_form').serializeArray();
          for (var i = 0; i < oFormData.length; i++){

              if (oFormData[i]['name'].indexOf('owners_nationality') > -1)
              {
                  var FormElemant_Name = $( "select[name='"+oFormData[i]['name']+"']" ).attr('name');
              }else{
                  var FormElemant_Name = $( "input[name='"+oFormData[i]['name']+"']" ).attr('name');
              }
              var FormElemant = $( "input[name='"+oFormData[i]['name']+"']" );
              FormElemant.rules( "remove" );


              if(FormElemant_Name.indexOf('owners_name') > -1){
                  FormElemant.rules( "add", {required: true, minlength: 3});
              }
              if(FormElemant_Name.indexOf('owners_type') > -1){
                  FormElemant.rules( "add", {required: true});
              }
              if(FormElemant_Name.indexOf('owners_mobile') > -1){
                  FormElemant.rules( "add", {required: true});
              }
              if(FormElemant_Name.indexOf('owners_email') > -1){
                  FormElemant.rules( "add", {required: true});
              }
          }
      }

      function add_branches_form_roles(){
          var oFormData = $('#branches_form').serializeArray();
          for (var i = 0; i < oFormData.length; i++){

             if (oFormData[i]['name'].indexOf('branches_country') > -1)
              {
                  var FormElemant_Name = $( "select[name='"+oFormData[i]['name']+"']" ).attr('name');
              }else{
                  var FormElemant_Name = $( "input[name='"+oFormData[i]['name']+"']" ).attr('name');
              }
              var FormElemant = $( "input[name='"+oFormData[i]['name']+"']" );
              FormElemant.rules( "remove" );

              if(FormElemant_Name.indexOf('branches_name') > -1){
                  FormElemant.rules( "add", {required: true, minlength: 3});
              }
              if(FormElemant_Name.indexOf('branches_mobile') > -1){
                  FormElemant.rules( "add", {required: true});
              }
              if(FormElemant_Name.indexOf('branches_email') > -1){
                  FormElemant.rules( "add", {required: true});
              }
              if(FormElemant_Name.indexOf('branches_country') > -1){
                  FormElemant.rules( "add", {required: true});
              }
          }
      }



      $(document).ready(function () {
          $('#users_repeater').repeater({repeaters: [{
                  // (Required)
                  // Specify the jQuery selector for this nested repeater
                  selector: '.inner-repeater'
              }],
              show:function(){$(this).slideDown()},
              hide:function(e){confirm("Are you sure you want to delete this element?")&&$(this).slideUp(e)}
          });
          $('#investors_repeater').repeater({repeaters: [{
                  // (Required)
                  // Specify the jQuery selector for this nested repeater
                  selector: '.inner-repeater'
              }],
              show:function(){$(this).slideDown()},
              hide:function(e){confirm("Are you sure you want to delete this element?")&&$(this).slideUp(e)}
          });
          $('#branches_repeater').repeater({repeaters: [{
                  // (Required)
                  // Specify the jQuery selector for this nested repeater
                  selector: '.inner-repeater'
              }],
              show:function(){$(this).slideDown()},
              hide:function(e){confirm("Are you sure you want to delete this element?")&&$(this).slideUp(e)}
          });
          $('#upload_document_repeater').repeater({repeaters: [{
                  // (Required)
                  // Specify the jQuery selector for this nested repeater
                  selector: '.inner-repeater'
              }],
              show:function(){$(this).slideDown()},
              hide:function(e){confirm("Are you sure you want to delete this element?")&&$(this).slideUp(e)}
          });
          });       
          $("#users_form").validate({
              invalidHandler: function (e, r) {
                  console.log("users_form");
              }
          })
          $("#owners_form").validate({
              invalidHandler: function (e, r) {
                  console.log("owners_form");
              }
          })
          $("#branches_form").validate({
              invalidHandler: function (e, r) {
                  console.log("branches_form");
              }
          })
   
      setTimeout(add_users_form_roles, 1000);
      setTimeout(add_owners_form_roles, 1000);
      setTimeout(add_branches_form_roles, 1000);
  

$(document).ready( function () {
  $(document).on('click','.send-author',function(e){

    var button_name = $(this).attr('name');

    var FirstName_el_name = button_name.replace("authorization_name", "user_first_name");
    var ufname= $("input[name='"+FirstName_el_name+"']").val();
    $('#auth-new-username').html(ufname);

    var Ecommerce_el_name = button_name.replace("authorization_name", "auth_ecommerce");
    var Social_el_name = button_name.replace("authorization_name", "auth_social");
    //var eco= $("checkbox[name='"+Ecommerce_el_name+"']").val();
    $('#checked-auth-list').html("");
    $("input[name='"+Ecommerce_el_name+"[]']").each( function () {
      if (this.checked) {
          $('#checked-auth-list').append('<li><i class="fa fa-check-square-o" aria-hidden="true"></i>'+$(this).attr("title")+'</li>');
      }
    });
    $("input[name='"+Social_el_name+"[]']").each( function () {
      if (this.checked) {
          $('#checked-auth-list').append('<li><i class="fa fa-check-square-o" aria-hidden="true"></i>'+$(this).attr("title")+'</li>');
      }
    });


    var Auth_type_name = button_name.replace("authorization_name", "auth_type");
    var remove_user_name = button_name.replace("authorization_name", "remove_user");
    
   $(".pending").attr("auth_fild",Auth_type_name);
   $(".decline").attr("auth_fild",remove_user_name);
   $(".ceck-authorize").attr("auth_fild",Auth_type_name);
   });

   $(document).on('click','.ceck-authorize',function(e){
    $('.auth-alert-error').html('');
    var AuthorizedButton = $(this);
    var token = $("input[name='_token']").val();
    var username = $("input[name='auth-username']").val();
    var password = $("input[name='auth-password']").val();
    var auth_Type_name = AuthorizedButton.attr("auth_fild");
    var auth_Type_elem = $("input[name='"+auth_Type_name+"']");
    $.ajax({
      url: "<?php echo URL::to('/').'/register/authoriszation'; ?>",
      method: 'POST',
      data: { _token:token,username:username,password:password},
      success: function(data) {
        console.log(data);
        if (data == false) {
            $('.auth-alert-error').html('Invalid User Credential');
        }else{
          auth_Type_elem.attr("value","1");
          var FirstName_el_name = auth_Type_name.replace("auth_type", "user_first_name");
          var ufname= $("input[name='"+FirstName_el_name+"']").val();
          $('.auth-message').html('<div class="user-for-msg text-center"> <i class="fa fa-user-plus" aria-hidden="true"></i> The User '+ufname+' authorised successfully ..</div>');
          $('#exampleModal').modal('toggle');
        }
      }
      });
    });

    $(document).on('click','.decline',function(e){
    var AuthorizedButton = $(this);
    var auth_Type_name = AuthorizedButton.attr("auth_fild");
    var auth_Type_elem = $("[name='"+auth_Type_name+"']");
    auth_Type_elem.trigger( "click" );
    $('#exampleModal').modal('toggle');
    });

    $(document).on('click','.pending',function(e){
    var AuthorizedButton = $(this);
    var token = $("input[name='_token']").val();
    var username = $("input[name='auth-username']").val();
    var password = $("input[name='auth-password']").val();
    var auth_Type_name = AuthorizedButton.attr("auth_fild");
    var auth_Type_elem = $("input[name='"+auth_Type_name+"']");
    auth_Type_elem.attr("value","0");
    var AuthorizedBtnName=$(this).attr('auth_fild');
    var FirstName_el_name = AuthorizedBtnName.replace("auth_type", "user_first_name");
    var ufname= $("input[name='"+FirstName_el_name+"']").val();
    $('.auth-message').html('<div class="user-for-msg text-center"> <i class="fa fa-user" aria-hidden="true"></i> The User '+ufname+' not authorised yet. User will goes to pending status</div>');
    $('#exampleModal').modal('toggle');
   });


  $(document).on('click','.permission_type',function(e){
  var type = $(this).val();
  var El_name = $(this).attr("name");
  var Eco_el_name = El_name.replace("permission_type", "auth_ecommerce");
  var Soc_el_name = El_name.replace("permission_type", "auth_social");
  $("[name='"+El_name+"']").prop('checked', false);
  $("[name='"+Eco_el_name+"']").prop('checked', false);
  $("[name='"+Soc_el_name+"']").prop('checked', false);
  if(type==1){
    $("[name='"+El_name+"']").prop('checked', true);
    $("[name='"+Eco_el_name+"']").prop('checked', true);
    $("[name='"+Soc_el_name+"']").prop('checked', true);
  }else if(type==2){
    $(this).prop('checked', true);
    $("[name='"+Eco_el_name+"']").prop('checked', true);
  }else{
    $(this).prop('checked', true);
    $("[name='"+Soc_el_name+"']").prop('checked', true);
  }
  });

  /*Country Code*/
  $(document).on('keyup','.usermobile',function(e){
    var El_name = $(this).attr("name");
    var E_el_mobile = El_name.replace("user_mobile", "user_mobile_code");
    var code=$('.selected-dial-code').html();
    $("[name='"+E_el_mobile+"']").val(code);
  }); 


  // DropZone

  if(typeof Dropzone != 'undefined')
    {
        var images = new Array();
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#myDropzone", {
            url: "docuemnt",
            maxFileSize: 50,
            maxFilesize: 6, // MB
            acceptedFiles: "image/*",
            addRemoveLinks: true,
            removedfile: function(file){
            console.log(file.newname);
            var token = $("input[name='_token']").val();
              $.ajax({
                url: "<?php echo URL::to('/').'/register/dlt_docuemnt'; ?>",
                method: 'POST',
                data: { _token:token,image:file.newname},
                success: function(data) {
                  if(data=='true'){
                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                  }else{
                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                  }
                }
              });

            },
            success: function(file, response){
              console.log(response);
              file.newname =response;
              file.previewElement.querySelector("img").alt = response;
              file.previewElement.querySelector("[data-dz-name]").innerHTML = response;
          
            }
        });

    }

});
  </script>
  <script src="{{ URL::asset('front_end/js/dropzone.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/prism.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/intlTelInput.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/defaultCountryIp.js') }}"></script>
  </body>
  </html>

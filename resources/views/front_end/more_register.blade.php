@include('front_end.modules.header-hero-nav')
@include('front_end.modules.hero-header')
<link rel="stylesheet" href="{{ URL::asset('front_end/css/prism.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/isValidNumber.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/reg-wizard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker3.min.css') }}">
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

                <a   href="@if($complete_step > 1 && $complete_step < 4) {{url('/register')}} @else # @endif">
                  <div class="f1-step <?php if(@$step==1) echo 'active'; elseif(@$step>1) echo 'activated'; else echo '';?>">
                    <div class="f1-step-icon"><i class="fa fa-copyright" aria-hidden="true"></i></div>
                    <p>Company Information</p>
                  </div>
                </a>
                <a   href="@if($complete_step > 2 && $complete_step < 4) {{url('/register/licence')}} @else # @endif">
                <div class="f1-step <?php if(@$step==2) echo 'active'; elseif(@$step>2) echo 'activated';else echo '';?>">
                  <div class="f1-step-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                  <p>Licence </br>Information</p>
                </div>
                </a>
                <a   href="@if($complete_step > 3 && $complete_step < 4) {{url('/register/location')}} @else # @endif">
                <div class="f1-step <?php if(@$step==3) echo 'active'; elseif(@$step>3) echo 'activated';else echo '';?>">
                  <div class="f1-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <p>Location</p>
                </div>
                </a>
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
                  <div class="f1-step-icon"><i class="fa fa-upload" aria-hidden="true"></i></div>
                  <p>Upload Documents</p>
                </div>
                </a>
                <a   href="@if($step > 9) {{url('/register/location')}} @else # @endif">

                <div class="f1-step <?php if(@$step==9) echo 'active'; elseif(@$step>9) echo 'activated';else echo '';?>">
                  <div class="f1-step-icon"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                  <p>Verifiy</p>
                </div>
                </a>
                <div class="f1-step <?php if(@$step==10) echo 'active'; elseif(@$step>10) echo 'activated';else echo '';?>">
                  <div class="f1-step-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                  <p>Payment</p>
                </div>
              </div>


              <fieldset class="users"  @if($step==5) style="display:block" @else  style="display:none !important" @endif >
                <div class="lg-reg reg-form">
                  {{ Form::open(array('url' => 'register/post', 'enctype' => 'multipart/form-data')) }}
                  <div id="users_repeater">
                    <div data-repeater-list="">
                      <div data-repeater-item="">
                  <input type="hidden" name="tab" value="users">
                  <div class="user-for-msg text-center mt-2 mb-4 border-0">
                    <!-- <i class="fa fa-info-circle" aria-hidden="true"></i> -->
                    ( You can add multiple users in your account with unlimited facilities for each user or you can specify the area where your user can work on it  …  If not you can <b>skip</b> from this step ) </div>
                  <div class="add-more-user">
                    <div class="row mt-3">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_userimage" class="field-label">Upload Your Photo</label>
                          <div class="custom-file upload-reg">
                            <input type="file" class="custom-file-input form-control field-control" id="user_userimage" name="user_userimage[]">
                            <label class="custom-file-label" for="user_userimage">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_first_name" class="field-label">First Name:</label>
                          <input type="text" class="form-control field-control" name="user_first_name[]" id="user_first_name" value="{{old('user_first_name')}}"  placeholder="" data-fv-field="user_first_name">
                          @if ($errors->first('user_first_name'))
                            <div class="alert-error"> {{ $errors->first('user_first_name') }} </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_last_name" class="field-label">Last Name:</label>
                          <input type="text" class="form-control field-control" name="user_last_name[]" id="user_last_name" value="{{old('user_last_name')}}" placeholder="" data-fv-field="user_last_name">
                          @if ($errors->first('user_last_name'))
                            <div class="alert-error"> {{ $errors->first('user_last_name') }} </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="gender" class="field-label">Gender : </label>
                          <div class="custom-radio-wrap">
                            <div class="custom-control custom-radio mr-3">
                              <input type="radio" id="user_gender" name="user_gender[]" class="custom-control-input" value="Male">
                              <label class="custom-control-label" for="gender">Male</label>
                            </div>
                            <div class="custom-control custom-radio pull-right">
                              <input type="radio" id="user_gender1" name="user_gender[]" class="custom-control-input" value="Female">
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
                          <input type="text" class="form-control field-control" name="user_designation[]" id="user_designation" value="{{old('user_designation')}}" placeholder="" data-fv-field="user_designation">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_dob" class="field-label">DOB:</label>
                          <input type="text" class="form-control field-control datepicker" name="user_dob[]" id="user_dob" value="" placeholder="" data-fv-field="user_dob">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_mobile" class="field-label">Mobile Number:</label>
                          <input type="text" class="form-control field-control mobile" name="user_mobile[]" id="user_mobile" value="{{old('user_mobile')}}" placeholder="" data-fv-field="user_mobile">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_phone" class="field-label">Landline Number:</label>
                          <input type="text" class="form-control field-control" name="user_phone[]" id="user_phone" value="{{old('user_phone')}}" placeholder="" data-fv-field="user_phone">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_nationality" class="field-label">Nationality:</label>
                          <select class="form-control js-example-basic-single" id="user_nationality" name="user_nationality[]"  title="">
                            <option value="">- Select -</option>

                            @if(!empty($countries))
                              @foreach($countries as $key => $value)

                                <option value="{{ $key }}" <?php if(old('user_nationality')==$key) echo "selected"; ?>>{{ $value }}</option>

                              @endforeach
                            @endif

                          </select>
                          @if ($errors->first('nationality'))
                            <div class="alert-error"> {{ $errors->first('nationality') }} </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_email" class="field-label">E-mail:</label>
                          <input type="email" class="form-control field-control" name="user_email[]" id="user_email" value="{{old('user_email')}}" placeholder="" data-fv-field="user_email">
                          @if ($errors->first('email'))
                            <div class="alert-error"> {{ $errors->first('email') }} </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_email_confirmation" class="field-label">Confirm E-mail:</label>
                          <input type="email" class="form-control field-control" name="user_email_confirmation" id="user_email_confirmation" value="{{old('user_email_confirmation')}}" placeholder="" data-fv-field="user_email_confirmation">
                          @if ($errors->first('user_email_confirmation'))
                            <div class="alert-error"> {{ $errors->first('user_email_confirmation') }} </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_password" class="field-label">Password:</label>
                          <input type="password" class="form-control field-control" name="user_password[]" id="user_password" value="{{old('user_password')}}" placeholder="" data-fv-field="password">
                          @if ($errors->first('user_password'))
                            <div class="alert-error"> {{ $errors->first('user_password') }} </div>
                          @endif </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_password_confirmation" class="field-label">Confirm Password:</label>
                          <input type="password" class="form-control field-control" name="user_password_confirmation" id="user_password_confirmation" value="{{old('user_password_confirmation')}}" placeholder="" data-fv-field="confirmpassword">
                          @if ($errors->first('user_password_confirmation'))
                            <div class="alert-error"> {{ $errors->first('user_password_confirmation') }} </div>
                          @endif </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="lg-reg reg-form col-md-12">
                        <div class="full-wrap user-action-part mt-4">
                          <div class="label-head"><img src="{{ URL::asset('front_end/images/icon/allow.png') }}" class="mr-1"><span class="d-inline-block">This user authorized to :</span></div>
                          <div class="full-wrap mt-2">
                            <div class="custom-control custom-radio d-inline-block acc-choose mt-2">
                              <input type="radio" id="permission_type_1" name="permission_type" class="custom-control-input permission_type" value="1">
                              <label class="custom-control-label" for="permission_type_1">Delegation of using all the businessid.net functions, facilities and actions.</label>
                            </div>
                            <div class="full-wrap text-left"><span class="or-box-for">OR</span></div>
                          </div>
                          <div class="full-wrap mt-2">
                            <div class="custom-control custom-radio d-inline-block acc-choose mt-2">
                              <input type="radio" id="permission_type_2" name="permission_type" class="custom-control-input permission_type" value="2">
                              <label class="custom-control-label" for="permission_type_2">All E-commerce:</label>
                            </div>
                            <ul class="list-for-user">
                              <li>
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="products" name="products" type="checkbox" class="checkboxes">
                                  <label for="products">Add product / Delete product / Manage Product / Edit product… etc.</label>
                                </div>
                              </li>
                              <li>
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="orders" type="checkbox" name="orders" class="checkboxes">
                                  <label for="orders">Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.</label>
                                </div>
                              </li>
                              <li>
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="buying" type="checkbox" name="buying" class="checkboxes">
                                  <label for="buying">Buy from supplier /   product / Edit the buying order… etc. </label>
                                </div>
                              </li>
                              <li>
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="tender" type="checkbox" name="tender" class="checkboxes">
                                  <label for="tender">Create tender / accept tender / Delete tender / Edit tender… etc. </label>
                                </div>
                              </li>
                              <li>
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="jobs" type="checkbox" name="jobs" class="checkboxes">
                                  <label for="jobs">Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.</label>
                                </div>
                              </li>
                              <li class="ml-3">
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="advertising" type="checkbox" name="advertising" class="checkboxes">
                                  <label for="advertising">Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from  businessid.net / Edit your advertising package</label>
                                </div>
                              </li>
                            </ul>
                            <div class="full-wrap text-left"><span class="or-box-for">OR</span></div>
                          </div>
                          <div class="full-wrap mt-2">
                            <div class="custom-control custom-radio d-inline-block acc-choose mt-2 ml-1">
                              <input type="radio" id="permission_type_3" name="permission_type" class="custom-control-input permission_type" value="3">
                              <label class="custom-control-label" for="permission_type_3">All Social Media</label>
                            </div>
                            <ul class="list-for-user">
                              <li class="ml-3">
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="social" type="checkbox" name="social" class="checkboxes">
                                  <label for="social">Post video, Post photo, Follow, Un Follow, Change the name of company / background photo / Profile photo / Write comment / Like post / Share / Delete all type of post and comments / Edit all the posts in profile and in newsfeed… etc.</label>
                                </div>
                              </li>
                              <li>
                                <div class="checkbox-edit checkbox-primary">
                                  <input id="chat" type="checkbox" name="chat" class="checkboxes">
                                  <label for="chat">Chat / Send message</label>
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
                      <a href="javascript:void(0);" data-repeater-delete class="btn switch-acc"><i class="fa fa-envelope-o" aria-hidden="true"></i> Delete</a>
                    </div>
                  </div>
                      </div>
                    </div>

                  </div>
                  <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                  {{ Form::close() }}

                </div>
              </fieldset>
              <fieldset class="investors"  @if($step==6) style="display:block" @else  style="display:none !important" @endif>
                {{ Form::open(array('url' => 'register/post', 'enctype' => 'multipart/form-data')) }}
                <div id="investors_repeater">
                  <div data-repeater-list="">
                    <div data-repeater-item="">
                <input type="hidden" name="tab" value="investors">
                <div class="lg-reg reg-form">
                  <div class="add-more-investor">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_name" class="field-label">Full Name:</label>
                          <input type="email" class="form-control field-control" name="investor_name[]" id="investor_name" value="{{old('investor_name')}}" placeholder="" data-fv-field="investor_name">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_type" class="field-label">Type:</label>
                          <select class="form-control js-example-basic-single" name="investor_type[]" id="investor_type">
                            <option value="">Select Type</option>
                            <option value="1">Local Sponsor</option>
                            <option value="2">Owner</option>
                            <option value="3">Partner</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="share" class="field-label">Percentage Of Share</label>
                          <input type="text" class="form-control field-control" name="share[]" id="share" value="{{old('share')}}" placeholder="" data-fv-field="share">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_nationality" class="field-label">Nationality:</label>
                          <select class="form-control js-example-basic-single" id="investor_nationality" name="investor_nationality[]"  title="">
                            <option value="">- Select -</option>

                            @if(!empty($countries))
                              @foreach($countries as $key => $value)

                                <option value="{{ $key }}" <?php if(old('investor_nationality')==$key) echo "selected"; ?>>{{ $value }}</option>

                              @endforeach
                            @endif

                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_mobile" class="field-label">Mobile Number:</label>
                          <input type="text" class="form-control field-control mobile" name="investor_mobile[]" id="investor_mobile" value="{{old('investor_mobile')}}" placeholder="" data-fv-field="investor_mobile">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_email" class="field-label">E-mail:</label>
                          <input type="email" class="form-control field-control" name="investor_email[]" id="investor_email" value="{{old('investor_email')}}" placeholder="" data-fv-field="investor_email">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_id_no" class="field-label">ID No:</label>
                          <input type="text" class="form-control field-control" name="investor_id_no[]" id="investor_id_no" value="{{old('investor_id_no')}}" placeholder="" data-fv-field="investor_id_no">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="investor_image" class="field-label">Upload Your ID</label>
                          <div class="custom-file upload-reg">
                            <input type="file" class="custom-file-input form-control field-control" id="investor_image" name="investor_image[]">
                            <label class="custom-file-label" for="investor_image">Choose file</label>
                            <span class="text-muted">*This will not be share with  anyone </span> </div>
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
                      <a href="javascript:void(0);" data-repeater-create="" class="switch-acc add-user">Add</a>
                    </div>
                  </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
                </div>
                {{ Form::close() }}
              </fieldset>
              <fieldset class="branches"  @if($step==7) style="display:block" @else  style="display:none !important" @endif>
                {{ Form::open(array('url' => 'register/post', 'enctype' => 'multipart/form-data')) }}
                <div id="branches_repeater">
                  <div data-repeater-list="">
                    <div data-repeater-item="">
                <input type="hidden" name="tab" value="branches">
                <div class="lg-reg reg-form">
                  <div class="add-more-branch">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_name" class="field-label">Branch Name:</label>
                          <input type="text" class="form-control field-control" name="branch_name[]" id="branch_name" value="{{old('branch_name')}}" placeholder="" data-fv-field="branch_name">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_phone" class="field-label">Landline Number:</label>
                          <input type="text" class="form-control field-control" name="branch_phone[]" id="branch_phone" value="{{old('branch_phone')}}" placeholder="" data-fv-field="branch_phone">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_mobile" class="field-label">Mobile Number:</label>
                          <input type="text" class="form-control field-control mobile" name="branch_mobile[]" id="branch_mobile" value="{{old('branch_mobile')}}" placeholder="" data-fv-field="branch_mobile">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_fax" class="field-label">Fax Number:</label>
                          <input type="text" class="form-control field-control" name="branch_fax[]" id="branch_fax" value="{{old('branch_fax')}}" placeholder="" data-fv-field="branch_fax">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_email" class="field-label">Email:</label>
                          <input type="email" class="form-control field-control" name="branch_email[]" id="branch_email" value="{{old('branch_email')}}" placeholder="" data-fv-field="branch_email">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_city" class="field-label">Location:</label>
                          <select class="form-control js-example-basic-single" id="branch_city" name="branch_city[]" title="Select Current Location">
                            <option value="">Select Location</option>
                            <option value="Dubai" <?php if(old('branch_city')=="Dubai") echo "selected"; ?>>Dubai</option>
                            <option value="Sharjah" <?php if(old('branch_city')=="Sharjah") echo "selected"; ?>>Sharjah</option>
                            <option value="Abu Dhabi" <?php if(old('branch_city')=="Abu Dhabi") echo "selected"; ?>>Abu Dhabi</option>
                            <option value="Ras Al Khaimah" <?php if(old('branch_city')=="Ras Al Khaimah") echo "selected"; ?>>Ras Al Khaimah</option>
                            <option value="Fujairah" <?php if(old('branch_city')=="Fujairah") echo "selected"; ?>>Fujairah</option>
                            <option value="Ajman" <?php if(old('branch_city')=="Ajman") echo "selected"; ?>>Ajman</option>
                            <option value="Umm Al Qawain" <?php if(old('branch_city')=="Umm Al Qawain") echo "selected"; ?>>Umm Al Qawain</option>
                            <option value="Al Ain" <?php if(old('branch_city')=="Al Ain") echo "selected"; ?>>Al Ain</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="branch_address" class="field-label">Branch Address:</label>
                          <textarea class="form-control" name="branch_address[]" id="branch_address" placeholder="">{{old('branch_address')}}</textarea>
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
                      <a href="javascript:void(0);" data-repeater-create="" class="switch-acc add-user">Add</a>
                    </div>
                  </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
                    </div>
                {{ Form::close() }}
              </fieldset>
              <fieldset class="upload_document" @if($step==8) style="display:block" @else  style="display:none !important" @endif >
                {{ Form::open(array('url' => 'register/post', 'enctype' => 'multipart/form-data')) }}
                <div id="upload_document_repeater">
                  <div data-repeater-list="">
                    <div data-repeater-item="">
                <div class="lg-reg reg-form">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="company_logo" class="field-label">Upload Logo</label>
                        <div class="custom-file upload-reg">
                          <input type="file" class="custom-file-input form-control field-control" id="company_logo" name="company_logo">
                          <label class="custom-file-label" for="company_logo">Choose file</label>
                        </div>
                        <a href="javascript:void(0);" data-repeater-delete class="btn switch-acc"><i class="fa fa-envelope-o" aria-hidden="true"></i> Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                      <a href="javascript:void(0);" data-repeater-create="" class="switch-acc add-user">Add</a>
                    </div>
                  </div>

                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
                    </div>
                {{ Form::close() }}
              </fieldset>
              <fieldset class="verify" @if($step==9) style="display:block" @else  style="display:none !important" @endif >
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
                  <button type="button" class="btn btn-next">Next</button>
                </div>
              </fieldset>
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
          getCategory($("#category").val(),<?php echo @old('activity'); ?>);
          $('#category').change(function(e) {
              getCategory(this.value);
          });
          getCity($("#fk_country_id").val(),<?= @old('fk_city_id'); ?>);
          $('#fk_country_id').change(function(e) {
              getCity(this.value,);
          });
          getArea($("#fk_city_id").val(),<?= @old('fk_area_id'); ?>);
          $('#fk_city_id').change(function(e) {
              getArea(this.value,);
          });
      });
      function getCategory(category,activity='') {
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/selectActivities'; ?>",
              method: 'POST',
              data: {category:category, _token:token,activity:activity},
              success: function(data) {
                  //alert(data);
                  $("select[name='activity'").html('');
                  $("select[name='activity'").html(data.options);
              }
          });
      }
      function getCity(countryid,cityid='') {
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/selectCities'; ?>",
              method: 'POST',
              data: {fk_country_id:countryid, _token:token,fk_city_id:cityid},
              success: function(data) {
                  $("select[name='fk_city_id'").html('');
                  $("select[name='fk_city_id'").html(data.options);
              }
          });
      }
      function getArea(cityid,areaid='') {
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo URL::to('/').'/register/selectAreas'; ?>",
              method: 'POST',
              data: {fk_city_id:cityid, _token:token,fk_area_id:areaid},
              success: function(data) {
                  $("select[name='fk_area_id'").html('');
                  $("select[name='fk_area_id'").html(data.options);
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





  </script>

  <script src="{{ URL::asset('front_end/js/prism.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/intlTelInput.js') }}"></script>
  <script src="{{ URL::asset('front_end/js/defaultCountryIp.js') }}"></script>
  <script type="text/javascript">
  </script>
</body>
</html>
@include('front_end.modules.header-hero-nav')
@include('front_end.modules.hero-header')
<link rel="stylesheet" href="{{ URL::asset('front_end/css/prism.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/isValidNumber.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/reg-wizard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker3.min.css') }}">
<style type="text/css">
    .store-cat-nav {
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
                                        <div class="f1-progress-line" data-now-value="6" data-number-of-steps="4"
                                             style="width: 6%;"></div>
                                    </div>

                                    <a href="@if($complete_step > 0) {{url('/register/company')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 1) echo 'active'; elseif (@$step > 1) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-copyright" aria-hidden="true"></i>
                                            </div>
                                            <p>Company Information</p>
                                        </div>
                                    </a>
                                    <a href="@if($complete_step > 1) {{url('/register/licence')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 2) echo 'active'; elseif (@$step > 2) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-file-text-o"
                                                                         aria-hidden="true"></i></div>
                                            <p>Licence </br>Information</p>
                                        </div>
                                    </a>
                                    <a href="@if($complete_step > 2) {{url('/register/location')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 3) echo 'active'; elseif (@$step > 3) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></div>
                                            <p>Location</p>
                                        </div>
                                    </a>
                                    <a href="@if($complete_step > 3) {{url('/register/qregister')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 4) echo 'active'; elseif (@$step > 4) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                                            </div>
                                            <p>Quick Registration</p>
                                        </div>
                                    </a>

                                    <a href="@if($step > 5) {{url('/register/location')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 5) echo 'active'; elseif (@$step > 5) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-user-plus" aria-hidden="true"></i>
                                            </div>
                                            <p>Create Users</p>
                                        </div>
                                    </a>
                                    <a href="@if($step > 6) {{url('/register/location')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 6) echo 'active'; elseif (@$step > 6) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-money" aria-hidden="true"></i>
                                            </div>
                                            <p>Owner / Share Holder Information</p>
                                        </div>
                                    </a>
                                    <a href="@if($step > 7) {{url('/register/location')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 7) echo 'active'; elseif (@$step > 7) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-sitemap" aria-hidden="true"></i>
                                            </div>
                                            <p>Branches</p>
                                        </div>
                                    </a>
                                    <a href="@if($step > 8) {{url('/register/location')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 8) echo 'active'; elseif (@$step > 8) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-upload" aria-hidden="true"></i>
                                            </div>
                                            <p>Upload Documents</p>
                                        </div>
                                    </a>
                                    <a href="@if($step > 9) {{url('/register/location')}} @else # @endif">
                                        <div class="f1-step <?php if (@$step == 9) echo 'active'; elseif (@$step > 9) echo 'activated'; else echo '';?>">
                                            <div class="f1-step-icon"><i class="fa fa-search-plus"
                                                                         aria-hidden="true"></i></div>
                                            <p>Verifiy</p>
                                        </div>
                                    </a>
                                    <div class="f1-step <?php if (@$step == 10) echo 'active'; elseif (@$step > 10) echo 'activated'; else echo '';?>">
                                        <div class="f1-step-icon"><i class="fa fa-credit-card" aria-hidden="true"></i>
                                        </div>
                                        <p>Payment</p>
                                    </div>
                                </div>
                                <fieldset
                                        class="company_info" <?php if (@$step == 1) echo 'style="display:block"'; else echo 'style="display:none !important"';?>>
                                    {{ Form::open(array('url' => 'register/insert_company', 'id' => 'main_user_form', 'enctype' => 'multipart/form-data')) }}
                                    <input type="hidden" name="tab" value="company_info">
                                    <div class="lg-reg reg-form">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_name" class="field-label">Company Name:</label>
                                                    <input type="text" class="form-control field-control"
                                                           name="company_name"
                                                           id="company_name"
                                                           value="@if(isset($company_info['name'])){{$company_info['name']}}@else{{old('company_name')}}@endif"
                                                           placeholder="" data-fv-field="name">
                                                    @if ($errors->first('company_name'))
                                                        <div class="alert-error">
                                                            {{ $errors->first('company_name') }}
                                                        </div>
                                                    @endif </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_category" class="field-label">Main
                                                        Activity:</label>
                                                    <select class="form-control js-example-basic-single"
                                                            id="company_category"
                                                            name="company_category" title="">
                                                        <option value="">- Select -</option>
                                                        @if(!empty($categories))
                                                            @foreach($categories as $val)
                                                                <option value="{{ $val->pk_users_category_id }}"
                                                                        @if(isset($company_info['category'])) @if($company_info['category'] == $val->pk_users_category_id ) selected
                                                                        @endif @else  @if(old('company_category')== $val->pk_users_category_id) selected @endif @endif >{{ $val->category_name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @if ($errors->first('company_category'))
                                                        <div class="alert-error">
                                                            {{ $errors->first('company_category') }}
                                                        </div>
                                                    @endif </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_activity" class="field-label">Sub
                                                        Activity:</label>
                                                    <select class="form-control js-example-basic-single"
                                                            id="company_activity"
                                                            name="company_activity" multiple="">
                                                        <option value="">- Select -</option>
                                                        @if(!empty($activities))
                                                            @foreach($activities as $value)
                                                                <option value="{{ $value }}" <?php if (old('company_activity') == $value) echo "selected"; ?>>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @if ($errors->first('company_activity'))
                                                        <div class="alert-error">
                                                            {{ $errors->first('company_activity') }}
                                                        </div>
                                                    @endif </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_email" class="field-label">E-mail:</label>
                                                    <input type="company_email" class="form-control field-control"
                                                           id="company_email"
                                                           name="company_email"
                                                           value="@if(isset($company_info['email'])){{$company_info['email']}}@else{{old('company_email')}}@endif">
                                                    @if ($errors->first('company_email'))
                                                        <div class="alert-error">
                                                            {{ $errors->first('company_email') }}
                                                        </div>
                                                    @endif </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_mobile" class="field-label">Mobile
                                                        Number:</label>
                                                    <input type="text" class="form-control field-control mobile"
                                                           name="company_mobile" id="company_mobile"
                                                           value="@if(isset($company_info['mobile'])){{$company_info['mobile']}}@else{{old('company_mobile')}}@endif "
                                                           placeholder="" data-fv-field="company_mobile">
                                                    @if ($errors->first('company_mobile'))
                                                        <div class="alert-error">
                                                            {{ $errors->first('company_mobile') }}
                                                        </div>
                                                    @endif </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_phone" class="field-label">Landline
                                                        Number:</label>
                                                    <input type="text" class="form-control field-control mobile"
                                                           name="company_phone" id="company_phone"
                                                           value="@if(isset($company_info['phone'])){{$company_info['phone']}}@else{{old('company_phone')}}@endif"
                                                           placeholder="local number" data-fv-field="company_phone">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="company_logo" class="field-label">Upload Company
                                                        Logo</label>
                                                    <div class="custom-file upload-reg">
                                                        <input type="file"
                                                               class="custom-file-input form-control field-control"
                                                               id="company_logo" name="company_logo">
                                                        <label class="custom-file-label" for="company_logo">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="full-wrap super-user-wrap">
                                            <div class="full-wrap"><img
                                                        src="{{ URL::asset('front_end/images/icon/super.png') }}"
                                                        class="d-inline-block"> <span
                                                        class="super-user d-inline-block align-middle">Main User Details</span>
                                            </div>


                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_first_name" class="field-label">Upload Your
                                                            Photo</label>
                                                        <div class="custom-file upload-reg">
                                                            <input type="file"
                                                                   class="custom-file-input form-control field-control"
                                                                   name="company_user_image">
                                                            <label class="custom-file-label" for="company_user_image">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_first_name" class="field-label">First
                                                            Name:</label>
                                                        <input type="text" class="form-control field-control"
                                                               name="company_user_first_name"
                                                               value="@if(isset($company_user_info['first_name'])){{$company_user_info['first_name']}}@else{{old('company_user_first_name')}}@endif"
                                                               placeholder="" data-fv-field="company_user_first_name">
                                                        @if ($errors->first('company_user_first_name'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_first_name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_last_name" class="field-label">Last
                                                            Name:</label>
                                                        <input type="text" class="form-control field-control"
                                                               name="company_user_last_name"
                                                               value="@if(isset($company_user_info['last_name'])){{$company_user_info['last_name']}}@else{{old('company_user_last_name')}}@endif"
                                                               placeholder="" data-fv-field="company_user_last_name">
                                                        @if ($errors->first('company_user_last_name'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_last_name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="field-label">Gender : </label>
                                                        <div class="custom-radio-wrap">
                                                            <div class="custom-control custom-radio mr-3">
                                                                <input type="radio" id="company_user_gender"
                                                                       name="company_user_gender"
                                                                       class="custom-control-input" value="Male"
                                                                       @if(isset($company_user_info['gender'])) @if($company_user_info['gender'] == "Male") checked
                                                                       @endif @else  @if(old('company_user_gender')== "Male") checked @endif @endif >
                                                                <label class="custom-control-label"
                                                                       for="company_user_gender">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio pull-right">
                                                                <input type="radio" id="company_user_gender1"
                                                                       name="company_user_gender"
                                                                       class="custom-control-input" value="Female"
                                                                       @if(isset($company_user_info['gender'])) @if($company_user_info['gender'] == "Female") checked
                                                                       @endif @else @if(old('company_user_gender') == "Female") checked @endif @endif >
                                                                <label class="custom-control-label"
                                                                       for="company_user_gender1">Female</label>
                                                            </div>
                                                        </div>
                                                        @if ($errors->first('company_user_gender'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_gender') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_designation" class="field-label">Designation:</label>
                                                        <input type="text" class="form-control field-control"
                                                               name="company_user_designation"
                                                               value="@if(isset($company_user_info['designation'])){{$company_user_info['designation']}}@else{{old('company_user_designation')}}@endif"
                                                               placeholder="" data-fv-field="company_designation">
                                                        @if ($errors->first('company_user_designation'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_designation') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_dob" class="field-label">DOB:</label>
                                                        <input type="text" class="form-control field-control"
                                                               name="company_user_dob"
                                                               value="@if(isset($company_user_info['birthday'])){{$company_user_info['birthday']}}@else{{old('company_user_dob')}}@endif"
                                                               placeholder="" data-fv-field="company_user_dob">
                                                        @if ($errors->first('company_user_dob'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_dob') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_mobile" class="field-label">Mobile
                                                            Number:</label>
                                                        <input type="text" class="form-control field-control mobile"
                                                               name="company_user_mobile"
                                                               value="@if(isset($company_user_info['mobile'])){{$company_user_info['mobile']}}@else{{old('company_user_mobile')}}@endif"
                                                               placeholder="" data-fv-field="company_mobile">
                                                        @if ($errors->first('company_user_mobile'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_mobile') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_phone" class="field-label">Landline
                                                            Number:</label>
                                                        <input type="text" class="form-control field-control mobile"
                                                               name="company_user_phone"
                                                               value="@if(isset($company_user_info['phone'])){{$company_user_info['phone']}}@else{{old('company_user_phone')}}@endif"
                                                               placeholder="local number" data-fv-field="company_phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_nationality" class="field-label">Nationality:</label>
                                                        <select class="form-control js-example-basic-single"
                                                                name="company_user_nationality"
                                                                title="">
                                                            <option value="">- Select -</option>
                                                            @if(!empty($countries))
                                                                @foreach($countries as $val)
                                                                    <option value="{{ $val->pk_countries_id }}"
                                                                            @if(isset($company_user_info['nationality'])) @if($company_user_info['nationality'] == $val->pk_countries_id ) selected
                                                                            @endif @else  @if(old('company_user_nationality')== $val->pk_countries_id) selected @endif @endif >{{ $val->name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        @if ($errors->first('company_user_nationality'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_nationality') }}
                                                            </div>
                                                        @endif </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_email"
                                                               class="field-label">E-mail:</label>
                                                        <input type="email" class="form-control field-control"
                                                               name="company_user_email"
                                                               value="@if(isset($company_user_info['email'])){{$company_user_info['email']}}@else{{old('company_user_email')}}@endif"
                                                               placeholder="" data-fv-field="company_user_email">
                                                        @if ($errors->first('company_user_email'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_email') }}
                                                            </div>
                                                        @endif </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_email_confirmation"
                                                               class="field-label">Confirm
                                                            E-mail:</label>
                                                        <input type="email" class="form-control field-control"
                                                               name="company_user_email_confirmation"
                                                               value="@if(isset($company_user_info['email'])){{$company_user_info['email']}}@else{{old('company_user_email_confirmation')}}@endif"
                                                               placeholder=""
                                                               data-fv-field="company_user_email_confirmation">
                                                        @if ($errors->first('company_user_email_confirmation'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_email_confirmation') }}
                                                            </div>
                                                        @endif </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_password"
                                                               class="field-label">Password:</label>
                                                        <input type="password" class="form-control field-control"
                                                               name="company_user_password" value="" placeholder=""
                                                               data-fv-field="company_user_password">
                                                        @if ($errors->first('company_user_password'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_password') }}
                                                            </div>
                                                        @endif </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="company_user_password_confirmation"
                                                               class="field-label">Confirm
                                                            Password:</label>
                                                        <input type="password" class="form-control field-control"
                                                               name="company_user_password_confirmation" value=""
                                                               placeholder="" data-fv-field="confirmpassword">
                                                        @if ($errors->first('company_user_password_confirmation'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('company_user_password_confirmation') }}
                                                            </div>
                                                        @endif </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-9 text-center mx-auto note-super">
                                                    <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                                    <p>This user has full limit to use all facilities and functions in
                                                        your company account in Businessid.net. In addition he can add
                                                        and manage sub user who can manage your company account. </p>
                                                    <p>Businessid.net will generate a personal account for this
                                                        user. </p>
                                                </div>
                                                <a name="remove_user" href="javascript:void(0);" data-repeater-delete
                                                   class="btn"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="submit" class="btn">Next</button>
                                    </div>
                                    {{ Form::close() }}
                                </fieldset>
                                <fieldset
                                        class="licence" <?php if (@$step == 2) echo 'style="display:block"'; else echo 'style="display:none !important"';?>>
                                    {{ Form::open(array('url' => 'register/insert_licence', 'enctype' => 'multipart/form-data')) }}
                                    <div class="lg-reg reg-form pb-5">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="licence_legal_status" class="field-label">Legal
                                                        Status:</label>
                                                    <select class="form-control js-example-basic-single"
                                                            id="licence_legal_status" name="licence_legal_status">
                                                        <option value="">Select Legal Status</option>
                                                        @if(!empty($legalstatus))
                                                            @foreach($legalstatus as  $value)
                                                                <option value="{{ $value->pk_users_legal_status_id}}"
                                                                        @if(isset($licence_info['legal_status'])) @if($licence_info['legal_status'] == $value->pk_users_legal_status_id ) selected
                                                                        @endif @else  @if(old('licence_legal_status')== $value->pk_users_legal_status_id) selected @endif @endif >{{ $value->title_en }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                @if ($errors->first('licence_legal_status'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('licence_legal_status') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="license_no" class="field-label"> License No: </label>
                                                    <input type="text" class="form-control field-control"
                                                           name="license_number" id="license_number"
                                                           value="@if(isset($licence_info['license_number'])){{$licence_info['license_number']}}@else{{old('license_number')}}@endif"
                                                           placeholder="" data-fv-field="license_number">
                                                </div>
                                                @if ($errors->first('license_number'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('license_number') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="registration_no" class="field-label"> Registration
                                                        No: </label>
                                                    <input type="text" class="form-control field-control"
                                                           name="license_registration_number"
                                                           id="license_registration_number"
                                                           value="@if(isset($licence_info['registration_number'])){{$licence_info['registration_number']}}@else{{old('license_registration_number')}}@endif"
                                                           placeholder=""
                                                           data-fv-field="license_registration_number">
                                                </div>
                                                @if ($errors->first('license_registration_number'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('license_registration_number') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="inputGroupFile01" class="field-label"> Upload Trade
                                                        Licence </label>
                                                    <div class="custom-file upload-reg">
                                                        <input type="file"
                                                               class="custom-file-input form-control field-control"
                                                               name="license_file" id="license_file">
                                                        <label class="custom-file-label" for="inputGroupFile01"> Choose
                                                            file </label>
                                                        <span class="text-muted">*We will not share with this except the account holder </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous"> Previous</button>
                                        <button type="submit" class="btn"> Next</button>
                                    </div>
                                    {{ Form::close() }}
                                </fieldset>
                                <fieldset
                                        class="location" <?php if (@$step == 3) echo 'style="display:block"'; else echo 'style="display:none !important"';?>>
                                    {{ Form::open(array('url' => 'register/insert_location', 'enctype' => 'multipart/form-data')) }}
                                    <div class="lg-reg reg-form">
                                        <div class="row">
                                            <div class="col-md-12 location-btns">
                                                <!-- <button class="switch-acc">Add New</button> -->
                                                <div class="get-current-location"><i class="fa fa-paper-plane"
                                                                                     aria-hidden="true"></i>Use my
                                                    current location
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="country" class="field-label">Country:</label>
                                                    <select class="form-control js-example-basic-single"
                                                            id="location_fk_country_id" name="location_fk_country_id"
                                                            title="Select Country">
                                                        <option value="">Select Country</option>
                                                        @if(!empty($countries))
                                                            @foreach($countries as  $value)
                                                                <option value="{{ $value->pk_countries_id}}"
                                                                        @if(isset($location_info['fk_country_id'])) @if($location_info['fk_country_id'] == $value->pk_countries_id ) selected
                                                                        @endif @else  @if(old('location_fk_country_id')== $value->pk_countries_id) selected @endif @endif >{{ $value->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                @if ($errors->first('location_fk_country_id'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_fk_country_id') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="city" class="field-label">City:</label>
                                                    <select class="form-control js-example-basic-single"
                                                            id="location_fk_city_id"
                                                            name="location_fk_city_id" title="Select City">
                                                        <option value="">Select City</option>
                                                    </select>
                                                </div>
                                                @if ($errors->first('location_fk_city_id'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_fk_city_id') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="location" class="field-label">Area:</label>
                                                    <select class="form-control js-example-basic-single"
                                                            name="location_fk_area_id" id="location_fk_area_id"
                                                            title="Select Area">
                                                        <option value="">Select Area</option>
                                                    </select>
                                                </div>
                                                @if ($errors->first('location_fk_area_id'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_fk_area_id') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="location_pobox" class="field-label">P.O.Box:</label>
                                                    <input type="text" class="form-control field-control" name="pobox"
                                                           id="location_pobox"
                                                           value="@if(isset($location_info['pobox'])){{$location_info['pobox']}}@else{{old('location_pobox')}}@endif"
                                                           placeholder="" data-fv-field="pobox">
                                                </div>
                                                @if ($errors->first('location_pobox'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_pobox') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="location_email" class="field-label">Email:</label>
                                                    <input type="email" class="form-control field-control"
                                                           name="location_email" id="location_email"
                                                           value="@if(isset($location_info['location_email'])){{$location_info['location_email']}}@elseif(old('location_email', null) != null){{old('location_email')}}@else{{$company_info['email']}}@endif"
                                                           placeholder="" data-fv-field="location_email">
                                                </div>
                                                @if ($errors->first('location_email'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_email') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="location_phone" class="field-label">LandLine:</label>
                                                    <input type="text" class="form-control field-control mobile"
                                                           name="location_phone" id="location_phone"
                                                           value="@if(isset($location_info['location_phone'])){{$location_info['location_phone']}}@elseif(old('location_phone', null) != null){{old('location_mobile')}}@else{{$company_info['mobile']}}@endif"
                                                           placeholder=""
                                                           data-fv-field="location_phone">
                                                </div>
                                                @if ($errors->first('location_phone'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_phone') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="location_mobile" class="field-label">Mobile:</label>
                                                    <input type="text" class="form-control field-control mobile"
                                                           name="location_mobile" id="location_mobile"
                                                           value="@if(isset($location_info['location_mobile'])){{$location_info['location_mobile']}}@elseif(old('value', null) != null){{old('location_mobile')}}@else{{$company_info['phone']}}@endif"
                                                           placeholder=""
                                                           data-fv-field="location_mobile">
                                                </div>
                                                @if ($errors->first('location_mobile'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_mobile') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="street" class="field-label">Street:</label>
                                                    <input type="text" class="form-control field-control"
                                                           name="location_street" id="location_street"
                                                           value="@if(isset($location_info['street'])){{$location_info['street']}}@else{{old('location_street')}}@endif"
                                                           placeholder="" data-fv-field="street">
                                                </div>
                                                @if ($errors->first('location_street'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_street') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="address" class="field-label">Address:</label>
                                                    <textarea class="form-control"
                                                              name="location_address" id="location_address"
                                                              placeholder="">@if(isset($location_info['address'])){{$location_info['address']}}@else{{old('location_address')}}@endif</textarea>
                                                </div>
                                                @if ($errors->first('location_address'))
                                                    <div class="alert-error">
                                                        {{ $errors->first('location_address') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="first_name" class="field-label">Drag Your
                                                        Location:</label>
                                                    <div class="form-group bmd-form-group">
                                                        <label for="map_address" class="bmd-label-floating">Search
                                                            Location:</label>
                                                        <input type="text" class="form-control col-sm-12"
                                                               id="map_address" name="map_address" autocomplete="off">
                                                    </div>
                                                    <div class="col-sm-12" id="map" style="height:400px;"></div>

                                                    <input type="hidden" name="location_latitude" id="location_latitude"
                                                           value="@if(isset($location_info['latitude'])){{$location_info['latitude']}}@else{{old('location_latitude')}}@endif">

                                                    <input type="hidden" name="location_longitude"
                                                           id="location_longitude"
                                                           value="@if(isset($location_info['longitude'])){{$location_info['longitude']}}@else{{old('location_longitude')}}@endif">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="f1-buttons">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="submit" class="btn">Next</button>
                                    </div>
                                    {{ Form::close() }}
                                </fieldset>
                                <fieldset
                                        class="quickregister" <?php if (@$step == 4) echo 'style="display:block"'; else echo 'style="display:none !important"';?>>
                                    <div class="lg-reg reg-form">
                                        <div class="row">
                                            <div class="col-md-12 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6 pr-0">
                                                        <div class="full-wrap full-register-box first"><a href=""
                                                                                                          class="btn mx-auto complete-reg">Register
                                                                Now</a>
                                                            <p class="first-desc"> If you registered with this stage you
                                                                can't get BID's all facility ,and you will not verfied
                                                                by us until complete necessary requirements.However you
                                                                will get the basic facility of the BID. </p>
                                                            <div class="or-box">
                                                                <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->
                                                                OR
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0">
                                                        <div class="full-wrap full-register-box border-left-0 second"><a
                                                                    href="" class="btn mx-auto complete-reg">Go to,
                                                                &nbsp;<span>Next Step</span></a>
                                                            <p class="first-desc pl-4"> If you willing for complete
                                                                registration , You are able to use all facility , our
                                                                support , and guidness (Some of other Facilities) </p>
                                                            <ul>
                                                                <li><i class="fa fa-check-square-o"
                                                                       aria-hidden="true"></i> Add Your Product
                                                                </li>
                                                                <li><i class="fa fa-check-square-o"
                                                                       aria-hidden="true"></i> Manage Product
                                                                </li>
                                                                <li><i class="fa fa-check-square-o"
                                                                       aria-hidden="true"></i> Dashboard
                                                                </li>
                                                                <li><i class="fa fa-check-square-o"
                                                                       aria-hidden="true"></i>Logistics Support
                                                                </li>
                                                                <li><i class="fa fa-check-square-o"
                                                                       aria-hidden="true"></i> You can add Property, New
                                                                    Car , Used Car, Services, Wholesale ...
                                                                </li>
                                                            </ul>
                                                        </div>
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
        $(document).ready(function (e) {
            $('#company_dob').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
            $(".permission_type").click(function () {
                $(this).closest("input").find(".checkboxes").attr('checked', this.checked);
            });
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            getCategory($("#company_category").val(),@if(isset($company_info['activity'])){{$company_info['activity']}}@else{{old('company_activity')}}@endif);
            $('#company_category').change(function (e) {
                getCategory(this.value);
            });
            getCity($("#location_fk_country_id").val(),@if(isset($company_info['fk_city_id'])){{$company_info['fk_city_id']}}@else{{old('location_fk_city_id')}}@endif);
            $('#location_fk_country_id').change(function (e) {
                getCity(this.value,);
            });
            getArea($("#location_fk_city_id").val(),@if(isset($company_info['fk_area_id'])){{$company_info['fk_area_id']}}@else{{old('location_fk_area_id')}}@endif);
            $('#location_fk_city_id').change(function (e) {
                getArea(this.value,);
            });
        });

        function getCategory(category, activity = '') {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo URL::to('/') . '/register/selectActivities'; ?>",
                method: 'POST',
                data: {category: category, _token: token, activity: activity},
                success: function (data) {
                    //alert(data);
                    $("select[name='company_activity'").html('');
                    $("select[name='company_activity'").html(data.options);
                }
            });
        }

        function getCity(countryid, cityid = '') {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo URL::to('/') . '/register/selectCities'; ?>",
                method: 'POST',
                data: {fk_country_id: countryid, _token: token, fk_city_id: cityid},
                success: function (data) {
                    $("select[name='location_fk_city_id'").html('');
                    $("select[name='location_fk_city_id'").html(data.options);
                }
            });
        }

        function getArea(cityid, areaid = '') {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo URL::to('/') . '/register/selectAreas'; ?>",
                method: 'POST',
                data: {fk_city_id: cityid, _token: token, fk_area_id: areaid},
                success: function (data) {
                    $("select[name='location_fk_area_id'").html('');
                    $("select[name='location_fk_area_id'").html(data.options);
                }
            });
        }

    </script>
    <script type="text/javascript"
            src='https://maps.google.com/maps/api/js?key=AIzaSyCb8mnr3T1fcU8UgpCWylaH3rqfVdBsPbk&sensor=false&libraries=places'></script>
    <script src="{{ URL::asset('front_end/js/locationpicker.jquery.js') }}"></script>
    <script>
        function updateControls(addressComponents) {
            $('#country').val(addressComponents.country);
        }

        initMap();

        function initMap(lat = '', lot = '') {
            if (isNaN(lat)) lat = 25.271452;
            if (isNaN(lot)) lot = 55.3244922;
            $('#map').locationpicker({
                location: {
                    latitude: lat,
                    longitude: lot
                },
                radius: 300,
                zoom: 15,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    var addressComponents = $(this).locationpicker('map').location.addressComponents;
                    updateControls(addressComponents);
                },
                inputBinding: {
                    latitudeInput: $('#location_latitude'),
                    longitudeInput: $('#location_longitude'),
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
        $(document).on('click', '.get-current-location', function (e) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this mobile.";
            }

            /*    function showPosition(position){
                    var lat=position.coords.latitude;
                    var lot=position.coords.longitude;
                    initMap(lat,lot);
                }*/

            function showPosition(position) {
                location.latitude = position.coords.latitude;
                location.longitude = position.coords.longitude;
                initMap(location.latitude, location.longitude);
                var geocoder = new google.maps.Geocoder();
                var latLng = new google.maps.LatLng(location.latitude, location.longitude);

                if (geocoder) {
                    geocoder.geocode({'latLng': latLng}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            console.log(results);
                            $('#location_address').html(results[0].formatted_address);
                            var street = results[1].formatted_address;
                            var res = street.split("-");
                            $('#location_street').val(res[0]);
                            var country = results[5].formatted_address;
                            var city = res[1];
                            var areastr = results[2].formatted_address;
                            var ar = areastr.split("-");
                            var area = ar[0];
                            /* Country */
                            country = country.trim();
                            city = city.trim();
                            area = area.trim();
                            $("#location_fk_country_id").html("<option>" + country + "</option>");
                            $("#location_fk_city_id").html("<option>" + city + "</option>");
                            $("#location_fk_area_id").html("<option>" + area + "</option>");

                            var token = $("input[name='_token']").val();
                            $.ajax({
                                url: "<?php echo URL::to('/') . '/register/getCurrentCountry'; ?>",
                                method: 'POST',
                                data: {country: country, _token: token},
                                success: function (data) {
                                    $("select[name='location_fk_country_id'").html('');
                                    $("select[name='location_fk_country_id'").html(data.options);
                                    fetch_current_city(data.pk_countries_id, city, area);
                                }
                            });
                        }
                        else {
                            $('#address').html('Geocoding failed: ' + status);
                            console.log("Geocoding failed: " + status);
                        }
                    }); //geocoder.geocode()
                }
            } //showPosition

        });

        function fetch_current_city(countryid, city, area) {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo URL::to('/') . '/register/getCurrentCity'; ?>",
                method: 'POST',
                data: {fk_country_id: countryid, _token: token, fk_city_id: city},
                success: function (data) {
                    $("select[name='location_fk_city_id'").html('');
                    $("select[name='location_fk_city_id'").html(data.options);
                    fetch_current_area(data.fk_city_id, area);
                }
            });
        }

        function fetch_current_area(cityid, area) {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo URL::to('/') . '/register/getCurrentArea'; ?>",
                method: 'POST',
                data: {fk_city_id: cityid, _token: token, fk_area_id: area},
                success: function (data) {
                    $("select[name='location_fk_area_id'").html('');
                    $("select[name='location_fk_area_id'").html(data.options);
                }
            });
        }

        $(document).ready(function () {
            $('#main_users_repeater').repeater({
                repeaters: [{
                    // (Required)
                    // Specify the jQuery selector for this nested repeater
                    selector: '.inner-repeater'
                }],
                show: function () {
                    $(this).slideDown()
                },
                hide: function (e) {
                    confirm("Are you sure you want to delete this element?") && $(this).slideUp(e)
                }
            });

            $("#main_user_form").validate({
                invalidHandler: function (e, r) {
                    console.log("main_user_form");
                }
            })
            setTimeout(add_main_user_form_roles, 1000);
        });

        function add_main_user_form_roles() {
            var oFormData = $('#main_user_form').serializeArray();
            for (var i = 0; i < oFormData.length; i++) {

                if (oFormData[i]['name'].indexOf('company_user_nationality') > -1) {
                    var FormElemant_Name = $("select[name='" + oFormData[i]['name'] + "']").attr('name');
                } else {
                    var FormElemant_Name = $("input[name='" + oFormData[i]['name'] + "']").attr('name');
                }
                var FormElemant = $("input[name='" + oFormData[i]['name'] + "']");
                FormElemant.rules("remove");

                if (FormElemant_Name.indexOf('company_user_first_name') > -1) {
                    FormElemant.rules("add", {required: true, minlength: 3});
                }
                if (FormElemant_Name.indexOf('company_user_last_name') > -1) {
                    FormElemant.rules("add", {required: true});
                }
                if (FormElemant_Name.indexOf('company_user_gender') > -1) {
                    FormElemant.rules("add", {required: true});
                }
                if (FormElemant_Name.indexOf('company_user_designation') > -1) {
                    FormElemant.rules("add", {required: true});
                }
                if (FormElemant_Name.indexOf('company_user_dob') > -1) {
                    FormElemant.rules("add", {required: true});
                }
                if (FormElemant_Name.indexOf('company_user_mobile') > -1) {
                    FormElemant.rules("add", {required: true});
                }
                if (FormElemant_Name.indexOf('company_user_emailcompany_user_email') > -1) {
                    var ConfirmEmail = FormElemant_Name.replace("company_user_email", "company_user_email_confirmation");
                    FormElemant.rules("add", {required: true, equalTo: '[name="' + ConfirmEmail + '"]'});
                }
                if (FormElemant_Name.indexOf('company_user_email_confirmation') > -1) {
                    var ConfirmEmail = FormElemant_Name.replace("company_user_email_confirmation", "company_user_email");
                    FormElemant.rules("add", {required: true, equalTo: '[name="' + ConfirmEmail + '"]'});
                }
                if (FormElemant_Name.indexOf('company_user_password') > -1) {
                    var ConfirmPass = FormElemant_Name.replace("company_user_password", "company_user_password_confirmation");
                    FormElemant.rules("add", {required: true, minlength: 6, equalTo: '[name="' + ConfirmPass + '"]'});
                }
                if (FormElemant_Name.indexOf('company_user_password_confirmation') > -1) {
                    var ConfirmPass = FormElemant_Name.replace("company_user_password_confirmation", "company_user_password");
                    FormElemant.rules("add", {required: true, minlength: 6, equalTo: '[name="' + ConfirmPass + '"]'});
                }
            }
        }


    </script>

    <script src="{{ URL::asset('front_end/js/prism.js') }}"></script>
    <script src="{{ URL::asset('front_end/js/intlTelInput.js') }}"></script>
    <script src="{{ URL::asset('front_end/js/defaultCountryIp.js') }}"></script>
    <script type="text/javascript">
    </script>
    </body>
    </html>
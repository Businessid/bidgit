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
        <div class="full-wrap">
            <div class="cmn-container-reg">
                <div class="row">
                    <div class="col-md-5 mx-auto reg-personal-wrap">
                        <table>
                            <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="full-wrap reg-personal mt-4">
                                        <div class="head">
                                            <img src="{{URL("/front_end")}}/images/icon/reg.png">Personal Registration
                                        </div>
                                        <div class="full-wrap personal-form">
                                            {{ Form::open(array('url' => 'register/insert_personal', 'id' => 'personal_info', 'enctype' => 'multipart/form-data')) }}
                                            <div id="form_div">
                                            <div class="row p-reg-row">

                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text"  name="nick_name"  value="{{old('nick_name')}}" class="form-control field-control" placeholder="Nike Name" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('nick_name'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('nick_name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="custom-file upload-reg">
                                                            <input type="file" value="{{old('user_image')}}"
                                                                   class="custom-file-input form-control field-control"
                                                                   id="user_image" name="user_image">
                                                            <label class="custom-file-label" for="user_image">Choose
                                                                file</label>
                                                            @if ($errors->first('user_image'))
                                                                <div class="alert-error">
                                                                    {{ $errors->first('user_image') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text"  value="{{old('first_name')}}" name="first_name" class="form-control field-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('first_name'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('first_name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text"  name="last_name" value="{{old('last_name')}}" class="form-control field-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('last_name'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('last_name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-male" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div class="custom-radio-wrap custom-radio-wrap1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="gender_male" name="gender" class="custom-control-input" value="male" @if(old('gender')== "male") checked @endif  >
                                                                <label class="custom-control-label" for="gender_male">Male</label>
                                                            </div>
                                                            @if ($errors->first('gender'))
                                                                <div class="alert-error">
                                                                    {{ $errors->first('gender') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-female" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div class="custom-radio-wrap custom-radio-wrap1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="gender_female" name="gender" class="custom-control-input" value="female" @if(old('gender')== "female") checked @endif  >
                                                                <label class="custom-control-label" for="gender_female">Female</label>
                                                            </div>
                                                            @if ($errors->first('gender'))
                                                                <div class="alert-error">
                                                                    {{ $errors->first('gender') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row p-reg-row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" name="birthday" value="{{old('birthday')}}" class="form-control field-control" placeholder="25-12-1990" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('birthday'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('birthday') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="text" class="form-control field-control mobile"
                                                               name="mobile" id="mobile"   value="{{old('mobile')}}"
                                                               placeholder="" >
                                                        @if ($errors->first('mobile'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('mobile') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div class="group-select">
                                                            <select  name="nationality" class="form-control js-example-basic-single" id="" name=""  title="Select Current Country">
                                                                <option value="">- Select -</option>
                                                                @if(!empty($countries))
                                                                    @foreach($countries as $val)
                                                                        <option value="{{ $val->pk_countries_id }}"  @if(old('nationality')== $val->pk_countries_id) selected @endif >{{ $val->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        @if ($errors->first('nationality'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('nationality') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row  p-reg-row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="email" name="email" value="{{old('email')}}"  class="form-control field-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('email'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('email') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="email" name="email_confirmation"  value="{{old('email_confirmation')}}" class="form-control field-control" placeholder="Confirm E-mail" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('email_confirmation'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('email_confirmation') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="password" name="password" value="{{old('password')}}"  class="form-control field-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('password'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('password') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control field-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                                                        @if ($errors->first('password_confirmation'))
                                                            <div class="alert-error">
                                                                {{ $errors->first('password_confirmation') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            </div>



                                            <button type="submit" class="btn p-reg-btn">Register</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>





            </div>
        </div>
    </div>




</div><!-- row -->








@include('front_end.modules.footer')

<script src="{{ URL::asset('front_end/js/intlTelInput.js') }}"></script>
<script src="{{ URL::asset('front_end/js/defaultCountryIp.js') }}"></script>
<script type="text/javascript">
</script>
</body>
</html>

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


$(document).ready(function() {
    var max_investor      = 10;
    var wrapper_investor         = $(".add-more-investor");
    var add_investor      = $(".add-investor");

    var x = 0;
    var y = 0;
    $(add_investor).click(function(e){
        e.preventDefault();
        if(x < max_investor){
            x++;
            var options_con = '';
        <?php foreach($countries as $key => $value){ ?>
                options_con += '<option value="<?php echo $key; ?>"><?php echo $value; ?></option>';
            <?php } ?>
            $(wrapper_investor).append('<div><div class="row"><div class="col-md-3"><div class="form-group"><label for="investor_name" class="field-label">Full Name:</label><input type="email" class="form-control field-control" name="investor_name[]" id="investor_name" placeholder="" data-fv-field="investor_name"></div></div><div class="col-md-3"><div class="form-group"><label for="investor_type" class="field-label">Type:</label><select class="form-control js-example-basic-single" name="investor_type[]" id="investor_type"><option value="">Select Type</option><option value="1">Local Sponsor</option><option value="2">Owner</option><option value="3">Partner</option></select></div></div><div class="col-md-3"> <div class="form-group"> <label for="share" class="field-label">Percentage Of Share</label> <input type="text" class="form-control field-control" name="share[]" id="share" placeholder="" data-fv-field="share"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="investor_nationality_'+x+'" class="field-label">Nationality:</label> <select class="form-control js-example-basic-single" id="investor_nationality_'+x+'" name="investor_nationality[]" title=""> <option value="">- Select -</option> '+options_con+' </select> </div></div></div><div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="investor_mobile" class="field-label">Mobile Number:</label> <input type="text" class="form-control field-control mobile" name="investor_mobile[]" id="investor_mobile" placeholder="" data-fv-field="investor_mobile"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="investor_email" class="field-label">E-mail:</label> <input type="email" class="form-control field-control" name="investor_email[]" id="investor_email" placeholder="" data-fv-field="investor_email"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="investor_id_no" class="field-label">ID No:</label> <input type="text" class="form-control field-control" name="investor_id_no[]" id="investor_id_no" placeholder="" data-fv-field="investor_id_no"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="investor_image" class="field-label">Upload Your ID</label> <div class="custom-file upload-reg"> <input type="file" class="custom-file-input form-control field-control" id="investor_image" name="investor_image[]"> <label class="custom-file-label" for="investor_image">Choose file</label> <span class="text-muted">*This will not be share with anyone </span> </div></div></div></div><div class="row"><div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2"><button class="switch-acc removeinvestor">Delete</button></div></div></div>');
        }
    });

    $(wrapper_investor).on("click",".removeinvestor", function(e){
        e.preventDefault(); $(this).parent().parent().parent().remove(); x--;
    })
});

$(document).ready(function() {
    var max_branch      = 10;
    var wrapper_branch         = $(".add-more-branch");
    var add_branch      = $(".add-branch");

    var x = 0;
    var y = 0;
    $(add_branch).click(function(e){
        e.preventDefault();
        if(x < max_branch){
            x++;
            var options_con = '';
        <?php foreach($countries as $key => $value){ ?>
                options_con += '<option value="<?php echo $key; ?>"><?php echo $value; ?></option>';
            <?php } ?>
            $(wrapper_branch).append('<div><div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="branch_name" class="field-label">Branch Name:</label> <input type="text" class="form-control field-control" name="branch_name[]" id="branch_name" placeholder="" data-fv-field="branch_name"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="branch_phone" class="field-label">Landline Number:</label> <input type="text" class="form-control field-control" name="branch_phone[]" id="branch_phone" placeholder="" data-fv-field="branch_phone"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="branch_mobile" class="field-label">Mobile Number:</label> <input type="text" class="form-control field-control mobile" name="branch_mobile[]" id="branch_mobile" placeholder="" data-fv-field="branch_mobile"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="branch_fax" class="field-label">Fax Number:</label> <input type="text" class="form-control field-control" name="branch_fax[]" id="branch_fax" placeholder="" data-fv-field="branch_fax"> </div></div></div><div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="branch_email" class="field-label">Email:</label> <input type="email" class="form-control field-control" name="branch_email[]" id="branch_email" placeholder="" data-fv-field="branch_email"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="branch_city" class="field-label">Location:</label> <select class="form-control js-example-basic-single" id="branch_city" name="branch_city[]" title="Select Current Location"> <option value="">Select Location</option> <option value="Dubai">Dubai</option> <option value="Sharjah">Sharjah</option> <option value="Abu Dhabi">Abu Dhabi</option> <option value="Ras Al Khaimah">Ras Al Khaimah</option> <option value="Fujairah">Fujairah</option> <option value="Ajman">Ajman</option> <option value="Umm Al Qawain">Umm Al Qawain</option> <option value="Al Ain">Al Ain</option> </select> </div></div><div class="col-md-3"> <div class="form-group"> <label for="branch_address" class="field-label">Branch Address:</label> <textarea class="form-control" name="branch_address[]" id="branch_address" placeholder=""></textarea> </div></div></div><div class="row"><div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2"><button class="switch-acc removebranch">Delete</button></div></div></div>');
        }
    });

    $(wrapper_branch).on("click",".removebranch", function(e){
        e.preventDefault(); $(this).parent().parent().parent().remove(); x--;
    })
});

$(document).ready(function() {
    var max_user      = 10;
    var wrapper_user         = $(".add-more-user");
    var add_user      = $(".add-user");

    var x = 0;
    var y = 0;
    $(add_user).click(function(e){
        e.preventDefault();
        if(x < max_user){
            x++;
            var options_con = '';
        <?php foreach($countries as $key => $value){ ?>
                options_con += '<option value="<?php echo $key; ?>"><?php echo $value; ?></option>';
            <?php } ?>
            $(wrapper_user).append('<div><div class="row mt-3"> <div class="col-md-3"> <div class="form-group"> <label for="user_userimage" class="field-label">Upload Your Photo</label> <div class="custom-file upload-reg"> <input type="file" class="custom-file-input form-control field-control" id="user_userimage" name="user_userimage[]"> <label class="custom-file-label" for="user_userimage">Choose file</label> </div></div></div><div class="col-md-3"> <div class="form-group"> <label for="user_first_name" class="field-label">First Name:</label> <input type="text" class="form-control field-control" name="user_first_name[]" id="user_first_name" placeholder="" data-fv-field="user_first_name"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_last_name" class="field-label">Last Name:</label> <input type="text" class="form-control field-control" name="user_last_name[]" id="user_last_name" placeholder="" data-fv-field="user_last_name"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="gender" class="field-label">Gender : </label> <div class="custom-radio-wrap"> <div class="custom-control custom-radio mr-3"> <input type="radio" id="user_gender" name="user_gender[]" class="custom-control-input" value="Male"> <label class="custom-control-label" for="gender">Male</label> </div><div class="custom-control custom-radio pull-right"> <input type="radio" id="user_gender1" name="user_gender[]" class="custom-control-input" value="Female"> <label class="custom-control-label" for="user_gender1">Female</label> </div></div></div></div></div><div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="user_designation" class="field-label">Designation:</label> <input type="text" class="form-control field-control" name="user_designation[]" id="user_designation" placeholder="" data-fv-field="user_designation"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_dob" class="field-label">DOB:</label> <input type="text" class="form-control field-control datepicker" name="user_dob[]" id="user_dob" value="" placeholder="" data-fv-field="user_dob"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_mobile" class="field-label">Mobile Number:</label> <input type="text" class="form-control field-control mobile" name="user_mobile[]" id="user_mobile" placeholder="" data-fv-field="user_mobile"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_phone" class="field-label">Landline Number:</label> <input type="text" class="form-control field-control" name="user_phone[]" id="user_phone" placeholder="" data-fv-field="user_phone"> </div></div></div><div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="user_nationality" class="field-label">Nationality:</label> <select class="form-control js-example-basic-single" id="user_nationality" name="user_nationality[]" title=""> <option value="">- Select -</option> '+options_con+' </select> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_email" class="field-label">E-mail:</label> <input type="email" class="form-control field-control" name="user_email[]" id="user_email" placeholder="" data-fv-field="user_email"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_email_confirmation" class="field-label">Confirm E-mail:</label> <input type="email" class="form-control field-control" name="user_email_confirmation" id="user_email_confirmation" placeholder="" data-fv-field="user_email_confirmation"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="user_password" class="field-label">Password:</label> <input type="password" class="form-control field-control" name="user_password[]" id="user_password" placeholder="" data-fv-field="password"> </div></div></div><div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="user_password_confirmation" class="field-label">Confirm Password:</label> <input type="password" class="form-control field-control" name="user_password_confirmation" id="user_password_confirmation" placeholder="" data-fv-field="confirmpassword"> </div></div></div><div class="row"> <div class="lg-reg reg-form col-md-12"> <div class="full-wrap user-action-part mt-4"> <div class="label-head"><img src="{{URL::asset("front_end/images/icon/allow.png")}}" class="mr-1"><span class="d-inline-block">This user authorized to :</span></div><div class="full-wrap mt-2"> <div class="custom-control custom-radio d-inline-block acc-choose mt-2"> <input type="radio" id="permission_type_1" name="permission_type" class="custom-control-input permission_type" value="1"> <label class="custom-control-label" for="permission_type_1">Delegation of using all the businessid.net functions, facilities and actions.</label> </div><div class="full-wrap text-left"><span class="or-box-for">OR</span></div></div><div class="full-wrap mt-2"> <div class="custom-control custom-radio d-inline-block acc-choose mt-2"> <input type="radio" id="permission_type_2" name="permission_type" class="custom-control-input permission_type" value="2"> <label class="custom-control-label" for="permission_type_2">All E-commerce:</label> </div><ul class="list-for-user"> <li> <div class="checkbox-edit checkbox-primary"> <input id="products" name="products" type="checkbox" class="checkboxes"> <label for="products">Add product / Delete product / Manage Product / Edit product… etc.</label> </div></li><li> <div class="checkbox-edit checkbox-primary"> <input id="orders" type="checkbox" name="orders" class="checkboxes"> <label for="orders">Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.</label> </div></li><li> <div class="checkbox-edit checkbox-primary"> <input id="buying" type="checkbox" name="buying" class="checkboxes"> <label for="buying">Buy from supplier / product / Edit the buying order… etc. </label> </div></li><li> <div class="checkbox-edit checkbox-primary"> <input id="tender" type="checkbox" name="tender" class="checkboxes"> <label for="tender">Create tender / accept tender / Delete tender / Edit tender… etc. </label> </div></li><li> <div class="checkbox-edit checkbox-primary"> <input id="jobs" type="checkbox" name="jobs" class="checkboxes"> <label for="jobs">Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.</label> </div></li><li class="ml-3"> <div class="checkbox-edit checkbox-primary"> <input id="advertising" type="checkbox" name="advertising" class="checkboxes"> <label for="advertising">Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from businessid.net / Edit your advertising package</label> </div></li></ul> <div class="full-wrap text-left"><span class="or-box-for">OR</span></div></div><div class="full-wrap mt-2"> <div class="custom-control custom-radio d-inline-block acc-choose mt-2 ml-1"> <input type="radio" id="permission_type_3" name="permission_type" class="custom-control-input permission_type" value="3"> <label class="custom-control-label" for="permission_type_3">All Social Media</label> </div><ul class="list-for-user"> <li class="ml-3"> <div class="checkbox-edit checkbox-primary"> <input id="social" type="checkbox" name="social" class="checkboxes"> <label for="social">Post video, Post photo, Follow, Un Follow, Change the name of company / background photo / Profile photo / Write comment / Like post / Share / Delete all type of post and comments / Edit all the posts in profile and in newsfeed… etc.</label> </div></li><li> <div class="checkbox-edit checkbox-primary"> <input id="chat" type="checkbox" name="chat" class="checkboxes"> <label for="chat">Chat / Send message</label> </div></li></ul> </div><div class="user-for-msg text-center"> <i class="fa fa-info-circle" aria-hidden="true"></i> All user will have a personal account with same user name and password </div></div></div></div><div class="full-wrap text-right send-author-wrap"> <span>* This user has to authorized by <a href="">[Name]</a></span> <button class="btn send-author"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send For Authorization</button></div><div class="row"> <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2"> <button class="switch-acc removeuser">Delete</button> </div></div></div>');
        }
    });

    $(wrapper_user).on("click",".removeuser", function(e){
        e.preventDefault(); $(this).parent().parent().parent().remove(); x--;
    })
});
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
                      <div class="alert alert-success" style="top: 200px;">
  <strong>Success! &nbsp;&nbsp;</strong>{{@$message}}
</div>

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

@include('front_end.modules.header-hero-nav')
@include('front_end.modules.hero-header')
<link rel="stylesheet" href="{{ URL::asset('front_end/css/prism.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/isValidNumber.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/reg-wizard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/datepicker3.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/profile.css') }}">
<style type="text/css">
    .store-cat-nav {
        display: none;
    }

    .masthead .nav-container {
        top: 5px;
    }
    .EmbedFrame{
        display: none;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="aps-wrapper">
            <div class="sidebar">
                <div class="title">
                    <img src="{{URL::asset('front_end/images')}}/logo1.png" class="img-tp-12 bx-shdw-right">
                    Product Dashboard
                </div>

                <ul class="sidebar-cnt">
                    <li><a href="add-product" class="active"><img src="{{URL::asset('front_end/images')}}/icon/add.png"><i>Add New</i></a></li>
                    <li><a href="product-list"><img src="{{URL::asset('front_end/images')}}/icon/editpen.png"><i>Edit</i></a></li>
                    <li class="sp-offer-btn"><a href="javascript:void(0);">
                            <img src="{{URL::asset('front_end/images')}}/icon/save-h.png"><i>Special Offers</i><span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                        <ul class="offer-option">
                            <li><a href="">Sale</a></li>
                            <li><a href="">Promotion</a></li>
                            <li><a href="">Flash Deals</a></li>
                            <li><a href="">Packages</a></li>
                        </ul>
                    </li>
                    <li><a href="slider"><img src="{{URL::asset('front_end/images')}}/icon/slider.png"><i>Slider</i></a></li>
                    <li><a href="baner"><img src="{{URL::asset('front_end/images')}}/icon/banner.png"><i>Banners</i></a></li>
                    <li><a href=""><img src="{{URL::asset('front_end/images')}}/icon/banner.png"><i>Refresh My Products</i></a></li>
                </ul>



            </div>

            <div class="aps-panel">
                <div class="full-wrap bg-store pb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page">
                                    <div class="accordion" id="add-product">
                                        <div class="card pt-3">
                                            <div class="card-header" id="p-detail">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#p-detail-collapse" aria-expanded="true" aria-controls="p-detail-collapse">
                                                        <span class="badge badge-light">1</span>Product Details
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="p-detail-collapse" class="collapse show" aria-labelledby="headingOne" data-parent="#add-product">
                                                <div class="card-body">
                                                    <div class="content-wrap reg-form">
                                                        <div class="row">
                                                            <div class="col-md-12 sel-cat-type">
                                                                <div class="caption">Select Category Type :</div>
                                                                <div class="custom-radio-wrap border-0">
                                                                    <div class="custom-control custom-radio mr-3">
                                                                        <input type="radio" id="cat1" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="cat1">New</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mr-3">
                                                                        <input type="radio" id="cat2" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="cat2">Used</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mr-3">
                                                                        <input type="radio" id="cat3" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="cat3">Wholesale</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mr-3">
                                                                        <input type="radio" id="cat4" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="cat4">Services</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mr-3">
                                                                        <input type="radio" id="cat5" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="cat5">Properties</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mr-3">
                                                                        <input type="radio" id="cat6" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="cat6">Auto</label>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="nationality" class="field-label"> Category: </label>
                                                                    <select class="form-control js-example-basic-single" id="main_category" name="main_category"  title="">
                                                                        <option value="">Select Category</option>
                                                                        @foreach($Categories as $Category)
                                                                            <option value="{{$Category->id}}">{{$Category->Description[0]->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="nationality" class="field-label">Sub Category: </label>
                                                                    <select class="form-control js-example-basic-single" id="sub_category" name="sub_category"  title="">
                                                                        <option value="" data-select2-id="465">Select Sub Category</option><option value="44" data-select2-id="467">Athletic Wear</option><option value="320" data-select2-id="468">Belts</option><option value="321" data-select2-id="469">Clothing Accessories</option><option value="46" data-select2-id="470">Costumes</option><option value="47" data-select2-id="471">Dresses</option><option value="48" data-select2-id="472">Ethnic &amp; Traditional Wear</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="nationality" class="field-label">Sub Category: </label>
                                                                    <select class="form-control js-example-basic-single" id="sub_sub_category" name="sub_sub_category"  title="">
                                                                        <option value="" data-select2-id="465">Select Sub Category</option><option value="44" data-select2-id="467">Athletic Wear</option><option value="320" data-select2-id="468">Belts</option><option value="321" data-select2-id="469">Clothing Accessories</option><option value="46" data-select2-id="470">Costumes</option><option value="47" data-select2-id="471">Dresses</option><option value="48" data-select2-id="472">Ethnic &amp; Traditional Wear</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Title:</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="gender" class="field-label">Description : </label>
                                                                    <textarea class="form-control" name="" id="" placeholder=""></textarea>
                                                                </div>
                                                            </div>
                                                        </div>





                                                        <div class="row">
                                                            <div class="editprofile-btn-wrap float-right ml-auto">
                                                                <button type="button" class="btn editprofile-btn">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- card -->



                                        <div class="card">
                                            <div class="card-header" id="price-offer">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#price-offer-collapse" aria-expanded="false" aria-controls="price-offer">
                                                        <span class="badge badge-light">2</span>Price & Offer Details
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="price-offer-collapse" class="collapse" aria-labelledby="headingtwo" data-parent="#add-product">
                                                <div class="card-body">
                                                    <div class="content-wrap reg-form">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Retail Price : AED</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="5000" placeholder="First Name" data-fv-field="first_name">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Retail Offer Price : AED</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="4000" placeholder="First Name" data-fv-field="first_name">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Total Stock quantity :</label>
                                                                    <input type="number" class="form-control field-control" name="first_name" id="first_name" value="8" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Minimum Quantity Required :</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="2" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Product Length :</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Product Width :</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Product Height :</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Product Weight :</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="editprofile-btn-wrap float-right ml-auto">
                                                                <button type="button" class="btn editprofile-btn reset-icon"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                                                <button type="button" class="btn editprofile-btn">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- card -->

                                        <!-- Product Specifications -->
                                        <div class="card">
                                            <div class="card-header" id="pro-desc">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#pro-desc-collapse" aria-expanded="false" aria-controls="pro-desc">
                                                        <span class="badge badge-light">3</span>Product Specifications
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="pro-desc-collapse" class="collapse" aria-labelledby="headingtwo" data-parent="#add-product">
                                                <div class="card-body">
                                                    <div class="content-wrap reg-form">
                                                        <div class="row" id="specifications_area">








                                                        </div>




                                                        <div class="row">
                                                            <div class="editprofile-btn-wrap float-right ml-auto">
                                                                <button type="button" class="btn editprofile-btn reset-icon"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                                                <button type="button" class="btn editprofile-btn">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Specifications -->

                                        <div class="card">
                                            <div class="card-header" id="delivery-info">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#delivery-info-collapse" aria-expanded="false" aria-controls="delivery-info">
                                                        <span class="badge badge-light">4</span>Delivery Information
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="delivery-info-collapse" class="collapse" aria-labelledby="headingtwo" data-parent="#add-product">
                                                <div class="card-body">
                                                    <div class="content-wrap reg-form">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="gender" class="field-label">Select Your Delivery Type: </label>
                                                                    <div class="form-group switch-btn">
                                                                        <div class="custom-radio-wrap" style="border: none;">
                                                                            <div class="custom-control custom-radio mr-5">
                                                                                <input type="radio" id="customRadioInline33" name="customRadioInline1" class="custom-control-input">
                                                                                <label class="custom-control-label" for="customRadioInline33">Business ID</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" id="customRadioInline44" name="customRadioInline1" class="custom-control-input">
                                                                                <label class="custom-control-label" for="customRadioInline44">Company</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="first_name" class="field-label">Delivery Charge : AED</label>
                                                                    <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="nationality" class="field-label">Expected Delivery:: </label>
                                                                    <select class="form-control js-example-basic-single" id="" name="nationality"  title="Select Nationality">
                                                                        <option value="">Select Expect Delivery</option>
                                                                        <option value="1-3">1-3 Days</option>
                                                                        <option value="3-5">3-5 Days</option>
                                                                        <option value="5-7">5-7 Days</option>
                                                                        <option value="7-10">7-10 Days</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="editprofile-btn-wrap float-right ml-auto">
                                                                <button type="button" class="btn editprofile-btn reset-icon"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                                                <button type="button" class="btn editprofile-btn">Continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- card -->


                                        <div class="card">
                                            <div class="card-header" id="pro-imgs">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#pro-imgs-collapse" aria-expanded="false" aria-controls="pro-imgs">
                                                        <span class="badge badge-light">5</span>Product Images
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="pro-imgs-collapse" class="collapse" aria-labelledby="headingtwo" data-parent="#add-product">
                                                <div class="card-body">
                                                    <div class="content-wrap reg-form">
                                                        <div class="row">
                                                            <div class="col-md-6 slider-img-box mx-auto">
                                                                <form action="/file-upload" class="dropzone dz-clickable">
                                                                    <div class="dz-message text-center" data-dz-message="">
                                                                        <span class="img-ico"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                                                        <div class="title">Upload your images here...</div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="editprofile-btn-wrap float-right ml-auto">
                                                                <button type="button" class="btn editprofile-btn reset-icon"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                                                <button type="button" class="btn editprofile-btn ">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- card -->
                                    </div>
                                </div>
                            </div>
                            <!-- add-product -->



                        </div><!-- row -->

                    </div>

                </div>
            </div>
        </div>


        @include('front_end.modules.footer')
        <script type="text/javascript">
            $('.offer-option').hide();
            $('.sp-offer-btn').click(function(){
                $(this).find('ul').slideToggle();
            });
        </script>
        <script src="{{ URL::asset('front_end/pages/js/store-add-product.js') }}"></script>

        <script src=""></script>
        </body>
        </html>

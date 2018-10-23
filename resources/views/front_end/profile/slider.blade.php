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
                    <li><a href="add-product" ><img src="{{URL::asset('front_end/images')}}/icon/add.png"><i>Add New</i></a></li>
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
                    <li><a href="slider" class="active"><img src="{{URL::asset('front_end/images')}}/icon/slider.png"><i>Slider</i></a></li>
                    <li><a href="banners"><img src="{{URL::asset('front_end/images')}}/icon/banner.png"><i>Banners</i></a></li>
                    <li><a href=""><img src="{{URL::asset('front_end/images')}}/icon/banner.png"><i>Refresh My Products</i></a></li>
                </ul>


            </div>

            <div class="aps-panel">
                <div class="full-wrap bg-store pb-4">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 mt-2 edit-slider-img">
                                <div class="cap">Add slider images in your store</div>
                                <div class="row">
                                    <div class="size-width"><span>1366 px</span></div>
                                    <div class="col-md-10 slider-img-box mx-auto">
                                        <form action="/file-upload" class="dropzone dz-clickable">
                                            <div class="dz-message text-center" data-dz-message="">
                                                <span class="img-ico"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                                <div class="title">Upload your images here...</div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="size-height"><span>500 px</div>
                                </div>
                                <button type="button" class="btn editprofile-btn float-right mt-5 btn-slider-db">Submit</button>
                            </div>
                            <!-- edit-Slider -->







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

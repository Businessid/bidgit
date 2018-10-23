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
                    <li><a href="product-list" class="active"><img src="{{URL::asset('front_end/images')}}/icon/editpen.png"><i>Edit</i></a></li>
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
                    <li><a href="banners"><img src="{{URL::asset('front_end/images')}}/icon/banner.png"><i>Banners</i></a></li>
                    <li><a href=""><img src="{{URL::asset('front_end/images')}}/icon/banner.png"><i>Refresh My Products</i></a></li>
                </ul>

            </div>

            <div class="aps-panel">
                <div class="full-wrap bg-store pb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-wrapper">
                                    <div class="row prodict-active edit-product-db">
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/3.jpg" alt="">
                                                        <img class="secondary-image" src="img/product/2.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/5.jpg" alt="">
                                                        <img class="secondary-image" src="img/product/6.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                    </p>
                                                </div>
                                                <div class="full-wrap bottom-btn mt-2">
                                                    <a href="" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                    <a href="" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- edit-product -->


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

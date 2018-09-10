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
    <?php $faceurl = "https://www.facebook.com/peopleareawesome/videos/best-videos-of-the-year-so-far/1393626100686564"; ?>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/bys2xcKJ9g0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.facebook.com/plugins/video.php?href= <?php echo $faceurl; ?>&show_text=0&width=560" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/zvMuu7vpPq/?utm_source=ig_embed_loading" data-instgrm-version="12"style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/zvMuu7vpPq/?utm_source=ig_embed_loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/zvMuu7vpPq/?utm_source=ig_embed_loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">R.E.O.T - CUKUP DIAM Track pertama kami @joe_da_flash dan @emendrmk di album &#34;luar kelas &#34; #abangrapperdek #pontianak #rappontianak #westborneo #borneobarat #hiphopindonesia #indonesia #wcb #jdf #emend #420 #world #wolf #hiphop #rap #rapper #dope #hiphopinasia</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/joedaflash/?utm_source=ig_embed_loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> joedaflashSTORE</a> (@joedaflash) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-03-02T19:43:40+00:00">Mar 2, 2015 at 11:43am PST</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
    <div class="bx-tp-prf-1" data-sticky_parent>
        <div class="row m-0">
            <div class="scr-nv-bx lght-bx-shdw col-md-12" data-sticky_column>

                <div class="flex-bx-2 font-fmly-ar">
                    <div class="bx-lft-prf back-fff pd-a-10 brd-r-b">
                        <table class="wdt-100-prc" style="height: 100%;">
                            <tr>
                                <td class="wdt-80-px align-middle">
                                    <img class="img-scrl-lft lazy img-fluid bx-shdw-right" src="images/profilephoto.jpeg">
                                </td>
                                <td class="align-middle pd-lft-25 text-center">
                                    <div class="row scrl-flwrs">
                                        <div class="col-md-6">
                                            <div class="prf-txt-1">Followers</div>
                                            <div class="prf-txt-2">320</div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="prf-txt-1">Following</div>
                                            <div class="prf-txt-2">320</div>
                                        </div>
                                    </div>

                                    <a href="#" class="prf-flw-btn on-scrl"><span><i class="fa fa-user-plus" aria-hidden="true"></i></span>follow</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col back-fff p-0">
                        <div>
                            <a href="#" class="prf-lnk-tp-2 float-right mr-3">
                                chat
                            </a>
                            <div class="flx-txt-5 pd-lft-25 mt-2">Mario Mandez</div>
                            <div class="flx-txt-6 pd-lft-25">Web UI/UX Developer</div>
                        </div>
                        <div class="tb-tp-1 mrg-t-10">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link" href="profileinfo.php">
                                        <span class="nv-icn-1"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                                        Info
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="profile.php">
                                        <span class="nv-icn-1"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                        Newsfeed
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profilestore.php">
                                        <span class="nv-icn-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                        Store
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">
                                        <span class="nv-icn-1"><i class="fa fa-video-camera" aria-hidden="true"></i></span>
                                        Videos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">
                                        <span class="nv-icn-1"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        Photos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profileimages.php">
                                        <span class="nv-icn-1"><i class="fa fa-gavel" aria-hidden="true"></i></span>
                                        Tenders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profilevideo.php">
                                        <span class="nv-icn-1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
                                        Jobs
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="prf-rght-bar back-fff pd-a-10">
                        <table class="wdt-100-prc">
                            <tr>
                                <td class="align-middle text-right hgt-70">
                                  <a href="#" class="prf-lnk-tp-2 text-center">
                                      <img style=" width: 25px;" src="data:image/svg+xml;base64,
PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDQ4My43ODkgNDgzLjc4OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgzLjc4OSA0ODMuNzg5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8cG9seWdvbiBwb2ludHM9IjQzNC43Nyw0MDUuMzMyIDQ2NS44OTUsNDA1LjMzMiA0NjUuODk1LDEyMi42NjcgMzI5Ljg5NSwxMjIuNjY3IDMyOS44OTUsMjgwLjI4OCAzMjkuODk1LDI5My4zMzMgICAgIDMxNi4wNzMsMjkzLjMzMyAxNjcuMjI4LDI5My4zMzMgMTY3LjIyOCw0MDUuMzMyIDM2MS44OTUsNDA1LjMzMiAzNjEuODk1LDQ4My43ODkgICAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0QxMUQyRiIgZGF0YS1vbGRfY29sb3I9IiNkMTFkMmYiPjwvcG9seWdvbj4KCQk8cGF0aCBkPSJNMTcuODk1LDI4MGgzMC44OGw3My4xMiw3OS45NzNWMjgwaDQ1LjMzM2gxNDkuMzMzVjEyMi42NjdWMEgxNy44OTVWMjgweiBNMjY2LjEzOCwxMTYuNiAgICBjNi4yNjcsMCwxMS45ODksMy40LDE2LjQwNyw2LjA2N2M1LjQzLDUuMzMzLDguODg1LDExLjg0NSw4Ljg4NSwxOS41NDljMCwxMy45NjgtMTEuMzI1LDI1LjQ1My0yNS4yOTIsMjUuNDUzICAgIGMtMTMuOTY4LDAtMjUuMjk0LTExLjU2NS0yNS4yOTQtMjUuNTMzYzAtNy43MDEsMy40NTMtMTQuMTMzLDguODg2LTE5LjQ2N0MyNTQuMTQ1LDEyMCwyNTkuODY3LDExNi42LDI2Ni4xMzgsMTE2LjZ6ICAgICBNMTk5LjkyNywxMTYuNmM2LjI2NywwLDExLjk5LDMuNCwxNi40MDgsNi4wNjdjNS40MjksNS4zMzMsOC44ODYsMTEuODQ1LDguODg2LDE5LjU0OWMwLDEzLjk2OC0xMS4zMjYsMjUuNDUzLTI1LjI5NCwyNS40NTMgICAgYy0xMy45NjgsMC0yNS4yOTMtMTEuNTY1LTI1LjI5yNS4yOTMtMjUuMjkzQzEwOC40MjIsMTI4LjU2NSwxMTkuNzQ4LDExNy4yNDMsMTMzLjcxNSwxMTcuMjQzeiBNNjcuNTA3LDExNy4yNDMgICAgYzEzLjk2OCwwLDI1LjI5MywxMS4zMjYsMjUuMjkzLDI1LjI5M2MwLDEzLjk2OC0xMS4zMjYsMjUuMjkzLTI1LjI5MywyNS4yOTNjLTEzLjk3MSwwLTI1LjI5My0xMS4zMjUtMjUuMjkzLTI1LjI5MyAgICBDNDIuMjE0LDEyOC41NjUsNTMuNTM4LDExNy4yNDMsNjcuNTA3LDExNy4yNDN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNEMTFEMkYiIGRhdGEtb2xkX2NvbG9yPSIjZDExZDJmIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" />
                                  </a>My0yNS41MzNjMC03LjcwMSwzLjQ1NC0xNC4xMzMsOC44ODYtMTkuNDY3QzE4Ny45MzcsMTIwLDE5My42NiwxMTYuNiwxOTkuOTI3LDExNi42eiAgICAgTTEzMy43MTUsMTE3LjI0M2MxMy45NzEsMCwyNS4yOTMsMTEuMzI2LDI1LjI5MywyNS4yOTNjMCwxMy45NjgtMTEuMzI1LDI1LjI5My0yNS4yOTMsMjUuMjkzICAgIGMtMTMuOTY4LDAtMjUuMjkzLTExLjMyNS0
                                </td>
                            </tr>
                        </table>

                    </div> -->
                </div>
            </div>
        </div>
        <div class="img-bx-tp-phts mrg-t-b-20-px">
            <div class="rp-img-bx-22">
                <div class="ad-bx-tp-1 font-fmly-ar bg-fff lght-bx-shdw mrg-b-10 ">
                    <div class="fltr-nv-lnk-bx lght-bx-shdw">
                        <div class="lft-txt-tp-1 clearfix">
                            <span class="lft-txt-tp-1-m"></span>
                            About Mario mandez
                            <span class="float-left lft-txt-tp-1-l img-thmp-fl"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                            <span class="float-right lft-txt-tp-1-r"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="bg-f1f1f1 pd-20-all mrg-0-auto add-opn-bx">
                            <div class="add-quickly-products-1 mrg-0-auto">
                                ijdjaskdjk
                            </div>
                        </div>
                        <div class="fltr-nav-tp-1">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Contacts and basic info
                                                <span class="up-arrow">&nbsp;</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Traders info
                                                <span class="up-arrow">&nbsp;</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">investor information
                                                <span class="up-arrow">&nbsp;</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Branches information
                                                <span class="up-arrow">&nbsp;</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="navbar-text">
									     <form class="form-block" role="search">
										    <input type="text" class="form-control lght-bx-shdw qck-src-tp-23">
										    <span class="has-badge search-btn-1" data-count="5">
										      <i class="material-icons ser-icn">search</i>
										    </span>
										</form>
								    </span>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="grd-bx-tp-fl-1">
                        <div class="bx-tp-info-bx">
                            <table>
                                <tr>
                                    <td class="align-top">
                                        <div class="bx-tp-info-bx-tp mrg-0-auto">
                                            <table class="wdt-100-prc">
                                                <tr>
                                                    <td class="align-middle wdt-150 text-center">
                                                        <img class="lazy img-fluid bx-shdw-right img-tp-15" src="images/profilephoto.jpeg">
                                                    </td>
                                                    <td class="pd-lft-25 align-middle">
                                                        <div class="lft-txt-tp-1 mrg-b-10">E S S M Power Control Switch Gears Manufacturing Llc</div>
                                                        <div class="bx-tp-catgr-bx">
                                                            <span class="flw-txt-2">Security Surveillance Systems & Equipment Installation | </span><span class="flw-txt-2">Security Control Equipment & Systems </span>
                                                            <span class="mr-view-tp-1">..more</span>
                                                            <span class="flw-txt-2 more-view-tp">Security Surveillance Systems & Equipment Installation | </span>
                                                            <span class="flw-txt-2 more-view-tp">Security Control & Alarm Equipment Trading | </span>
                                                            <span class="flw-txt-2 more-view-tp">Security Control Equipment & Systems </span>
                                                        </div>
                                                        <div class="flw-txt-2 clr-525252 mrg-t-10">United Arab Bank Building, Office M-02, Khalifa Street, Abu Dhabi,PO Box 90179,</div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- <div class="cont-bx-tp-1 mrg-t-10">
                                                <ul class="nav nav-fill">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link"><span class="mrg-r-10"><i class="fa fa-phone"></i></span>+971-525995503</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link"><span class="mrg-r-10"><i class="fa fa-envelope"></i></span>Email</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link"><span class="mrg-r-10"><i class="fa fa-globe"></i></span>web</a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <div class="cnt-abt-bx-1 mrg-t-10 mrg-b-20">
                                                <ul class="nav nav-fill">
                                                    <li class="nav-item">
                                                        <a href="#" class="lnk-tp-bx-fl-1">
                                                            <div class="lnk-tp-bx-fl-1-icn"><i class="fa fa-phone"></i></div>
                                                            <div class="lnk-tp-bx-fl-1-txt">+971-525995503</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="lnk-tp-bx-fl-1">
                                                            <div class="lnk-tp-bx-fl-1-icn"><i class="fa fa-envelope"></i></div>
                                                            <div class="lnk-tp-bx-fl-1-txt">Email</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="lnk-tp-bx-fl-1">
                                                            <div class="lnk-tp-bx-fl-1-icn"><i class="fa fa-globe"></i></div>
                                                            <div class="lnk-tp-bx-fl-1-txt">web</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="lnk-tp-bx-fl-1">
                                                            <div class="lnk-tp-bx-fl-1-icn"><i class="fa fa-users" aria-hidden="true"></i></div>
                                                            <div class="lnk-tp-bx-fl-1-txt">No of partners:125</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="lnk-tp-bx-fl-1">
                                                            <div class="lnk-tp-bx-fl-1-icn"><i class="fa fa-bank" aria-hidden="true"></i></div>
                                                            <div class="lnk-tp-bx-fl-1-txt">No of investers:125</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="shr-bx-tp-1 mrg-b-10">
                                                <div class="shr-bx-tp-1-tp pd-10-all">
                                                    <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-codiepie" aria-hidden="true"></i></span>
                                                    Description
                                                </div>
                                                <div class="shr-bx-tp-1-md">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                            <div class="shr-bx-tp-1 mrg-b-10">
                                                <div class="shr-bx-tp-1-tp pd-10-all">
                                                    <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-users" aria-hidden="true"></i></span>
                                                    Mario mandez's partners
                                                </div>
                                                <div class="shr-bx-tp-1-md">
                                                    <div id="ad-box-1" class="ad-box-ns owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shr-bx-tp-1 mrg-b-10">
                                                <div class="shr-bx-tp-1-tp pd-10-all">
                                                    <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-bank" aria-hidden="true"></i></span>
                                                    Mario mandez's Investors
                                                </div>
                                                <div class="shr-bx-tp-1-md">
                                                    <div id="ad-box-2" class="ad-box-ns owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="prt-bx-tp-78 text-center">
                                                                <a href="#" class="prt-lnk-1">
                                                                    <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                                    <div class="nm-tp-12">Emaar Properties</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pd-lft-10 align-top wdt-100-prc">
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Company Type
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">Security Surveillance Systems & Equipment Installation</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Activities
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">Security Surveillance Systems & Equipment Installation</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Trade name
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">E S S M Power Control Switch Gears Manufacturing Llc</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Legal Status
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">LLC</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Licence no
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">9895243252</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Registration Number
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">9895243252</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Issue Date
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">29-04-1992</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Expiry Date
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">29-04-1992</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                Fax Number
                                            </div>
                                            <div class="shr-bx-tp-1-ft">
                                                <ul class="list-unstyled lst-tp-1">
                                                    <li class="">29-04-1992</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shr-bx-tp-1 mrg-b-10">
                                            <div class="shr-bx-tp-1-tp pd-10-all">
                                                <span class="shr-bx-tp-1-tp-icn float-left mrg-r-10"><i class="fa fa-codiepie" aria-hidden="true"></i></span>
                                                Description
                                            </div>
                                            <div class="shr-bx-tp-1-md">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            <!-- <div class="bx-tp-info-bx-tp mrg-0-auto">
                                <table class="wdt-100-prc">
                                    <tr>
                                        <td class="align-middle wdt-150 text-center">
                                            <img class="lazy img-fluid bx-shdw-right img-tp-15" src="images/profilephoto.jpeg">
                                        </td>
                                        <td class="pd-lft-25 align-middle">
                                            <div class="lft-txt-tp-1 mrg-b-10">E S S M Power Control Switch Gears Manufacturing Llc</div>
                                            <div class="bx-tp-catgr-bx">
                                                <span class="flw-txt-2">Security Surveillance Systems & Equipment Installation | </span><span class="flw-txt-2">Security Control Equipment & Systems </span>
                                                <span class="mr-view-tp-1">..more</span>
                                                <span class="flw-txt-2 more-view-tp">Security Surveillance Systems & Equipment Installation | </span>
                                                <span class="flw-txt-2 more-view-tp">Security Control & Alarm Equipment Trading | </span>
                                                <span class="flw-txt-2 more-view-tp">Security Control Equipment & Systems </span>
                                            </div>
                                            <div class="flw-txt-2 clr-525252 mrg-t-10">United Arab Bank Building, Office M-02, Khalifa Street, Abu Dhabi,PO Box 90179,</div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="cont-bx-tp-1 mrg-t-10">
                                    <ul class="nav nav-fill">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><span class="mrg-r-10"><i class="fa fa-phone"></i></span>+971-525995503</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><span class="mrg-r-10"><i class="fa fa-envelope"></i></span>Email</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><span class="mrg-r-10"><i class="fa fa-globe"></i></span>web</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bx-tp-prt mrg-tp-20">
                                    <div class="lft-txt-tp-1 clearfix">
                                        <span class="lft-txt-tp-1-m"></span>
                                        Mario mandez's partners
                                        <span class="float-left lft-txt-tp-1-l img-thmp-fl"><i class="fa fa-users" aria-hidden="true"></i></span>
                                        <span class="float-right lft-txt-tp-1-r sld-tgll-add"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="bx-tp-h-1 mrg-tp-20">
                                        <div class="bx-tp-h-1-rp">
                                            <div id="ad-box-1" class="ad-box-ns owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bx-tp-prt mrg-tp-20">
                                    <div class="lft-txt-tp-1 clearfix">
                                        <span class="lft-txt-tp-1-m"></span>
                                        Mario mandez's investors
                                        <span class="float-left lft-txt-tp-1-l img-thmp-fl"><i class="fa fa-users" aria-hidden="true"></i></span>
                                        <span class="float-right lft-txt-tp-1-r sld-tgll-add"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="bx-tp-h-1 mrg-tp-20">
                                        <div class="bx-tp-h-1-rp">
                                            <div id="ad-box-2" class="ad-box-ns owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo1.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo2.png">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="prt-bx-tp-78 text-center">
                                                        <a href="#" class="prt-lnk-1">
                                                            <img class="img-tp-pr-lnk" src="images/logo3.jpg">
                                                            <div class="nm-tp-12">Emaar Properties</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front_end.modules.footer')



        <script>
            var InstaFrame =$('#instagram-embed-0');
            InstaFrame.ready(function() {

                setTimeout(removeinstaframe, 5000);

                function removeinstaframe() {
                    console.log("SS");

                    InstaFrame.load(function(){
                        InstaFrame.contents().find('body').hide();
                    });
                }

            });


        </script>

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
            $('#main_users_repeater').repeater({repeaters: [{
                    // (Required)
                    // Specify the jQuery selector for this nested repeater
                    selector: '.inner-repeater'
                }],
                show:function(){$(this).slideDown()},
                hide:function(e){confirm("Are you sure you want to delete this element?")&&$(this).slideUp(e)}
            });

            $("#main_user_form").validate({
                invalidHandler: function (e, r) {
                    console.log("main_user_form");
                }
            })
            setTimeout(add_main_user_form_roles, 1000);
        });

        function add_main_user_form_roles(){
            var oFormData = $('#main_user_form').serializeArray();
            for (var i = 0; i < oFormData.length; i++){

                if (oFormData[i]['name'].indexOf('company_user_nationality') > -1)
                {
                    var FormElemant_Name = $( "select[name='"+oFormData[i]['name']+"']" ).attr('name');
                }else{
                    var FormElemant_Name = $( "input[name='"+oFormData[i]['name']+"']" ).attr('name');
                }
                var FormElemant = $( "input[name='"+oFormData[i]['name']+"']" );
                FormElemant.rules( "remove" );

                if(FormElemant_Name.indexOf('company_user_first_name') > -1){
                    FormElemant.rules( "add", {required: true, minlength: 3});
                }
                if(FormElemant_Name.indexOf('company_user_last_name') > -1){
                    FormElemant.rules( "add", {required: true});
                }
                if(FormElemant_Name.indexOf('company_user_gender') > -1){
                    FormElemant.rules( "add", {required: true});
                }
                if(FormElemant_Name.indexOf('company_user_designation') > -1){
                    FormElemant.rules( "add", {required: true});
                }
                if(FormElemant_Name.indexOf('company_user_dob') > -1){
                    FormElemant.rules( "add", {required: true});
                }
                if(FormElemant_Name.indexOf('company_user_mobile') > -1){
                    FormElemant.rules( "add", {required: true});
                }
                if(FormElemant_Name.indexOf('company_user_emailcompany_user_email') > -1){
                    var ConfirmEmail = FormElemant_Name.replace("company_user_email", "company_user_email_confirmation");
                    FormElemant.rules( "add", {required: true,  equalTo:'[name="'+ConfirmEmail+'"]'});
                }
                if(FormElemant_Name.indexOf('company_user_email_confirmation') > -1){
                    var ConfirmEmail = FormElemant_Name.replace("company_user_email_confirmation", "company_user_email");
                    FormElemant.rules( "add", {required: true,  equalTo:'[name="'+ConfirmEmail+'"]'});
                }
                if(FormElemant_Name.indexOf('company_user_password') > -1){
                    var ConfirmPass = FormElemant_Name.replace("company_user_password", "company_user_password_confirmation");
                    FormElemant.rules( "add", {required: true,minlength: 6,  equalTo:'[name="'+ConfirmPass+'"]'});
                }
                if(FormElemant_Name.indexOf('company_user_password_confirmation') > -1){
                    var ConfirmPass = FormElemant_Name.replace("company_user_password_confirmation", "company_user_password");
                    FormElemant.rules( "add", {required: true,minlength: 6,  equalTo:'[name="'+ConfirmPass+'"]'});
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

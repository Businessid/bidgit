<script>
	 function initMap() {
        var myLatLng = {lat: 25.1972, lng: 55.2744};

        var map = new google.maps.Map(document.getElementById('bx-emp-map'), {
          zoom: 6,
          center: myLatLng,
          styles:[
				  {
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#ebe3cd"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#523735"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#f5f1e6"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative",
				    "elementType": "geometry.stroke",
				    "stylers": [
				      {
				        "color": "#c9b2a6"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.land_parcel",
				    "elementType": "geometry.stroke",
				    "stylers": [
				      {
				        "color": "#dcd2be"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.land_parcel",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#ae9e90"
				      }
				    ]
				  },
				  {
				    "featureType": "landscape.natural",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#dfd2ae"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#dfd2ae"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#93817c"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#a5b076"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#447530"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#f5f1e6"
				      }
				    ]
				  },
				  {
				    "featureType": "road.arterial",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#fdfcf8"
				      }
				    ]
				  },
				  {
				    "featureType": "road.arterial",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#c0c0c0"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#f8c967"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#d11d2f"
				      },
				      {
				        "weight": 1.5
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry.stroke",
				    "stylers": [
				      {
				        "color": "#e9bc62"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway.controlled_access",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#e98d58"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway.controlled_access",
				    "elementType": "geometry.stroke",
				    "stylers": [
				      {
				        "color": "#db8555"
				      }
				    ]
				  },
				  {
				    "featureType": "road.local",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#806b63"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.line",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#dfd2ae"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.line",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#8f7d77"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.line",
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#ebe3cd"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.station",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#dfd2ae"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#b9d3c2"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#92998d"
				      }
				    ]
				  }
				]
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }

    </script>
<!--<script src="{{ URL::asset('front_end/js/jquery-3.3.1.min.js') }}"></script>-->
<script  src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('front_end/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('front_end/js/tether.min.js') }}"></script>
<script src="{{ URL::asset('front_end/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('front_end/js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front_end/js/step.js') }}"></script>
<script>
    $(function(){
        $('#brand-step').step({
            effect: 'slide'
        });
    });
    </script>
<script src="{{ URL::asset('front_end/js/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('front_end/js/zoom-slider.js') }}"></script>
<script type="text/javascript">
        $(document).ready( function () {
            //If your <ul> has the id "glasscase"
            $('#glasscase').glassCase({ 'thumbsPosition': 'bottom', 'widthDisplay' : 560});
        });
    </script>
<script type="text/javascript">
	$(document).ready(function(){
            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
</script>
<script src="{{ URL::asset('front_end/js/jquery.justifiedGallery.min.js') }}"></script>
<script src="{{ URL::asset('front_end/js/jquery.lazy.min.js') }}"></script>
<script src="{{ URL::asset('front_end/js/select2.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
     //$('#pages').show();
});
</script>
<script>
$(document).ready(function() {
     $('#hot-deals,#best-seller').owlCarousel({
	    loop:false,
	    margin:10,
	    dots:false,
	    nav:true,
	    navText: ["<span class='slide-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='slide-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:1
	});  
     
});

$(document).ready(function() {
	// $("#iii").click(function () {
	// 	alert(1);
 //    $(".wsmenu-submenu").show();
	// });

	// $(document).click(function (e) {
	//     if (!$(e.target).hasClass("iii") 
	//         && $(e.target).parents(".wsmenu-submenu").length === 0) 
	//     {
	//         $(".wsmenu-submenu").hide();
	//     }
	// });

	$("#wsmenu-submenu-more").click(function(e){
    $(".wsmenu-submenu").show();
     e.stopPropagation();
});

$(".wsmenu-submenu").click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
    $(".wsmenu-submenu").hide();
});


});

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });


    $("#new-address").click(function(){
    $("#adding-new-address").show();
	}); 

    $("#reset-pass").click(function(){
    $(".reset-password-sec").show();
	}); 
   	$(".btn-secondary").click(function(){
    $(".reset-password-sec").hide();
	}); 

	$("#add-address").click(function(){
    $("#addnew-address").show();
	}); 
   	$("#remove-address").click(function(){
    $("#addnew-address").hide();
	});

	$("#qualification-add-btn").click(function(){
    $("#new-qualification").show();
	}); 
   	$("#remove-qualific").click(function(){
    $("#new-qualification").hide();
	}); 

	$("#add-address").click(function() {
    $('html,body').animate({
        scrollTop: $("#addnew-address").offset().top},
        'slow');
	});

	$("#remove-address").click(function() {
    $('html,body').animate({
        scrollTop: $("#addnew-address").offset().top},
        'slow');
	});

	$("#edit-cv-btn").click(function(){
    $("#edit-cv-form").show();
    $("#hero-cv").hide();
	}); 

	// $("#order-decline").click(function(){
   // $(".decline-option-wrap").show();
  // $(this).addClass("decline-active");
 // }); 

});
</script>
<script src="{{ URL::asset('front_end/js/jquery.nice-select.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
  $('.nice-select').niceSelect();
});
</script>
<script>

$(document).ready(function() {
	$('.lazy').lazy({
      effect: "fadeIn",
      effectTime: 2000,
      threshold: 0
    });
      var boxParentHeight = $('.vert-algn-mdl-cnt').parent().innerHeight();
      var boxHeigth = $('.vert-algn-mdl-cnt').innerHeight();
      var maginTop= (boxParentHeight-boxHeigth)/2;
      $('.vert-algn-mdl-cnt').parent().css('padding-top', maginTop+'px');
      
      $("#bx-tp-js-gallery").justifiedGallery(
	      {
			rowHeight : 100,
			lastRow : 'justify',
			margins : 1
	      }
      );
      $("#bx-tp-js-gallery-2").justifiedGallery(
	      {
			rowHeight : 100,
			lastRow : 'justify',
			margins : 1
	      }
      )
       $('#bx-tp-rl-img-glry').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:4,
	    lazyLoad: true
	});
        $('#bx-tp-rl-vdo-glry').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:4,
	    lazyLoad: true
	});
        $('#product-slider-tp-1').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:2,
	    lazyLoad: true
	});
        $('#product-slider-tp-2').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:2,
	    lazyLoad: true
	});
        $('#product-slider-tp-3').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:2,
	    lazyLoad: true
	});
        $('#product-slider-tp-4').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:2,
	    lazyLoad: true
	});
        $('#new-account-box').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    navText: ["<span class='icon-owl icon-arrow-left7'><i class='fa fa-angle-left' aria-hidden='true'></i></span>","<span class='icon-owl icon-arrow-right7'><i class='fa fa-angle-right' aria-hidden='true'></i></span>"],
	    items:3,
	    lazyLoad: true
	});
});
</script>
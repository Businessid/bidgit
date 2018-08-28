/*
 * Obtain user location and validate phone number
 * User location tracking source: International Telephone Input v10.0.6
 */

 $("#company_mobile").intlTelInput({
  hiddenInput: "full_phone",
  initialCountry: "auto",
  preferredCountries:["ae"],
  separateDialCode: true,
  geoIpLookup: function(callback) {
    $.get('//ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  utilsScript: "/front_end/js/utils.js" // just for formatting/placeholders etc
});
 $(".mobile").intlTelInput({
  hiddenInput: "full_phone",
  initialCountry: "auto",
  preferredCountries:["ae"],
  separateDialCode: true,
  geoIpLookup: function(callback) {
    $.get('//ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  utilsScript: "/front_end/js/utils.js" // just for formatting/placeholders etc
});
/*
 * Let us validate the phone number
*/
var telInput = $("#company_mobile"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");
  
  var tel2Input = $(".mobile"),
  perrorMsg = $("#p-error-msg"),
  pvalidMsg = $("#p-valid-msg");

var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

var reset1 = function() {
  tel2Input.removeClass("error");
  perrorMsg.addClass("hide");
  pvalidMsg.addClass("hide");
};
// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);

tel2Input.blur(function() {
  reset1();
  if ($.trim(tel2Input.val())) {
    if (tel2Input.intlTelInput("isValidNumber")) {
      pvalidMsg.removeClass("hide");
    } else {
      tel2Input.addClass("error");
      perrorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
tel2Input.on("keyup change", reset1);
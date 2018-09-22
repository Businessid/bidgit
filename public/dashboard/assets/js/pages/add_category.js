var Add_deal = {
    init: function () {
        var Category_icon_placeholder = $("#category_icon").attr("placeholder");
        $("#m_form_1").validate({
            rules: {
                // category_id: {required: !0},
                // merchant_id: {required: !0},
                // deal_description: {required: !0, minlength: 6},
                // email: {required: !0, email: !0, minlength: 10},
                // url: {required: !0},
                // digits: {required: !0, digits: !0},
                // creditcard: {required: !0, creditcard: !0},
                // phone: {required: !0, phoneUS: !0},
                // option: {required: !0},
                // options: {required: !0, minlength: 2, maxlength: 4},
                // memo: {required: !0, minlength: 10, maxlength: 100},
                // checkbox: {required: !0},
                // checkboxes: {required: !0, minlength: 1, maxlength: 2},
                // radio: {required: !0}
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
            }
        }), $("#parent_id").select2({
        }), $("#category_icon").select2({
            placeholder: Category_icon_placeholder,
            templateSelection: iformat,
            templateResult: iformat,
               allowHtml: true
        }), $("#attribute_repeater").repeater({
            initEmpty: !1, defaultValues: {"text-input": "foo"}, show: function () {
                $(this).slideDown()
            }, hide: function (e) {
                $(this).slideUp(e)
            }
        }), $("#options_repeater").repeater({
            initEmpty: !1, defaultValues: {"text-input": "foo"}, show: function () {
                $(this).slideDown()
            }, hide: function (e) {
                $(this).slideUp(e)
            }
        }),$("#category_icon").datetimepicker({
            format: "dd MM yyyy - HH:ii P",
            showMeridian: !0,
            todayHighlight: !0,
            autoclose: !0,
            pickerPosition: "bottom-left"
        }),$("#deal_end_date").datetimepicker({
            format: "dd MM yyyy - HH:ii P",
            showMeridian: !0,
            todayHighlight: !0,
            autoclose: !0,
            pickerPosition: "bottom-left"
        }),$("#coupon_valid_from").datetimepicker({
            format: "dd MM yyyy - HH:ii P",
            showMeridian: !0,
            todayHighlight: !0,
            autoclose: !0,
            pickerPosition: "bottom-left"
        }), $("#coupon_valid_to").datetimepicker({
            format: "dd MM yyyy - HH:ii P",
            showMeridian: !0,
            todayHighlight: !0,
            autoclose: !0,
            pickerPosition: "bottom-left"
        }),$("#original_price, #discount_amount, #final_price").TouchSpin({
            buttondown_class: "btn btn-secondary",
            buttonup_class: "btn btn-secondary",
            min: -1e9,
            max: 1e9,
            decimals: 2,
            step: 0.1,
            stepinterval: 50,
            maxboostedstep: 1e7,
            postfix: "$"
        }), $("#deal_discount").TouchSpin({
            buttondown_class: "btn btn-secondary",
            buttonup_class: "btn btn-secondary",
            min: -1e9,
            max: 1e9,
            step: 0.05,
            decimals: 2,
            stepinterval: 50,
            maxboostedstep: 1e7,
            postfix: "%"
        }), $(".category_description").each(function () {
            $(this).summernote({
                height: 300,                 // set editor height
            });
        });
        function iformat(icon) {
            var originalOption = icon.element;
            return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '</span>');
        }

    }
};


jQuery(document).ready(function () {
    Add_deal.init()
});

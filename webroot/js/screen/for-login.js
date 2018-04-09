
(function ($) {
    "use strict";

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == 2){
                showValidate(input[i],2);
                check=false;
            }else if(validate(input[i]) == 1){
                showValidate(input[i],1);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
            hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('name') == 'email') {
            if($(input).val().trim() == ''){
                return 2;
            }
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return 1;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return 2;
            }
        }
    }

    function showValidate(input,validate_type) {
        var thisAlert = $(input).parent();
        if(validate_type == 1 && $(input).attr('name') == 'email')
        {
            $(thisAlert).attr("data-validate", "nhap email chua dung chuan (vd: abc@xyz.com)");
        }

        if(validate_type == 2 && $(input).attr('name') == 'email')
        {
            $(thisAlert).attr("data-validate", "Please enter Email");
        }

        $(thisAlert).addClass('alert-validate');

    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

})(jQuery);

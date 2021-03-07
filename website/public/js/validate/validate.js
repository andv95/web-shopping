
$(document).ready(function () {

/**==================================================
                Validate form Check Out
================================================ * */

//======================================================
/**
 *  Js Logic Form Address Not User
*/
//======================================================

    $('.main__header-not-user-not-user').hide();

    $('.main__header__task-change-not-user').on('click', function () {
        $('.form-not-user-wrap').slideDown();
    });

    $('#js_get_form_checkout').on('click', function () {
        var a = $('#name').val();
        var b = $('#phone').val();
        var c = $('#email').val();
        var d = $('#address').val();
        var e = $('#aparment').val();

        if (a.length == 0) {
            $('#js_required_input_name').show();
            $('#name').parent().css("border", "1px solid #ff6633");
        }else {
            $('#js_required_input_name').hide();
        }
        if (b.length == 0) {
            $('#js_required_input_phone').show();
            $('#phone').parent().css("border", "1px solid #ff6633");
        }else {
            $('#js_required_input_phone').hide();
        }
        if (c.length == 0) {
            $('#js_required_input_email').show();
            $('#email').parent().css("border", "1px solid #ff6633");
        }else {
            $('#js_required_input_email').hide();
        }
        if (d.length == 0) {
            $('#js_required_input_address').show();
            $('#address').parent().css("border", "1px solid #ff6633");
        }else {
            $('#js_required_input_address').hide();
        }
        if (e.length == 0) {
            $('#js_required_input_aparment').show();
            $('#aparment').parent().css("border", "1px solid #ff6633");
        }else {
            $('#js_required_input_aparment').hide();
        }

        var name = new RegExp('^[^0-9]{3,20}$');
        var phone = new RegExp('^[0-9]{9,11}$');
        var email = new RegExp('^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$');

        if(!name.test(a)){
            $("#js_format_input_name").show();
            $('#name').parent().css("border", "1px solid #ff6633");
        }else{
            $("#js_format_input_name").hide();
        }

        if(!phone.test(b)){
            $("#js_format_input_phone").show();
            $('#phone').parent().css("border", "1px solid #ff6633");
        }else {
            $("#js_format_input_phone").hide();
        }

        if(!email.test(c)) {
            $("#js_format_input_email").show();
            $('#email').parent().css("border", "1px solid #ff6633");
        }else {
            $("#js_format_input_email").hide();
        }

        if ((a != 0) && (b != 0) && (c != 0) && (d != 0) && (e != 0) && phone.test(b) && name.test(a)) {
            $('.js_name_checkout_not_user').text(a);
            $('.js_phone_checkout_not_user').text(b);
            $('.js_address_checkout_not_user').text(d);


            $('.main__header-not-user-not-user').show();
            $('.form-not-user-wrap').slideUp();
        }
    });

});

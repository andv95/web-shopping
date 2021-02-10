
'use strict';

;( function ( document, window, index )
{
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
        input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
    });
}( document, window, 0 ));

$(document).ready(function () {

    $("#email").keyup(function () {
        $("#label-email").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-email").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#password").keyup(function () {
        $("#label-password").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-password").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#name").keyup(function () {
        $("#label-name").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-name").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#your-hometown").keyup(function () {
        $("#label-your-hometown").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-your-hometown").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#lucky-number").keyup(function () {
        $("#label-lucky-number").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-lucky-number").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#phone").keyup(function () {
        $("#label-phone").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-phone").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#address").keyup(function () {
        $("#label-address").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-address").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#aparment").keyup(function () {
        $("#label-aparment").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-aparment").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $("#textarea-question").keyup(function () {
        $("#label-your-textarea-question").css("opacity", "1");
        $(this).css({"padding-bottom": "10px", "padding-top": "20px"});
        if ($(this).val().length == 0) {
            $("#label-your-textarea-question").css("opacity", "0")
            $(this).css({"padding-bottom": "15px", "padding-top": "15px"});
        }
    });

    $('.form-input-style-input').focusin(function () {
        $(this).parent().css("border", "1px solid #555");
    });

    $('.form-input-style-input').focusout(function () {
        $(this).parent().css("border", "1px solid #eeeeee");
    });

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
        }
        if (b.length == 0) {
            $('#js_required_input_phone').show();
            $('#phone').parent().css("border", "1px solid #ff6633");

        }
        if (c.length == 0) {
            $('#js_required_input_email').show();
            $('#email').parent().css("border", "1px solid #ff6633");
        }
        if (d.length == 0) {
            $('#js_required_input_address').show();
            $('#address').parent().css("border", "1px solid #ff6633");
        }
        if (e.length == 0) {
            $('#js_required_input_aparment').show();
            $('#aparment').parent().css("border", "1px solid #ff6633");
        }


        if ((a != 0) && (b != 0) && (c != 0) && (d != 0) && (e != 0)) {
            $('.js_name_checkout_not_user').text(a);
            $('.js_phone_checkout_not_user').text(b);
            $('.js_address_checkout_not_user').text(d);


            $('.main__header-not-user-not-user').show();
            $('.form-not-user-wrap').hide();
        }
    });

    // if()


//=====================================================
    /**
     *
     *   Style Input File Question
     *
     */
//=====================================================



});

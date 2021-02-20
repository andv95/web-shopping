
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


//=====================================================
    /**
     *
     *   Style Input File Question
     *
     */
//=====================================================



});

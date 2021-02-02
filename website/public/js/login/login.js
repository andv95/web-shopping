$(document).ready(function (){

    $("#email").keyup(function(){
        $("#label-email").css("opacity","1");
        $(this).css({"padding-bottom":"10px", "padding-top":"20px"});
        console.log($(this).val().length);
        if($(this).val().length == 0){
            $("#label-email").css("opacity","0")
            $(this).css({"padding-bottom":"15px", "padding-top":"15px"});
        }
    });

    $("#password").keyup(function(){
        $("#label-password").css("opacity","1");
        $(this).css({"padding-bottom":"10px", "padding-top":"20px"});
        console.log($(this).val().length);
        if($(this).val().length == 0){
            $("#label-password").css("opacity","0")
            $(this).css({"padding-bottom":"15px", "padding-top":"15px"});
        }
    });

    $("#name").keyup(function(){
        $("#label-name").css("opacity","1");
        $(this).css({"padding-bottom":"10px", "padding-top":"20px"});
        console.log($(this).val().length);
        if($(this).val().length == 0){
            $("#label-name").css("opacity","0")
            $(this).css({"padding-bottom":"15px", "padding-top":"15px"});
        }
    });

    $("#your-hometown").keyup(function(){
        $("#label-your-hometown").css("opacity","1");
        $(this).css({"padding-bottom":"10px", "padding-top":"20px"});
        console.log($(this).val().length);
        if($(this).val().length == 0){
            $("#label-your-hometown").css("opacity","0")
            $(this).css({"padding-bottom":"15px", "padding-top":"15px"});
        }
    });

    $("#lucky-number").keyup(function(){
        $("#label-lucky-number").css("opacity","1");
        $(this).css({"padding-bottom":"10px", "padding-top":"20px"});
        console.log($(this).val().length);
        if($(this).val().length == 0){
            $("#label-lucky-number").css("opacity","0")
            $(this).css({"padding-bottom":"15px", "padding-top":"15px"});
        }
    });

    $('.form-input-style-input').focusin(function (){
       $(this).parent().css("border","1px solid #555");
    });

    $('.form-input-style-input').focusout(function (){
        $(this).parent().css("border","1px solid #eeeeee");
    });


});

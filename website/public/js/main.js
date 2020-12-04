function hideWriteReview() {
    var hideWriteReview = document.getElementById('growreview');
    if (hideWriteReview.clientHeight) {
        hideWriteReview.style.height = 0;
    } else {
      var wrapper = document.querySelector('.form--review-collapse');
      hideWriteReview.style.height = wrapper.clientHeight + "px";
    }
  };

function hideWriteQuestion(){
    var hideWriteQuestion = document.getElementById('growquestion');
    if(hideWriteQuestion.clientHeight){
        hideWriteQuestion.style.height = 0;
    }else{
        var wrapper = document.querySelector('.form--question-collapse');
        hideWriteQuestion.style.height = wrapper.clientHeight + "px";
    }
};
$(document).ready(function(){
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
      });

    // Hover Dropdown Menu
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
    // OwlCarousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        }
    });
    // Slide show/hide Your Cart
    $("#icon-close" ).click(function() {  
        console.log(1)   
        if($('#your-cart:visible').length){
            console.log(2)
            $('#your-cart').hide("slide", { direction: "right" }, 12000);
        }
        else{
            console.log(3)
            $('#your-cart').show("slide", { direction: "right" }, 2000);
        } 
    });
    $("#cart" ).click(function() {  
        console.log(1)   
        if($('#your-cart:visible').length){
            console.log(2)
            $('#your-cart').hide("slide", { direction: "right" }, 12000);
        }
        else{
            console.log(3)
            $('#your-cart').show("slide", { direction: "right" }, 2000);
        } 
    });
    // var x = 1;
    // $(".js--quantity").attr('value',x);
    // $(".fa-minus").click(function(){
    //     $(".js--quantity").attr('value', --x);
    // });
    // $(".fa-plus").click(function(){
    //     $(".js--quantity").attr('value', ++x);
    // });
    $(function () {
        $( "#numberBox" ).change(function() {
           var max = parseInt($(this).attr('max'));
           var min = parseInt($(this).attr('min'));
           if ($(this).val() > max)
           {
               $(this).val(max);
           }
           else if ($(this).val() < min)
           {
               $(this).val(min);
           }       
        }); 
    });
    var x = $(".js--quantity").val();
    $(".fa-minus").click(function(){
        $(".js--quantity").attr('value', --x);
        console.log(x);
    });

    $(".fa-plus").click(function(){
        $(".js--quantity").attr('value', ++x);
    });

    // start vote detail
    $(function (){
        var star = '.star',
            selected = '.selected';
        
        $(star).on('click', function(){
          $(selected).each(function(){
            $(this).removeClass('selected');
          });
          $(this).addClass('selected');
        });
      });

    //   Button owlcarousel
    $(".owl-prev").click(function(){
        $(this).css("border","unset");
    });
    $(".owl-next").click(function(){
        $(this).css("border","unset");
    });

    //Giỏ hàng - Cart
    var yourCart = $(".js-your-cart"); 
    var btnCart = $(".btn-your-cart");
    var closeCart = $(".close")[0];
    var checkOut = $(".cart__checkout")[0];

    btnCart.click = function(){
        yourCart.show();
        console.log(1);
    }

    // Remove Cart
    var removeCart = $(".btn-danger");


});




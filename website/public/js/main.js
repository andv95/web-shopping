/*
    Buton change quanty product
*/
   function addMinusPlus(){
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
}

/**
 * Input Validate
 */
(function($) {
    $.fn.inputFilter = function(inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            }
        });
    };
}(jQuery));


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
function AddCart(id){
    // console.log(id);
    $.ajax({
        url: 'add-cart/'+id,
        type: 'GET',
    }).done(function(res){
        RenderCart(res);
    });
}

// Delete Item Cart
$('.cart__scroll').on('click', '#close', function(){
    $.ajax({
        url:'delete-item-cart/'+$(this).data("id"),
        type:'GET',
    }).done(function(res){
        RenderCart(res);
    });
});
function RenderCart(res){
    $('.cart__scroll').empty();
    $('.cart__scroll').html(res);
    console.log($('#js--quanty--cart').val());
    $('#js-quanty--cart-show').text($('#js--quanty--cart').val()); 
}


function RenderListCart(res){
    $('#list--cart').empty();
    console.log(res);
    $('#list--cart').html(res);
}
$(document).on('click', '.close--item-list-cart', function(){
    $.ajax({
        url:'del-item-list-cart/' + $(this).data("id"),
        type:'GET',
    }).done(function(res){
        RenderListCart(res);
        addMinusPlus();
    })
});
function saveItemListCart(id){
    console.log(id);
}

$(document).ready(function(){
    addMinusPlus();
    $('input').inputFilter(function(value) {
        return /^\d*$/.test(value);
      });

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
        $('#your-cart').hide("slide", { direction: "right" }, 500);
    });
    $("#cart" ).click(function() {
        $('#your-cart').show("slide", { direction: "right" }, 500);
    });
    
    
    
    
    /**
     * Delete item in list cart
     */


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
    }

    // Remove Cart
    var removeCart = $(".btn-danger");


});




/*
    Buton change quanty product
*/
function addMinusPlus() {
    var proQty = $('.pro-qty');
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
(function ($) {
    $.fn.inputFilter = function (inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {
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

/**
 * Collapse Infomation Product
 */
function hideCollapseContentOne() {
    var hideWriteReview = document.getElementById('collapseContentOne');
    var hideWriteReview3 = document.getElementById('collapseContentThree');
    var hideWriteReview2 = document.getElementById('collapseContentTwo');
    var bgHeader1 = document.getElementById('headerCollapseOne');
    var bgHeader2 = document.getElementById('headerCollapseTwo');
    var bgHeader3 = document.getElementById('headerCollapseThree');
    var iconUp = document.getElementById('collapseIconOne');
    if (hideWriteReview.clientHeight) {
        hideWriteReview.style.height = 0;
        bgHeader1.classList.remove("boder-bottom");
        bgHeader1.classList.add("bg-header-hide");
        iconUp.classList.add("rotate-90-ccw");
        iconUp.classList.remove("rotate-90-cw");
    } else {
        var wrapper = document.querySelector('.collapse--info-content-1');
        hideWriteReview.style.height = wrapper.clientHeight + "px";
        hideWriteReview3.style.height = 0;
        hideWriteReview2.style.height = 0;
        bgHeader1.classList.add("bg-header", "boder-bottom");
        bgHeader1.classList.remove("bg-header-hide");
        bgHeader2.classList.add("bg-header-hide");
        bgHeader3.classList.add("bg-header-hide");
        iconUp.classList.add("rotate-90-cw");
        iconUp.classList.remove("rotate-90-ccw");
        $('html, body').animate({
            scrollTop: $(".collapse--info-content-1").offset().top
        }, 500);

    }

};

function hideCollapseContentTwo() {
    var hideWriteReview2 = document.getElementById('collapseContentOne');
    var hideWriteReview = document.getElementById('collapseContentTwo');
    var hideWriteReview3 = document.getElementById('collapseContentThree');
    var bgHeader1 = document.getElementById('headerCollapseOne');
    var bgHeader2 = document.getElementById('headerCollapseTwo');
    var bgHeader3 = document.getElementById('headerCollapseThree');
    var iconUp = document.getElementById('collapseIconTwo');
    if (hideWriteReview.clientHeight) {
        hideWriteReview.style.height = 0;
        bgHeader2.classList.add("bg-header-hide");
        bgHeader2.classList.remove("boder-bottom");
        iconUp.classList.add("rotate-90-ccw");
        iconUp.classList.remove("rotate-90-cw");
    } else {
        var wrapper = document.querySelector('.collapse--info-content-1');
        hideWriteReview.style.height = wrapper.clientHeight + "px";
        hideWriteReview3.style.height = 0;
        hideWriteReview2.style.height = 0;
        bgHeader2.classList.add("bg-header", "boder-bottom");
        bgHeader2.classList.remove("bg-header-hide");
        bgHeader1.classList.add("bg-header-hide");
        bgHeader3.classList.add("bg-header-hide");
        iconUp.classList.add("rotate-90-cw");
        iconUp.classList.remove("rotate-90-ccw");
        $('html, body').animate({
            scrollTop: $(".collapse--info-content-2").offset().top
        }, 500);

    }

};

function hideCollapseContentThree() {
    var hideWriteReview2 = document.getElementById('collapseContentOne');
    var hideWriteReview3 = document.getElementById('collapseContentTwo');
    var hideWriteReview = document.getElementById('collapseContentThree');
    var bgHeader1 = document.getElementById('headerCollapseOne');
    var bgHeader2 = document.getElementById('headerCollapseTwo');
    var bgHeader3 = document.getElementById('headerCollapseThree');
    var iconUp = document.getElementById('collapseIconThree');
    if (hideWriteReview.clientHeight) {
        hideWriteReview.style.height = 0;
        bgHeader3.classList.add("bg-header-hide");
        iconUp.classList.add("rotate-90-ccw");
        iconUp.classList.remove("rotate-90-cw");
    } else {
        var wrapper = document.querySelector('.collapse--info-content-3');
        hideWriteReview.style.height = wrapper.clientHeight + "px";
        hideWriteReview3.style.height = 0;
        hideWriteReview2.style.height = 0;
        iconUp.classList.add("rotate-90-cw");
        iconUp.classList.remove("rotate-90-ccw");
        $('html, body').animate({
            scrollTop: $(".collapse--info-content-3").offset().top
        }, 500);
        bgHeader3.classList.add("bg-header");
        bgHeader3.classList.remove("bg-header-hide");
        bgHeader1.classList.add("bg-header-hide");
        bgHeader2.classList.add("bg-header-hide");
    }

};

function AddCart(id) {
    $.ajax({
        url: 'add-cart/' + id,
        type: 'GET',
    }).done(function (res) {
        RenderCart(res);
    });
}

// Delete Item Cart
$('.cart__scroll').on('click', '#close', function () {
    $.ajax({
        url: 'delete-item-cart/' + $(this).data("id"),
        type: 'GET',
    }).done(function (res) {
        RenderCart(res);
    });
});

function RenderCart(res) {
    $('.cart__scroll').empty();
    $('.cart__scroll').html(res);
    console.log($('#js--quanty--cart').val());
    $('#js-quanty--cart-show').text($('#js--quanty--cart').val());
}

function RenderListCart(res) {
    $('#list--cart').empty();
    console.log(res);
    $('#list--cart').html(res);
}

$(document).on('click', '.close--item-list-cart', function () {
    $.ajax({
        url: 'del-item-list-cart/' + $(this).data("id"),
        type: 'GET',
    }).done(function (res) {
        RenderListCart(res);
        addMinusPlus();
    })
});

function saveItemListCart(id) {
    console.log(id);
}



$(document).ready(function () {

    $("#checkout-name-input").keyup(function () {
        $("#checkout-name").addClass('opacity-1');
        $("#checkout-name").removeClass('opacity-0');
        $(this).addClass('pd2');
        if ($(this).val().length == 0) {
            $("#checkout-name").addClass('opacity-0');
            $("#checkout-name").removeClass('opacity-1');
            $(this).removeClass('pd2');
        }
    });

    $("#checkout-address-input").keyup(function () {
        $("#checkout-address").addClass('opacity-1');
        $("#checkout-address").removeClass('opacity-0');
        if ($(this).val().length == 0) {
            $("#checkout-address").addClass('opacity-0');
            $("#checkout-address").removeClass('opacity-1');
        }
    });

    $("#checkout-phone-input").keyup(function () {
        $("#checkout-phone").addClass('opacity-1');
        $("#checkout-phone").removeClass('opacity-0');
        $(this).addClass('pd2');
        if ($(this).val().length == 0) {
            $("#checkout-phone").addClass('opacity-0');
            $("#checkout-phone").removeClass('opacity-1');
            $(this).removeClass('pd2');
        }
    });

    addMinusPlus();

    // Validate input chỉ nhập được số
    $('#inputDetail').inputFilter(function (value) {
        return /^\d*$/.test(value);
    });

    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });

    // Hover Dropdown Menu
    $(".dropdown").hover(function () {
        var dropdownMenu = $(this).children(".dropdown-menu");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("open");
        }
    });

    // Slide show/hide Your Cart
    $("#icon-close").click(function () {
        $('#your-cart').hide("slide", {direction: "right"}, 500);
    });
    $("#cart").click(function () {
        console.log(1);
        $('#your-cart').show("slide", {direction: "right"}, 500);
    });

    /**
     * Delete item in list cart
     */

    // start vote detail
    $(function () {
        var star = '.star',
            selected = '.selected';

        $(star).on('click', function () {
            $(selected).each(function () {
                $(this).removeClass('selected');
            });
            $(this).addClass('selected');
        });
    });

    //Giỏ hàng - Cart
    var yourCart = $(".js-your-cart");
    var btnCart = $(".btn-your-cart");

    btnCart.click = function () {
        yourCart.show();
    }

    /**
     *      Button change background
     * */

    $('#checkbox').change(function () {
        var bgBody = $('body,html');
        console.log(1);
        if (this.checked) {
            bgBody.addClass('bg-blue');
            bgBody.removeClass('bg-red');
            console.log(bgBody);
        }
        if (!this().is(':checked')) {
            bgBody.addClass('bg-red');
            bgBody.removeClass('bg-blue');
        }
        console.log(12);
    });

    $('.review_reply-read-more').on('click', function () {
        var review = $('.review_reply_item-hide');
        review.toggle();
        if (review.is(":visible")) {
            $('.review_reply-read-more').text('View Less');
        }
        ;
        if (!review.is(":visible")) {
            $('.review_reply-read-more').text('View More');
        }
        ;
    });


    /**
     *
     *      Function Hide/Show Collapse
     *
     */
    $('#more-button').on('click', function () {
        $('#growreview').slideToggle();
        $('html, body').animate({
            scrollTop: $(".form--review-collapse").offset().top
        }, 500);
    });

    $('.info-user-manual-detail-btn').on('click', function (){
        $('.info-user-manual-detail-content').slideToggle();
        $(this).toggleClass("bg-active");
    });

    $('.cus__title-add-address').on('click', function(){
        $('.add_address-btn').click();
    });

    $('.info-category-btn').on('click', function () {
        $(this).hide();
        $('.info-category-content').show("slide", {direction: "right"}, 500);
    });

    $('.info-category-header-btn').on('click', function (){
        $('.info-category-content').hide("slide", {direction: "right"}, 500);
        $('.info-category-btn').show(1000);
    });

    /*===============================
        ***  Page All Product ***
    ===============================*/
    $('.fa-angle-down').on('click', function (){
        $(this).parent().toggleClass('active');
        $(this).parent().find('.dropdown--menu:first-child').slideToggle();
    })

});




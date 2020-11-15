$(document).ready(function(){
    $(".clickable-mainmenu-btn").on("click",function(){
        $("#main-menu").modal("show");
    });

    // $(".clickable-mainmenu-btn").click(function(){
    //     $("#main-menu").show("slide", { direction: "left" }, 4000);
    // });

    $(".js-close-menu").on("click",function(){
        $("#main-menu").modal("hide");
    });
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
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });
    
});




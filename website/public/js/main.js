$(document).ready(function(){
    $(".clickable-mainmenu-btn").on("click",function(){
        $("#main-menu").modal("show");
    });

    $(".js-close-menu").on("click",function(){
        $("#main-menu").modal("hide");
    })
    
});


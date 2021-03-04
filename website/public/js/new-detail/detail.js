$(document).ready(function(){
   

    $('.img-click-change').on('click', function () {
        var imgUrl = $(this).data('imgUrl');
        $('#imageZoom').prop('src', this.src);
    });
    

    var zoomImage = $('#imageZoom');
    zoomImage.imageZoom();
});
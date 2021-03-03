$(document).ready(function(){
    var zoomImage = $('#imageZoom');
    zoomImage.imageZoom();

    $('.img-click-change').on('click', function () {
        var imgUrl = $(this).data('imgUrl');
        $('#imageZoom').prop('src', this.src);
    });
});
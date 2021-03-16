$(document).ready(function () {


    $('.img-click-change').on('click', function () {
        var imgUrl = $(this).data('imgUrl');
        $('#imageZoom').prop('src', this.src);
    });


    var zoomImage = $('#imageZoom');
    zoomImage.imageZoom();

    var emotionsArray = ['angry','disappointed','meh', 'happy', 'smile'];
    $("#element").emotionsRating({
        emotionSize: 20,
        bgEmotion: 'smile',
        emotions: emotionsArray,
        color: 'gold'
    });
});

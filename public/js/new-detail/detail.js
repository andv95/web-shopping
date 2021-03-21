$(document).ready(function () {


    $('.img-click-change').on('click', function () {
        var imgUrl = $(this).data('imgUrl');
        $('#imageZoom').prop('src', this.src);
    });


    var zoomImage = $('#imageZoom');
    zoomImage.imageZoom();

    var emotionsArray = ['angry', 'disappointed', 'meh', 'happy', 'smile'];
    $("#element").emotionsRating({
        emotionSize: 20,
        bgEmotion: 'smile',
        emotions: emotionsArray,
        color: 'gold'
    });

    $('.property-rating').hide();
    $('.emotion-style-element').on('click', function () {
        $('.property-rating').show();

        if ($(this).data("index") === 1) {
            $('.js-checkboxRating1').text('Chất lượng sản phẩm rất kém');
            $('#checkboxRating1').val('Chất lượng sản phẩm rất kém');

            $('.js-checkboxRating2').text('Đóng gói sản phẩm rất kém');
            $('#checkboxRating2').val('Đóng gói sản phẩm rất kém');

            $('.js-checkboxRating3').text('Shop phục vụ rất kém');
            $('#checkboxRating3').val('Shop phục vụ rất kém');

            $('.js-checkboxRating4').text('Rất không đáng tiền');
            $('#checkboxRating4').val('Rất không đáng tiền');

            $('.js-checkboxRating5').text('Thời gian giao hàng rất chậm');
            $('#checkboxRating5').val('Thời gian giao hàng rất chậm');
        }

        if ($(this).data("index") === 2) {
            $('.js-checkboxRating1').text('Chất lượng sản phẩm kém');
            $('#checkboxRating1').val('Chất lượng sản phẩm kém');

            $('.js-checkboxRating2').text('Đóng gói sản phẩm kém');
            $('#checkboxRating2').val('Đóng gói sản phẩm kém');

            $('.js-checkboxRating3').text('Shop phục vụ kém');
            $('#checkboxRating3').val('Shop phục vụ kém');

            $('.js-checkboxRating4').text('Không đáng tiền');
            $('#checkboxRating4').val('Không đáng tiền');

            $('.js-checkboxRating5').text('Thời gian giao hàng chậm');
            $('#checkboxRating5').val('Thời gian giao hàng chậm');
        }

        if ($(this).data("index") === 3) {
            $('.js-checkboxRating1').text('Chất lượng sản phẩm tạm được');
            $('#checkboxRating1').val('Chất lượng sản phẩm tạm được');

            $('.js-checkboxRating2').text('Đóng gói sản phẩm tạm được');
            $('#checkboxRating2').val('Đóng gói sản phẩm tạm được');

            $('.js-checkboxRating3').text('Shop phục vụ tạm được');
            $('#checkboxRating3').val('Shop phục vụ tạm được');

            $('.js-checkboxRating4').text('Giá cả chấp nhận được');
            $('#checkboxRating4').val('Giá cả chấp nhận được');

            $('.js-checkboxRating5').text('Thời gian giao hàng tạm được');
            $('#checkboxRating5').val('Thời gian giao hàng tạm được');
        }

        if ($(this).data("index") === 4) {
            $('.js-checkboxRating1').text('Chất lượng sản phẩm tốt');
            $('#checkboxRating1').val('Chất lượng sản phẩm tốt');

            $('.js-checkboxRating2').text('Đóng gói sản phẩm chắc chắn');
            $('#checkboxRating2').val('Đóng gói sản phẩm chắc chắn');

            $('.js-checkboxRating3').text('Shop phục vụ khá tốt');
            $('#checkboxRating3').val('Shop phục vụ khá tốt');

            $('.js-checkboxRating4').text('Đáng đồng tiền');
            $('#checkboxRating4').val('Đáng đồng tiền');

            $('.js-checkboxRating5').text('Thời gian giao hàng nhanh');
            $('#checkboxRating5').val('Thời gian giao hàng nhanh');
        }

        if ($(this).data("index") === 5) {
            $('.js-checkboxRating1').text('Chất lượng sản phẩm tuyệt vời');
            $('#checkboxRating1').val('Chất lượng sản phẩm tuyệt vời');

            $('.js-checkboxRating2').text('Đóng gói sản phẩm rất đẹp và chắc chắn');
            $('#checkboxRating2').val('Đóng gói sản phẩm rất đẹp và chắc chắn');

            $('.js-checkboxRating3').text('Shop phục vụ rất tốt');
            $('#checkboxRating3').val('Shop phục vụ rất tốt');

            $('.js-checkboxRating4').text('Rất đáng tiền');
            $('#checkboxRating4').val('Rất đáng tiền');

            $('.js-checkboxRating5').text('Thời gian giao hàng rất nhanh');
            $('#checkboxRating5').val('Thời gian giao hàng rất nhanh');
        }
    })
});

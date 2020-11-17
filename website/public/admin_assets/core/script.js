$(document).ready(function () {
    $(document).on('keyup', '.slug-generate', function () {
        const slugGenerate = adminBase.helpers.autoGenSlug($(this).val());
        $('.slug-received').val(slugGenerate);
    });

    $(document).on('keyup', '.en-slug-generate', function () {
        const slugGenerate = adminBase.helpers.autoGenSlug($(this).val());
        $('.en-slug-received').val(slugGenerate);
    });


    $(document).on('click', '.upload-image', function (event) {
        event.preventDefault();
        inputId = $(this);

        window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

    $(document).on('click', '.add-more-image', function () {
        let number = $(this).data('number');
        $(this).closest('.wrapper-multiple-image').find('.image-append').append(
        '<div class="row wrapper-upload-single-image">'+
            '<div class="img-show col-md-5">'+
            '<img src="http://127.0.0.1:8000/admin_assets/images/no_img.png" class="w-50">'+
            '</div>'+
            '<div class="col-md-7">'+
            '<div class="row">'+
            '<div class="col-md-12">'+
            '<div class="custom-file mb-2">'+
            '<input type="text" class="custom-file-input upload-image" id="image" name="image[src]" value="">'+
            '<label class="custom-file-label" for="image">Choose file</label>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-6">'+
            '<input type="text" name="image[title]" class="form-control image-title" placeholder="Title" value="">'+
            '</div>'+
            '<div class="col-md-6">'+
            '<input type="text" name="image[alt]" class="form-control image-title" placeholder="Alt" value="">'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        );
    })
});

var inputId = '';
function fmSetLink($url) {
    inputId.closest('.wrapper-upload-single-image').find('.custom-file-label').html($url);
    inputId.closest('.wrapper-upload-single-image').find('.upload-image').val($url);
    inputId.closest('.wrapper-upload-single-image').find('.img-show').html("<img src='" + $url + "' class='w-50'/>");
}

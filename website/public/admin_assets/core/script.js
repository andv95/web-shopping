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
});

var inputId = '';
function fmSetLink($url) {
    inputId.closest('.wrapper-upload-single-image').find('.custom-file-label').html($url);
    inputId.closest('.wrapper-upload-single-image').find('.upload-image').val($url);
    inputId.closest('.wrapper-upload-single-image').find('.img-show').html("<img src='" + $url + "' class='w-50'/>");
}

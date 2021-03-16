$(document).ready(function () {
    $('.text_ckeditor').each(function(){
        adminBase.helpers.ckeditor.make(this.id);
    });

    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
    $('.select2-multiple').select2({
        theme: 'bootstrap4',
        multiple: true
    });

    $('.select2-multiple').each(function () {
        var selected = $(this).data('selected');
        $(this).val(selected).trigger('change');
    });

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

    // $(document).on('keyup', '.input-number-format', function () {
    //     var number = $(this).val();
    //     var newNumberFormat = adminBase.helpers.numberFormat(number);
    //     $(this).val(newNumberFormat);
    // });

    $(document).on('click', '.add-more-image', function () {
        let number = $(this).data('number');
        let name = $(this).data('name');
        let nameFull = name+'['+number+']';
        $(this).closest('.wrapper-multiple-image').find('.image-append').append(
        '<div class="row wrapper-upload-single-image mb-2">'+
            '<button type="button" class="btn btn-danger btn-sm remove-image">' +
            '<i class="fas fa-times"></i>' +
            '</button>'+
            '<div class="img-show col-md-5">'+
            '<img src="/admin_assets/images/no_img.png" class="w-50">'+
            '</div>'+
            '<div class="col-md-7">'+
            '<div class="row">'+
            '<div class="col-md-12">'+
            '<div class="custom-file mb-2">'+
            '<input type="text" class="custom-file-input upload-image" id="image" name="' + nameFull + '[src]" value="">'+
            '<label class="custom-file-label" for="image">Choose file</label>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-6">'+
            '<input type="text" name="' + nameFull + '[title]" class="form-control image-title" placeholder="Title" value="">'+
            '</div>'+
            '<div class="col-md-6">'+
            '<input type="text" name="' + nameFull + '[alt]" class="form-control image-title" placeholder="Alt" value="">'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        );
        $(this).data('number', parseInt(number) + 1);
    });

    $(document).on('click', '.remove-image', function () {
        $(this).closest('.wrapper-upload-single-image').remove();
    });

    $(document).on('click', '.add-more-property', function (){
        let position = $(this).data('number');
        let select2Property = $('.selectet2-property').html();
        let select2PropertyNew = select2Property.replace("properties[0][color_id]", "properties["+ position +"][color_id]")
            .replace("properties[0][size_id]", "properties["+ position +"][size_id]");
        $(this).closest('.property-product').find('.property-append').append(
                '<div class="property-product-item" data-position="0" style="margin-bottom: 10px">'+
                    '<button type="button" class="btn btn-danger btn-sm remove-property float-right"><i class="fas fa-times"></i></button>'+
                    select2PropertyNew +
                    '<input type="number" name="properties['+ position +'][quantity]" class="form-control" placeholder="Quantity">'+
                '</div>'
        );
        $(this).data('number', parseInt(position) +1);
    });

    $(document).on('click', '.remove-property', function (){
        $(this).closest('.property-product-item').remove();
    });
});

var inputId = '';
function fmSetLink($url) {
    inputId.closest('.wrapper-upload-single-image').find('.custom-file-label').html($url);
    inputId.closest('.wrapper-upload-single-image').find('.upload-image').val($url);
    inputId.closest('.wrapper-upload-single-image').find('.img-show').html("<img src='" + $url + "' class='w-50'/>");
}

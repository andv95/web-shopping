@php
    $imageIdentify = isset($name) ? $name : 'image';
@endphp
<div class="form-group col-md-12 wrapper-multiple-image">
    <label for="image">Ảnh</label>
    <div class="row wrapper-upload-single-image mb-2">
        <div class="img-show col-md-5">
            <img src="{{ @$category->image ? $category->getImage()->src : admin_asset('images/no_img.png') }}" class="w-50">
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-file mb-2">
                        <input type="text" class="custom-file-input upload-image" id="{{ $imageIdentify }}"
                               name="{{ $imageIdentify }}[0][src]" value="{{ @$category->image ? $category->getImage()->src : '' }}">
                        <label class="custom-file-label" for="{{ $imageIdentify }}">{{ @$category->image ? $category->getImage()->src : 'Choose file' }}</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" name="{{ $imageIdentify }}[0][title]" class="form-control image-title" placeholder="Title" value="{{ @$category->image ? $category->getImage()->title : '' }}">
                </div>
                <div class="col-md-6">
                    <input type="text" name="{{ $imageIdentify }}[0][alt]" class="form-control image-title" placeholder="Alt" value="{{ @$category->image ? $category->getImage()->alt : '' }}">
                </div>

            </div>
        </div>
    </div>
    <div class="image-append"></div>
    <div class="card-footer clearfix">
        <button type="button" class="btn btn-info float-right add-more-image" data-number="1" data-name="{{ $imageIdentify }}"><i class="fas fa-plus"></i> Thêm ảnh</button>
    </div>
</div>


@php
    $imageIdentify = isset($name) ? $name : 'image';
@endphp
<div class="form-group col-md-12">
    <label for="image">Ảnh</label>
    <div class="row wrapper-upload-single-image">
        <div class="img-show col-md-5">
            <img src="{{ @$category->image ? $category->getImage()->src : admin_asset('images/no_img.png') }}" class="w-50">
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-file mb-2">
                        <input type="text" class="custom-file-input upload-image" id="{{ $imageIdentify }}"
                               name="{{ $imageIdentify }}[src]" value="{{ @$category->image ? $category->getImage()->src : '' }}">
                        <label class="custom-file-label" for="{{ $imageIdentify }}">{{ @$category->image ? $category->getImage()->src : 'Choose file' }}</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" name="{{ $imageIdentify }}[title]" class="form-control image-title" placeholder="Title" value="{{ @$category->image ? $category->getImage()->title : '' }}">
                </div>
                <div class="col-md-6">
                    <input type="text" name="{{ $imageIdentify }}[alt]" class="form-control image-title" placeholder="Alt" value="{{ @$category->image ? $category->getImage()->alt : '' }}">
                </div>

            </div>
        </div>
    </div>
</div>


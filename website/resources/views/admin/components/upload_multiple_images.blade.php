@php
    $imageIdentify = isset($name) ? $name : 'images';
    $images = !empty($data->$imageIdentify) ? json_decode($data->$imageIdentify) : [];
    $quantityImage = count($images);
@endphp
<div class="form-group col-md-12 wrapper-multiple-image">
    <label for="image">{{ @$titleImage ? $titleImage : 'Ảnh' }}</label>
    @if(!empty($images))
        @foreach($images as $key=>$image)
            <div class="row wrapper-upload-single-image mb-2">
                <div class="img-show col-md-5">
                    <img src="{{ @$image ? $image->src : admin_asset('images/no_img.png') }}" class="w-50">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-file mb-2">
                                <input type="text" class="custom-file-input upload-image"
                                       name="{{ $imageIdentify }}[{{$key}}][src]" value="{{ @$image ? $image->src : '' }}">
                                <label class="custom-file-label"
                                       for="{{ $imageIdentify }}">{{ @$data->image ? $data->getImage()->src : 'Choose file' }}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="{{ $imageIdentify }}[{{$key}}][title]" class="form-control image-title"
                                   placeholder="Title" value="{{ @$image ? $image->title : '' }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="{{ $imageIdentify }}[{{$key}}][alt]" class="form-control image-title"
                                   placeholder="Alt" value="{{ @$image? $image->alt : '' }}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="image-append"></div>
        <div class="card-footer clearfix">
            <button type="button" class="btn btn-info float-right add-more-image" data-number="{{ $quantityImage }}"
                    data-name="{{ $imageIdentify }}"><i class="fas fa-plus"></i> Thêm ảnh
            </button>
        </div>
    @else
        <div class="row wrapper-upload-single-image">
            <div class="img-show col-md-5">
                <img src="{{ admin_asset('images/no_img.png') }}" class="w-50">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-file mb-2">
                            <input type="text" class="custom-file-input upload-image"
                                   name="{{ $imageIdentify }}[src]" value="">
                            <label class="custom-file-label" for="{{ $imageIdentify }}">Choose file</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="{{ $imageIdentify }}[title]" class="form-control image-title" placeholder="Title" value="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="{{ $imageIdentify }}[alt]" class="form-control image-title" placeholder="Alt" value="">
                    </div>

                </div>
            </div>
        </div>
    @endif

</div>


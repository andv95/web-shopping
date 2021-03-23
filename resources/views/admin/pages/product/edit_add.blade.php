@extends('admin.layouts.content_sidebar')
@section('action_form', @$route)
@section('content')
    <div class="col-md-12">
        <input type="hidden" name="id" value="{{ @$data->id ? $data->id : '' }}">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Tổng quan</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Tên danh mục <code>(*)</code></label>
                        <input type="text" class="form-control slug-generate" id="title" placeholder="Nhập tên thuộc tính"
                               name="name" value="{{ old('name', @$data->name) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Đường dẫn <code>(*)</code></label>
                        <input type="text" class="form-control slug-received" id="slug" placeholder="Đường dẫn"
                               name="slug" value="{{ old('slug', @$data->slug) }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Gía <code>(*)</code></label>
                        <input type="text" class="form-control input-number-format" id="price" placeholder="Nhập giá"
                               name="price" value="{{ show_price(old('price', @$data->price)) }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="quantity_warehouse">Số lượng hàng <code>(*)</code></label>
                        <input type="number" class="form-control" id="quantity_warehouse" placeholder="Nhập số lượng hàng"
                               name="quantity_warehouse" value="{{ old('quantity_warehouse', @$data->quantity_warehouse) }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="flg_warehouse">Hiển thị số lượng hàng <code>(*)</code></label>
                        <div class="icheck-primary form-group">
                            <input type="checkbox" id="checkboxPrimary1" name="flg_warehouse" {{ old('flg_warehouse', @$data->flg_warehouse) ? 'checked' : '' }}>
                                <label for="checkboxPrimary1">
                                </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="except">Mô tả ngắn <code>(*)</code></label>
                        <textarea id="except" name="except" class="form-control">{{ old('except', @$data->except) }}</textarea>
                    </div>
                    @include('admin.components.upload_image', ['data' => @$data->image ? $data : ''])
                    @include('admin.components.upload_image', ['data' => @$data->image_hover ? $data : '', 'name' => 'image_hover', 'titleImage' => 'Ảnh khi di chuột qua'])
                    @include('admin.components.upload_multiple_images', ['data' => @$data->images ? $data : '', 'titleImage' => 'Ảnh slide của sản phẩm'])
                </div>
                <!-- /.row -->
            </div>
        </div>


        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Tab chi tiết</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Chi tiết</label>
                        <textarea id="description" name="description" class="form-control text_ckeditor">{{ old('description', @$data->description) }}</textarea>
                    </div>
                    @include('admin.components.upload_multiple_images', ['data' => @$data->descriptions_images ? $data : '', 'name' => 'descriptions_images', 'titleImage' => 'Ảnh và mô tả sản phẩm'])
                    @include('admin.components.upload_multiple_images', ['data' => @$data->image_feedback ? $data : '', 'name' => 'image_feedback', 'titleImage' => 'Ảnh feedback của khách hàng'])
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
@endsection

@section('sidebar')
    <div class="edit-add-action-wrapper text-right mb-2">
        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default" title="Thoát"
           onclick="return confirm('Bạn có chắc chắn muốn rời khỏi trang này ?')">Thoát</a>
        <input type="submit" value="Lưu lại" class="btn btn-success">
        <input type="button" value="Lưu lại ajax" class="btn btn-success btn-save">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Cấu hình chung</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <div class="card-body">
                    <div class="row">
                        @include('admin.pages.include.languageOption')
{{--                        @if(!empty($data->getRelatePostLanguage()))--}}
{{--                            @include('admin.pages.include.relatePost', ['link' => @$data->getRelatePostLanguage()->id, 'title' => @$data->getRelatePostLanguage()->title])--}}
{{--                        @endif--}}
                        <div class="form-group col-md-12">
                            <label for="parent_id">Danh mục</label>
                            <select class="form-control select2-multiple " style="width: 100%;" name="categories[]" data-selected="{{ $categoryIds }}">
                                @if(!empty($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="parent_id">Thuộc tính</label>

                            <div class="property-product">
                                @if(!empty($relateProperties))
                                    @foreach($relateProperties as $keyProperty=>$relateProperty)
                                        <div class="property-product-item" data-position="0">
                                            <button type="button" class="btn btn-danger btn-sm remove-property float-right"><i class="fas fa-times"></i></button>
                                            <div class="selectet2-property">
                                                <select class="form-control select2" style="width: 100%;" name="properties[{{ $keyProperty }}][size_id]">
                                                    @if(!empty($sizes))
                                                        @foreach($sizes as $size)
                                                            <option value="{{ $size->id }}" {{ $relateProperty->size_id==$size->id ? 'selected' : '' }}>{{ $size->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <select class="form-control select2" style="width: 100%;" name="properties[{{ $keyProperty }}][color_id]">
                                                    @if(!empty($colors))
                                                        @foreach($colors as $color)
                                                            <option value="{{ $color->id }}" {{ $relateProperty->color_id==$color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <input type="number" name="properties[{{ $keyProperty }}][quantity]" class="form-control" placeholder="Quantity" value="{{ $relateProperty->quantity }}">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="property-product-item" data-position="0">
                                        <div class="selectet2-property">
                                            <select class="form-control select2" style="width: 100%;" name="properties[0][size_id]">
                                                @if(!empty($sizes))
                                                    @foreach($sizes as $size)
                                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <select class="form-control select2" style="width: 100%;" name="properties[0][color_id]">
                                                @if(!empty($colors))
                                                    @foreach($colors as $color)
                                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <input type="number" name="properties[0][quantity]" class="form-control" placeholder="Quantity">
                                    </div>
                                @endif

                                <div class="property-append"></div>
                                <button type="button" class="btn btn-info float-right add-more-property" data-number="1" data-name="images"><i class="fas fa-plus"></i> Thêm thuộc tính
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="status">Sản phẩm nổi bật</label>
                            <div class="icheck-primary">
                                <input type="checkbox" id="feature" name="feature" value="0">
                                <label for="feature">
                                </label>
                            </div>
                        </div>
{{--                        <div class="form-group col-md-12">--}}
{{--                            <label for="parent_id">Tỷ giá</label>--}}
{{--                            <select class="form-control select2bs4" style="width: 100%;" name="exchange">--}}
{{--                                <option selected="selected">Không tỷ giá</option>--}}
{{--                                @if(!empty($exchanges))--}}
{{--                                    @foreach($exchanges as $exchange)--}}
{{--                                        <option value="{{ $exchange->id }}">{{ $exchange->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                            </select>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('body').on('click', '.btn-save', function (e) {
            e.preventDefault();
            adminBase.helpers.ajax();
        })
    </script>
@endsection

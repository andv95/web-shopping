@extends('admin.layouts.content_sidebar')
@section('action_form', route('admin.property.storeUpdate', (@($data->id) ? $data->id : '')))
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
                        <input type="text" class="form-control slug-generate" id="name" placeholder="Nhập tên thuộc tính"
                               name="name" value="{{ old('name', @$data->name) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Đường dẫn <code>(*)</code></label>
                        <input type="text" class="form-control slug-received" id="slug" placeholder="Đường dẫn"
                               name="slug" value="{{ old('name', @$data->slug) }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name_en">Name <code>(*)</code></label>
                        <input type="text" class="form-control en-slug-generate" id="name_en"
                               placeholder="Property name" name="name_en"
                               value="{{ old('name', @$data->name_en) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug_en">Slug <code>(*)</code></label>
                        <input type="text" class="form-control en-slug-received" id="slug_en" placeholder="slug"
                               name="slug_en" value="{{ old('name', @$data->slug_en) }}">
                    </div>
                    @include('admin.components.upload_image', ['data' => @$data->image ? $data->getImage() : ''])
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
                        <select class="form-control" name="type">
                            @foreach(\App\Models\Admin\Property::TYPES as $key=>$value)
                                <option value="{{ $key }}" {{ (@$data->type && $data->type==$key) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
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

@extends('admin.layouts.content_sidebar')
@section('action_form', route('admin.blog_category.storeUpdate', (@($category->id) ? $category->id : '')))
@section('content')
    <div class="col-md-12">
        <input type="hidden" name="id" value="{{ @$category->id ? $category->id : '' }}">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Tiếng việt</h3>
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
                        <input type="text" class="form-control slug-generate" id="name" placeholder="Nhập tên danh mục"
                               name="name" value="{{ old('name', @$category->name) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Đường dẫn <code>(*)</code></label>
                        <input type="text" class="form-control slug-received" id="slug" placeholder="Đường dẫn"
                               name="slug" value="{{ old('name', @$category->slug) }}">
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Tiếng anh</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name_en">Tên danh mục <code>(*)</code></label>
                        <input type="text" class="form-control en-slug-generate" id="name_en"
                               placeholder="Nhập tên danh mục" name="name_en"
                               value="{{ old('name_en', @$category->name_en) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug_en">Đường dẫn <code>(*)</code></label>
                        <input type="text" class="form-control en-slug-received" id="slug_en" placeholder="Đường dẫn"
                               name="slug_en" value="{{ old('slug_en', @$category->slug_en) }}">
                    </div>
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

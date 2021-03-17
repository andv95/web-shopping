@extends('admin.layouts.content_sidebar')
@section('action_form', route('admin.faq.storeUpdate', (@($data->id) ? $data->id : '')))
@section('content')
    <div class="col-md-12">
        <input type="hidden" name="id" value="{{ @$data->id ? $data->id : '' }}">
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
                    <div class="form-group col-md-12">
                        <label for="name">Tiêu đề <code>(*)</code></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tiêu đề"
                               name="name" value="{{ old('name', @$data->name) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="except">Nội dung <code>(*)</code></label>
                        <textarea id="content" name="content" class="form-control text_ckeditor" rows="8">{{ old('content', @$data->content) }}</textarea>
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
                    <div class="form-group col-md-12">
                        <label for="name">Tiêu đề <code>(*)</code></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tiêu đề"
                               name="name_en" value="{{ old('name_en', @$data->name_en) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="except">Nội dung <code>(*)</code></label>
                        <textarea id="content_en" name="content_en" class="form-control text_ckeditor" rows="8">{{ old('content_en', @$data->content_en) }}</textarea>
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

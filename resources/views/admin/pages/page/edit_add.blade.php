@extends('admin.layouts.content_sidebar')
@section('action_form', route('admin.page.storeUpdate', (@($data->id) ? $data->id : '')))
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
                        <label for="title">Tên trang <code>(*)</code></label>
                        <input type="text" class="form-control slug-generate" id="name" placeholder="Nhập tên trang"
                               name="name" value="{{ old('name', @$data->name) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Đường dẫn <code>(*)</code></label>
                        <input type="text" class="form-control slug-received" id="slug" placeholder="Đường dẫn"
                               name="slug" value="{{ old('slug', @$data->slug) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="title">Tiêu đề<code>(*)</code></label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề"
                               name="title" value="{{ old('title', @$data->title) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="except">Mô tả ngắn <code>(*)</code></label>
                        <textarea id="except" name="excerpt" class="form-control">{{ old('excerpt', @$data->excerpt) }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Chi tiết <code>(*)</code></label>
                        <textarea id="description" name="description" class="form-control text_ckeditor">{{ old('description', @$data->description) }}</textarea>
                    </div>
                    @include('admin.components.upload_image', ['data' => @$data->image ? $data : ''])
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
                        <div class="form-group col-md-12">
                            <label for="parent_id">Kiểu hiển thị</label>
                            <select class="form-control select2bs4" style="width: 100%;" name="template">
                                @if(!empty($templates))
                                    @foreach($templates as $keyTemplate=>$templates)
                                        <option value="{{ $keyTemplate }}" {{ (@$data->template && $keyTemplate==$data->template) ? 'selected' : '' }}>{{ $templates }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
{{--                        @if(!empty($data->getRelatePostLanguage()))--}}
{{--                            @include('admin.pages.include.relatePost', ['link' => @$data->getRelatePostLanguage()->id, 'title' => @$data->getRelatePostLanguage()->title])--}}
{{--                        @endif--}}
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

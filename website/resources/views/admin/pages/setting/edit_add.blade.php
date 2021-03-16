@extends('admin.layouts.content_sidebar')
@section('action_form', route('admin.setting.storeUpdate', (@($data->id) ? $data->id : '')))
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
                        <label for="name">Tên <code>(*)</code></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tên cài đặt"
                               name="name" value="{{ old('name', @$data->name) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Key <code>(*)</code></label>
                        <input type="text" class="form-control slug-received" id="slug" placeholder="Nhập key"
                               name="key" value="{{ old('key', @$data->key) }}">
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
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="type">Loại</label>
                            <select class="form-control" name="type">
                                @foreach($types as $key=>$value)
                                    <option value="{{ $key }}" {{ (@$data->type && $data->type==$key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="group">Nhóm</label>
                            <select class="form-control" name="group">
                                @foreach($groups as $key=>$value)
                                    <option value="{{ $key }}" {{ (@$data->group && $data->group==$key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="order">Số thứ tự <code>(*)</code></label>
                            <input type="text" class="form-control" id="order" placeholder="Nhập số thứ tự"
                                   name="order" value="{{ old('order', @$data->order) }}">
                        </div>
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

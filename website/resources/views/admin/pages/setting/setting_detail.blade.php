@extends('admin.layouts.full_content')
@section('action_form', route('admin.setting.updateDetail')))
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách Setting</h3>
            {{--<input type="text" id="search_name">--}}
            <input type="button" value="Lưu" class="btn btn-success btn-save float-right ml-5" style="width: 100px">
            <a href="{{ @$routeAdd }}" class="btn btn-success float-right">Thêm mới</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="admin_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($groups as $key=>$group)
                            <div class="card card-primary collapsed-card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $group }}</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body" style="{{ $loop->first ? 'display: block;' : '' }}">
                                    <div class="row">
                                        @php
                                            $settings = \App\Models\Admin\Setting::getList(['group' => $key])->get();
                                        @endphp
                                        @foreach($settings as $setting)
                                            <div class="form-group col-md-12">
                                                <label for="name">{{ $setting->name }}</label>
                                                @switch($setting->type)
                                                    @case(0)
                                                        <input type="text" class="form-control" placeholder="Nhập dữ liệu"
                                                           name="{{ $setting->key }}" value="{{ old('name', @$setting->description) }}">
                                                    @break

                                                    @case(1)
                                                        <textarea name="{{ $setting->key }}" id="{{ $setting->key }}" class="form-control">{{ old('except', @$setting->description) }}</textarea>
                                                    @break

                                                    @case(2)
                                                        @include('admin.components.upload_image', ['data' => @$setting->description ? $data : ''])
                                                    @break

                                                    @case(3)
                                                        @include('admin.components.upload_multiple_images', ['data' => @$setting->description ? $data : '', 'titleImage' => 'Ảnh slide của sản phẩm'])
                                                    @break

                                                    @case(4)
                                                        <textarea  id={{ $setting->key }} name="{{ $setting->key }}" class="form-control text_ckeditor">{{ old('description', @$setting->description) }}</textarea>
                                                    @break
                                                @endswitch
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
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

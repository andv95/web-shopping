@extends('admin.layouts.content_sidebar')
@section('action_form', route('admin.category.storeUpdate', !empty($category) ? $category : ''))
@section('content')
    <div class="col-md-12">
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
                        <label for="name">Tên danh mục</label>
                        <input type="text" class="form-control slug-generate" id="name" placeholder="Nhập tên danh mục"
                               name="name" value="{{ old('name', @$category->name) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Đường dẫn</label>
                        <input type="text" class="form-control slug-received" id="slug" placeholder="Đường dẫn"
                               name="slug" value="{{ old('name', @$category->slug) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="except">Mô tả ngắn</label>
                        <textarea class="form-control" id="except" placeholder="Nhập mô tả ngắn"
                                  name="except">{{ old('name', @$category->except) }}</textarea>
                    </div>
                    @include('admin.components.upload_image', ['data' => @$category->image ? $category->getImage() : ''])
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
                        <label for="name_en">Tên danh mục</label>
                        <input type="text" class="form-control en-slug-generate" id="name_en"
                               placeholder="Nhập tên danh mục" name="name_en"
                               value="{{ old('name', @$category->name_en) }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug_en">Đường dẫn</label>
                        <input type="text" class="form-control en-slug-received" id="slug_en" placeholder="Đường dẫn"
                               name="slug_en" value="{{ old('name', @$category->slug_en) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="except_en">Mô tả ngắn</label>
                        <textarea class="form-control" id="except_en" placeholder="Nhập mô tả ngắn"
                                  name="except_en">{{ old('name', @$category->except_en) }}</textarea>
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
            var formData = new FormData($('#submit-form')[0]);
            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.category.storeUpdate') }}",
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                },
                error: function (message) {
                    console.log(message);
                }
            })
        })
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    </script>
@endsection

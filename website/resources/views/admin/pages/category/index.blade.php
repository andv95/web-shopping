@extends('admin.layouts.full_content')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách category</h3>
            {{--<input type="text" id="search_name">--}}
            <a href="{{ route('admin.category.editAdd') }}" class="btn btn-success float-right">Thêm mới</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="admin_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="admin_datatable" class="table table-bordered table-striped dataTable"
                               data-route="{{ route('admin.category.datatable') }}" data-token="{{ csrf_token() }}">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc"
                                    aria-sort="ascending"
                                    style="width: 283px;">Tên
                                </th>
                                <th class="sorting" style="width: 359px;">
                                    Name
                                </th>
                                <th class="sorting" style="width: 359px;">
                                    Danh mục cha
                                </th>
                                <th class="sorting" style="width: 320px;">
                                    Mô tả ngắn
                                </th>
                                <th class="sorting" style="width: 243px;">
                                    Ảnh
                                </th>
                                <th class="sorting" style="width: 176px;">
                                    Hành động
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@section('script')
    <script>
        var columns = [
            {data: 'name', name: 'name'},
            {data: 'name_en', name: 'name_en'},
            {data: 'parent_id', name: 'parent_id'},
            {data: 'except', name: 'except'},
            {data: 'image', name: 'image'},
            {data: 'action', name: 'action'},
        ];

        var table = adminBase.helpers.datatable(columns);

        $(document).on('keyup', '#search_name', function () {
            table.draw();
        });
    </script>
@endsection

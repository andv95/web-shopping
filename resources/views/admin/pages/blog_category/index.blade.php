@extends('admin.layouts.full_content')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách category</h3>
            {{--<input type="text" id="search_name">--}}
            <a href="{{ route('admin.blog_category.editAdd') }}" class="btn btn-success float-right">Thêm mới</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="admin_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="admin_datatable" class="table table-bordered table-striped dataTable"
                               data-route="{{ route('admin.blog_category.datatable') }}" data-token="{{ csrf_token() }}">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc"
                                    aria-sort="ascending"
                                    style="width: 283px;">Tên
                                </th>
                                <th class="sorting" style="width: 359px;">
                                    Đường dẫn
                                </th>
                                <th class="sorting" style="width: 359px;">
                                    Name
                                </th>
                                <th class="sorting" style="width: 359px;">
                                    Slug
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
            {data: 'slug', name: 'slug'},
            {data: 'name_en', name: 'name_en'},
            {data: 'slug_en', name: 'slug_en'},
            {data: 'action', name: 'action'},
        ];

        var table = adminBase.helpers.datatable(columns);

        $(document).on('keyup', '#search_name', function () {
            table.draw();
        });
    </script>
@endsection

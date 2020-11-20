@extends('admin.layouts.full_content')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách tỷ giá</h3>
            {{--<input type="text" id="search_name">--}}
            <a href="{{ @$routeAdd }}" class="btn btn-success float-right">Thêm mới</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="admin_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="admin_datatable" class="table table-bordered table-striped dataTable"
                               data-route="{{ @$routeList }}" data-token="{{ csrf_token() }}">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" aria-sort="ascending" style="width: 283px;">
                                    Tên
                                </th>
                                <th class="sorting" style="width: 359px;">
                                    Name
                                </th>
                                <th class="sorting_asc" aria-sort="ascending" style="width: 283px;">
                                    Tỷ giá
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
            {data: 'exchange', name: 'exchange'},
            {data: 'action', name: 'action'},
        ];

        var table = adminBase.helpers.datatable(columns);

        $(document).on('keyup', '#search_name', function () {
            table.draw();
        });
    </script>
@endsection

@extends('admin.layouts.full_content')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách menu - {{ $menu->name }}</h3>
            {{--<input type="text" id="search_name">--}}
            <a href="{{ @$routeAdd }}" class="btn btn-success float-right">Menu cha - {{ $menu->name }}</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="admin_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrap">
                            @if(!empty($menu->menuItems))
                                @foreach($menu->menuItems as $menuItem)
                                    <div class="alert alert-info alert-dismissible item-menu-move" data-id='{{ $menuItem->id }}'>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5>{{ $menuItem->name }}</h5>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="{{ route('admin.menu_item.editAdd', ['id' => $menuItem->id]) }}" class="btn btn-success">Sửa</a>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@section('script_include')
    <script src="{{ admin_asset('library/ddsort.js') }}"></script>
    <script>
        $(document).ready(function ($) {

            function listIdMenu() {
                var ids = [];
                $('.item-menu-move').each(function(){
                    let id = ($(this).data('id'));
                    ids.push(id);
                });
                return ids;
            }

            $('.wrap').DDSort({
                target: '.item-menu-move',       // 示例而用，默认即 li，
                delay: 100,         // 延时处理，默认为 50 ms，防止手抖点击 A 链接无效
                up: function() {
                    var ids = listIdMenu();
                    console.log(ids);
                },
                floatStyle: {
                    'border': '1px solid #ccc',
                    'background-color': '#fff'
                }
            });
        });
    </script>
@endsection

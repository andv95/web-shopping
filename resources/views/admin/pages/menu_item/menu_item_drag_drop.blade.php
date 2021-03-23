@extends('admin.layouts.full_content')
@section('style_include')
    <link rel="stylesheet" href="{{ admin_asset('/library/net-table.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách menu - {{ $menu->name }}</h3>
            {{--<input type="text" id="search_name">--}}
            <a href="{{ @$routeAdd }}" class="btn btn-success float-right">Menu cha - {{ $menu->name }}</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="cf nestable-lists">
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        {!! list_menu_admin($menuItems) !!}
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@section('script_include')
    <script src="{{ admin_asset('library/jquery.nettable.js') }}"></script>
    <script>
        $(document).ready(function () {

            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    console.log(list.nestable('serialize'));
                    var ids = list.nestable('serialize');
                    var data = {
                        'ids' : ids,
                        '_token' : $("input[name=_token]").val(),
                    };
                    adminBase.helpers.ajaxSubmit("{{ route('admin.menu_item.menu_item_move_update', $menu->id) }}", data);
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };

            // activate Nestable for list 1
            $('#nestable').nestable({
                group: 1
            })
                .on('change', updateOutput);

            // activate Nestable for list 2
            $('#nestable2').nestable({
                group: 1
            })
                .on('change', updateOutput);

            // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));
            updateOutput($('#nestable2').data('output', $('#nestable2-output')));

            $('#nestable-menu').on('click', function (e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            $('#nestable3').nestable();

        });
    </script>
@endsection

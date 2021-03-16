<!DOCTYPE html>
<html>
@php
    $assetLte = admin_asset('adminLte');
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Web of Mine</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ $assetLte }}/dist/img/main.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
          href="{{ $assetLte }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ $assetLte }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ $assetLte }}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <link rel="stylesheet" href="{{ admin_asset('style.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('admin.components.side_bar')

<!-- Content Wrapper. Contains pages content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.components.bread_crumb')
    <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if(request()->session()->has(\App\Helpers\Helper::MESSAGE_SUCCESS))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Thông báo!</h5>
                        {{ request()->session()->get(\App\Helpers\Helper::MESSAGE_SUCCESS) }}
                    </div>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <div class="alert print-msg" style="display:none">
                    <ul></ul>
                </div>
                <form action="@yield('action_form')" method="post" enctype="multipart/form-data" id="submit-form">
                {{ csrf_field() }}
                <!-- Main row -->
                    <div class="row">
                        @yield('master_content')
                    </div>
                </form>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <!-- /.content-wrapper -->
@include('admin.components.footer')

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ $assetLte }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ $assetLte }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ $assetLte }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ $assetLte }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ $assetLte }}/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ $assetLte }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ $assetLte }}/plugins/moment/moment.min.js"></script>
<script src="{{ $assetLte }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ $assetLte }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ $assetLte }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ $assetLte }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="{{ $assetLte }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ $assetLte }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ $assetLte }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ $assetLte }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="{{ $assetLte }}/plugins/select2/js/select2.full.min.js"></script>

<!-- AdminLTE App -->
<script src="{{ $assetLte }}/dist/js/adminlte.js"></script>
<script src="{{ $assetLte }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ $assetLte }}/dist/js/demo.js"></script>


{{--setup ck editor--}}
<script src={{ asset('ckeditor/ckeditor.js') }}></script>
@yield('script_include')



<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script src="{{ admin_asset('core/admin_base.js') }}"></script>
<script src="{{ admin_asset('core/script.js') }}"></script>
@yield('script')
</body>
</html>

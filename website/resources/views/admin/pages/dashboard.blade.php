@extends('admin.layouts.content_sidebar')
@section('content')
    <div class="row mb-3">
        <div class="col-sm-4">
            <img class="img-fluid" src="{{ admin_asset('images/1.jpg') }}" alt="Photo">
        </div>
        <!-- /.col -->
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-fluid mb-3" src="{{ admin_asset('images/2.jpg') }}" alt="Photo">
                    <img class="img-fluid" src="{{ admin_asset('images/5.jpg') }}" alt="Photo">
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <img class="img-fluid mb-3" src="{{ admin_asset('images/4.jpg') }}" alt="Photo">
                    <img class="img-fluid" src="{{ admin_asset('images/3.jpg') }}" alt="Photo">
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('sidebar')
    <img class="img-fluid mb-3" src="http://127.0.0.1:8000/admin_assets/images/7.jpg" alt="Photo">
@endsection

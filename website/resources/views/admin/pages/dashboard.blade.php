@extends('admin.layouts.master')
@section('content')
    <div class="row mb-3">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{ admin_asset('images/1.jpg') }}" alt="Photo">
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
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

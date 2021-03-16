@extends('admin.layouts.master')
@section('master_content')
    <div class="col-md-8">
        @yield('content')
    </div>
    <div class="col-md-4">
        @yield('sidebar')
    </div>
@endsection

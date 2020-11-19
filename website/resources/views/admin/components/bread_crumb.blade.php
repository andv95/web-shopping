@php
    $route = request()->route()->getName();
    $breadcrumbs = config('breadcrumbs');
@endphp
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                        {{ isset($breadcrumbs[$route]['name']) ? $breadcrumbs[$route]['name'] : 'Dashboard' }}
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{ route(isset($breadcrumbs[$route]['route']) ? $breadcrumbs[$route]['route'] : 'admin.dashboard') }}">
                            {{ isset($breadcrumbs[$route]['name']) ? $breadcrumbs[$route]['name'] : 'Dashboard' }}
                        </a>
                    </li>
                    @if(isset($breadcrumbs[$route]['childName']))
                        <li class="breadcrumb-item">
                            {{ $breadcrumbs[$route]['childName'] }}
                        </li>
                    @endif
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

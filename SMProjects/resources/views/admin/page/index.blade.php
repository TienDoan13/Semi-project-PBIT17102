@extends('admin.layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="{{ route('admin.category.index') }}">Category Management</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">List of Category</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="{{ route('admin.movie.index') }}">Movie Management</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">List of Movie</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
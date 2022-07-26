@extends('admin.layout.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Edit Category</h1>
        <br>
      </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form action="" method="POST">
                        @csrf
                        <fieldset>
                            <label>Name:</label>
                            <input type="text" class="form-control" name="category_name" value="{{ $cate->category_name }}">
                            <br>
                            <label>Description:</label>
                            <input type="text" class="form-control" name="category_description" value= "{{ $cate->category_description }}" style="width: 140%">
                            <br>
                        </fieldset>
                        <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit">
                            Confirm Edit Category
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->
@endsection
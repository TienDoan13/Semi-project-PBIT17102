@extends('admin.layout.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Add Category</h1>
        <br>
      </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form action="{{ route('admin.category.add') }}" method="POST" role="form">
                        @csrf
                        <fieldset>
                            <div>
                                
                                <label>Name:</label>
                                <input type="text" class="form-control" name="category_name"
                                        placeholder="Category Name">
                                <br>
                                <label>Description:</label>
                                <textarea class="form-control" name="category_description"
                                style="width: 140%" placeholder="Category Descrption"></textarea>
                            </div>
                        </fieldset>
                        <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit">
                            Add new Category
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->
@endsection
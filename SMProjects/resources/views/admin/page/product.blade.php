@extends('admin.layout.master')
@section('content')
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">&nbsp;</th>
                  <th scope="col">MOVIE NAME</th>
                  <th scope="col">UNIT SOLD</th>
                  <th scope="col">IN STOCK</th>
                  <th scope="col">EXPIRE DATE</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><input type="checkbox" /></th>
                  <td class="tm-product-name">Lorem Ipsum Product 1</td>
                  <td>1,450</td>
                  <td>550</td>
                  <td>28 March 2019</td>
                  <td>
                    <a href="#" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <a
            href="add-product.html"
            class="btn btn-primary btn-block text-uppercase mb-3">Add new movie</a>
          <button class="btn btn-primary btn-block text-uppercase">
            Delete selected movies
          </button>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Movies Categories</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                <tr>
                  <td class="tm-product-name">Product Category 1</td>
                  <td class="text-center">
                    <a href="#" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <button class="btn btn-primary btn-block text-uppercase mb-3">
            Add new category
          </button>
        </div>
      </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">Products</h1>
    </div>
    <div class="row">
      <!--<div class="col-md-4">-->
        <form action="{{ route('catalog.products.save') }}" method="post" class="card">
          {{ csrf_field() }}
          <div class="card-header">
            <h3 class="card-title"><i class="fe fe-edit-3"></i> Add Product</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label class="form-label">Product Name</label>
              <input class="form-control" type="text" name="product_name" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label class="form-label">Model</label>
              <input class="form-control" type="text" name="model" placeholder="Model">
            </div>
            <div class="form-group">
              <label class="form-label">Price</label>
              <input class="form-control" type="text" name="price" placeholder="Price">
            </div>
            <div class="form-group">
              <label class="form-label">Quantity</label>
              <input class="form-control" type="number" name="quantity" min="1" name="qty" placeholder="Quantity">
            </div>
          </div>
          <div class="card-footer text-right">
            <div class="d-flex">
              <button type="reset" class="btn btn-link">Clear</button>
              <button type="submit" class="btn btn-success ml-auto"><i class="fe fe-save"></i> Submit</button>
            </div>
          </div>
        </form>
      <!--</div>-->
    </div>
</div>
@endsection

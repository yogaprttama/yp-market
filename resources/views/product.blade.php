@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">Products</h1>
    </div>
    <div class="row">
      <div class="col-md-4">
        <form action="" method="post" class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fe fe-filter"></i> Filter</h3>
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
              <input class="form-control" type="number" min="1" name="qty" placeholder="Quantity">
            </div>
            <div class="form-group">
              <label class="form-label">Status</label>
              <select name="status" id="select-status" class="form-control custom-select">
                <option value="default">-- Select status --</option>
                <option value="enabled">Enabled</option>
                <option value="disabled">Disabled</option>
              </select>
            </div>
          </div>
          <div class="card-footer text-right">
            <div class="d-flex">
              <button type="reset" class="btn btn-link">Reset</button>
              <button type="submit" class="btn btn-primary ml-auto"><i class="fe fe-filter"></i> Filter</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fe fe-list"></i> Product List</h3>
            <div class="card-options">
              <a href="{{ route('catalog.products.add') }}" class="btn btn-default btn-sm"><i class="fe fe-plus"></i> Add product</a>
              <!--<a href="#" class="btn btn-danger btn-sm ml-2"><i class="fe fe-trash-2"></i> Delete product</a>-->
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
              <thead>
                <tr>
                  <th class="w-1">#</th>
                  <th>Product Name</th>
                  <th>Model</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th class="text-center">
                    <i class="icon-settings"></i>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                  <td><span class="text-muted">{{ $product->id }}</span></td>
                  <td><a href="invoice.html" class="text-inherit">{{ $product->product_name }}</a></td>
                  <td>{{ $product->model }}</td>
                  <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td><span class="status-icon bg-success"></span> Enabled</td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-eye"></i> View </a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Edit </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-trash-2"></i> Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

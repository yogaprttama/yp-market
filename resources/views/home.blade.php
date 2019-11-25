@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User Permissions</h3>
            <div class="card-options">
              <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
              <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
            </div>
          </div>
          <div class="card-body">
            <ul>
              @foreach(Auth::user()->roles as $role)
                <li>{{ $role->role_name }}</li>
              @endforeach
            </ul>
          </div>
          @if (session('status'))
            <div class="card-footer">
              {{ session('status') }} You are logged in!
            </div>
          @endif
        </div>
      </div>
    </div>
</div>
@endsection

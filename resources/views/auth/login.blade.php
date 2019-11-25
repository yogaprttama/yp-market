@extends('layouts.secondary')

@section('content')

<div class="page-single">
  <div class="container">
    <div class="row">
      <div class="col col-login mx-auto">
        <div class="text-center mb-6">
          <img src="{{ asset('brand/tabler.svg') }}" class="h-6" alt="">
        </div>
        <form class="card" action="{{ route('login') }}" method="POST">
          {{ csrf_field() }}
          <div class="card-body p-6">
            <div class="card-title">Login to your account</div>
            <div class="form-group">
              <label class="form-label">Email address</label>
              <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label class="form-label">
                Password
                <a href="{{ route('password.request') }}" class="float-right small">I forgot password</a>
              </label>
              <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }} />
                <span class="custom-control-label">Remember me</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted">
          Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.secondary')

@section('content')
<div class="page-single">
  <div class="container">
    <div class="row">
      <div class="col col-login mx-auto">
        <div class="text-center mb-6">
          <img src="{{ asset('brand/tabler.svg') }}" class="h-6" alt="">
        </div>
        <form class="card" action="{{ route('password.email') }}" method="post">
          {{ csrf_field() }}
          <div class="card-body p-6">
            <div class="card-title">Forgot password</div>
            <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
            <div class="form-group">
              <label class="form-label" for="email">Email address</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted">
          Forget it, <a href="{{ route('login') }}">send me back</a> to the sign in screen.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

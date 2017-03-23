@extends('auth')

@section('pagetitle',' | Login')

@section('content')

<!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if (count($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>
    @endif
    <form  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div style="margin: 10px 0px 20px 0px">
        <a class="pull-left" href="{{ route('password.request') }}">Forgot Your Password?</a>
        <a class="pull-right" href="{{ route('register') }}" class="text-center">Create Account?</a>
    </div>
    

  </div>
  <!-- /.login-box-body -->

@endsection

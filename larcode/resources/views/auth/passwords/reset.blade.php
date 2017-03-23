@extends('auth')

@section('pagetitle',' | Reset Password')

@section('content')
<div class="login-box-body">
    <p class="login-box-msg">Reset Password</p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (count($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>
    @endif
    <form  method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $email or old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div style="margin: 10px 0px 20px 0px">
        <a class="pull-left" href="{{ route('login') }}">Go to Login?</a>
        <a class="pull-right" href="{{ route('register') }}" class="text-center">Create Account?</a>
    </div>
    

  </div>
  <!-- /.login-box-body -->

@endsection

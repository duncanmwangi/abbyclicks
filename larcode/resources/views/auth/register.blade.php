@extends('auth')

@section('pagetitle',' | Register')

@section('content')
<div class="register-box-body">
    <p class="login-box-msg">Register a new account</p>
    @if (count($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>
    @endif
    <form  method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

      <div class="row form-group" >
        <div class="col-xs-4" style="padding-top: 8px;">
            <label> Account Type </label>
        </div>
        <!-- /.col -->
        <div class="col-xs-8">
            <select class="form-control"  name="user_type">
                  <option>ADVERTISER</option>
                  <option>PUBLISHER</option>
                </select>
        </div>
        <!-- /.col -->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
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
        <div class="col-xs-8">
            
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="{{ route('login') }}" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->


@endsection

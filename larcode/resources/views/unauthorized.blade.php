@extends('master')

@section('heading','Unauthorized Access')

@section('subheading','')

@section('content')
  @if(session('error'))
    <div class="alert alert-danger">
            {{session('error')}}
        </div>
  @endif
@endsection
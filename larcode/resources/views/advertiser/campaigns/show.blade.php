@extends('master')

@section('content')
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">

      <h3 class="box-title"><strong>Campaign: </strong>{{$campaign->name}}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @include('partials.notifications')

        <div>
          <a href="{{route('advertiser.campaigns.index')}}" class="btn btn-default">&#x25c0; Back</a>
        </div>
        
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
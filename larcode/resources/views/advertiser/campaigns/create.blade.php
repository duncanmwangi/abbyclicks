@extends('master')

@section('content')
<div class="col-md-9">
  <div class="box box-info">
    <div class="box-header with-border">

      <h3 class="box-title">Create New Campaign</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @include('partials.notifications')
        <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('advertiser.campaigns.store')}}">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name that decribes the section">
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="description" placeholder="Describe this campaign">{{old('description')}}</textarea>
                  </div>
                </div>
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('advertiser.campaigns.index')}}" class="btn btn-default">&#x25c0; Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
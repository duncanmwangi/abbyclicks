@extends('master')

@section('content')
<div class="col-md-9">
  <div class="box box-info">
    <div class="box-header with-border">

      <h3 class="box-title">Edit Ad Section</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @include('partials.notifications')
        <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('admin.sections.update',$section->id)}}">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $section->name) }}" placeholder="Name that decribes the section">
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="description" placeholder="Describe this section for advertisers and publishers">{{old('description', $section->description)}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="width" class="col-sm-2 control-label">Width</label>

                  <div class="col-sm-2" style="padding-right: 0px;">
                    <input type="number" class="form-control" id="width" name="width" value="{{ old('width', $section->width) }}" placeholder="250">
                  </div>
                  <label class="col-sm-1 control-label" style="text-align: left; padding-left: 10px;">PX</label>
                  <label for="height" class="col-sm-2 control-label">Height</label>

                  <div class="col-sm-2" style="padding-right: 0px;">
                    <input type="number" class="form-control" id="height" name="height" value="{{ old('height', $section->height) }}" placeholder="250">
                  </div>
                  <label class="col-sm-2 control-label" style="text-align: left; padding-left: 10px;">PX</label>
                </div>
                <div class="form-group">
                  <label for="performance" class="col-sm-2 control-label">Performance</label>
                  <div class="col-sm-10">
                    <label class="col-sm-2 radio">
                      <input type="radio" name="performance" id="top" value="TOP" @if(old('performance', $section->performance)=="TOP") checked @endif>
                      Top
                    </label>

                    <label class="col-sm-2 radio">
                      <input type="radio" name="performance" id="other" value="OTHER" @if(old('performance', $section->performance)=="OTHER") checked @endif>
                      Other
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="display" class="col-sm-2 control-label">Display</label>
                  <div class="col-sm-10">
                    <label class="col-sm-2 radio">
                      <input type="radio" name="display" id="display" value="DISPLAY" @if(old('display', $section->display)=="DISPLAY") checked @endif>
                      Banner
                    </label>

                    <label class="col-sm-2 radio">
                      <input type="radio" name="display" id="text" value="TEXT" @if(old('display', $section->display)=="TEXT") checked @endif>
                      Text
                    </label>

                    <label class="col-sm-2 radio">
                      <input type="radio" name="display" id="mobile" value="MOBILE" @if(old('display', $section->display)=="MOBILE") checked @endif>
                      Mobile
                    </label>
                </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('admin.sections.index')}}" class="btn btn-default">&#x25c0; Back</a>
                <button type="submit" class="btn btn-info pull-right">UPDATE</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
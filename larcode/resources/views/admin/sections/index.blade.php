@extends('master')

@section('content')
<div class="col-md-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Ad Sections and Sizes</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

    	<a href="{{ route('admin.sections.create')}}" class="btn btn-primary" style="margin: 0px 0px 20px;">Create New Section</a>

      @include('partials.notifications')

    	<div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Size</th>
                  <th>Display</th>
                  <th>Performance</th>
                  <th>Action</th>
                </tr>
                @if(count($sections))
                  @foreach($sections as $section)
                    <tr>
                      <td>{{ $section->id }}</td>
                      <td>{{ $section->name }}</td>
                      <td>{{ $section->width}} X {{$section->height}}</td>
                      <td>
                        <span class="label 
                        @if($section->display=='DISPLAY') label-success @endif
                        @if($section->display=='TEXT') label-info @endif
                        @if($section->display=='MOBILE') label-warning @endif
                        ">{{ $section->display }}</span>
                      </td>
                      <td><span class="label 
                        @if($section->performance=='TOP') label-warning @else  label-info @endif">{{ $section->performance }}</span></td>
                      <td>
                        <a href="{{route('admin.sections.edit',$section->id)}}" class="btn btn-xs btn-info">Edit</a>
                        <form method="post" action="{{route('admin.sections.destroy',$section->id)}}" style="display: inline;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="6">No records found.</td>
                  </tr>
                @endif
                
              </table>
            </div>
            {{ $sections->links() }}

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
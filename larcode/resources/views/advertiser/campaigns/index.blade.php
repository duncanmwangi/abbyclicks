@extends('master')

@section('content')
<div class="col-md-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">My campaigns</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

    	<a href="{{ route('advertiser.campaigns.create')}}" class="btn btn-primary" style="margin: 0px 0px 20px;">Create New Campaign</a>

      @include('partials.notifications')

    	<div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>status</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
                @if(count($campaigns))
                  @foreach($campaigns as $campaign)
                    <tr>
                      <td>{{ $campaign->id }}</td>
                      <td><a href="{{route('advertiser.campaigns.show',$campaign->id)}}">{{ $campaign->name }}</a></td>
                      <td>
                        <span class="label 
                        @if($campaign->status=='RUNNING') label-success @endif
                        @if($campaign->status=='ACTIVE') label-info @endif
                        @if($campaign->status=='PAUSED') label-warning @endif
                        ">{{ $campaign->status }}</span>
                      </td>
                      <td>{{ $campaign->created_at->diffForHumans() }}</td>
                      <td>
                        <a href="{{route('advertiser.campaigns.show',$campaign->id)}}" class="btn btn-xs btn-default">View</a>
                        <a href="{{route('advertiser.campaigns.edit',$campaign->id)}}" class="btn btn-xs btn-info">Edit</a>
                        <form method="post" action="{{route('advertiser.campaigns.destroy',$campaign->id)}}" style="display: inline;">
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
            {{ $campaigns->links() }}

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
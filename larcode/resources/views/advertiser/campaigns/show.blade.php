@extends('master')

@section('content')
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">

      <h3 class="box-title"><strong>Campaign: </strong>{{$campaign->name}}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @if(!empty($campaign->description))
          <p>
            <span style="font-weight: bold;">Description: </span>
            {{$campaign->description}}
          </p>
        @endif
        @include('partials.notifications')

        <h4 style="margin-top: 30px; text-decoration: underline;">Campaign Adverts <a href="{{ route('advertiser.adverts.create',$campaign->id)}}" class="btn btn-primary btn-xs" style="margin: 0px 0px 0px 30px;">Create New Advert</a></h4>
        <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Section</th>
                  <th>state</th>
                  <th>status</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
                @if(count($adverts))
                  @foreach($adverts as $advert)
                    <tr>
                      <td>{{ $advert->id }}</td>
                      <td><a href="{{route('advertiser.adverts.show',['campaign'=>$campaign->id,'advert'=>$advert->id])}}">{{ $advert->name }}</a></td>
                      <td>{{ $advert->section->name }}</td>
                      <td>
                        <span class="label 
                        @if($advert->state=='PUBLISHED') label-success @endif
                        @if($advert->state=='DRAFT') label-warning @endif
                        ">{{ $advert->state }}</span>
                      </td>
                      <td>
                        <span class="label 
                        @if($advert->status=='RUNNING' || $advert->status=='APPROVED') label-success @endif
                        @if($advert->status=='REVIEW') label-info @endif
                        @if($advert->status=='PAUSED') label-warning @endif
                        @if($advert->status=='DECLINED') label-danger @endif
                        ">{{ $advert->status }}</span>
                      </td>
                      <td>{{ $advert->created_at->diffForHumans() }}</td>
                      <td>
                        <a href="{{route('advertiser.adverts.show',['campaign'=>$campaign->id,'advert'=>$advert->id])}}" class="btn btn-xs btn-default">View</a>
                        <a href="{{route('advertiser.adverts.edit',['campaign'=>$campaign->id,'advert'=>$advert->id])}}" class="btn btn-xs btn-info">Edit</a>
                        <form method="post" action="{{route('advertiser.adverts.destroy',['campaign'=>$campaign->id,'advert'=>$advert->id])}}" style="display: inline;">
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
            {{ $adverts->links() }}
        <div style="margin-top: 20px;">
          <a href="{{route('advertiser.campaigns.index')}}" class="btn btn-default">&#x25c0; Back</a>
        </div>
        
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
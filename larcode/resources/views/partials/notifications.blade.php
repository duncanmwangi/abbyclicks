@if(count($errors))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
  @foreach($errors->all() as $error)
    {{$error}}<br/>
  @endforeach
</div>
@endif



@if(session('info'))
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-info"></i> INFO!</h4>
  {{session('info')}}
</div>
@endif



@if(session('warning'))
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-warning"></i> WARNING!</h4>
  {{session('warning')}}
</div>
@endif


@if(session('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> SUCCESS!</h4>
  {{session('success')}}
</div>
@endif
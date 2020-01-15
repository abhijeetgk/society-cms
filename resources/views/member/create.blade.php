@extends('layouts.app')

@section('content')

<div class="panel panel-default">
<div class="panel-heading">Add a New Member</div>
  <div class="panel-body">
  
<form class="form-horizontal" action="{{ route('memberCreate') }}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ? old('name') : '' }}" placeholder="Enter Member Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="co_owner_name">Co Owner Name:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="co_owner_name" name="co_owner_name" placeholder="Enter Co Owner Name" value="{{ old('co_owner_name') ? old('co_owner_name') : '' }}" />
    </div>
    
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="flat_no">Flat No.:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="flat_no" name="flat_no" placeholder="Flat No." value="{{ old('flat_no') ? old('flat_no') : '' }}" />
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="floor_no">Floor No.:</label>
    <div class="col-sm-4"> 
      <input type="text" class="form-control" id="floor_no" name="floor_no" placeholder="Floor No." value="{{ old('floor_no') ? old('floor_no') : '' }}" />
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

<script>
$('#Ulip').addClass('active');
$('#ulip_index').css("background-color", "#ffdca8");
$("#ulip_index").find("a i").addClass("fa-circle");
</script>
@endsection
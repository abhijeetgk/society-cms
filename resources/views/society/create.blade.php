@extends('layouts.app')
@section('content')
<form action="{{ route('societyCreate') }}" method="POST">
{{ csrf_field() }}
  <div class="form-group row">
    <label for="societyName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="name" name="name" value="" placeholder="Enter Society Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <textarea name="address" id="address" cols="60" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" value="Add" />&nbsp;
      <input type="reset" class="btn btn-primary" value="Reset" />
    </div>
  </div>
</form>
@endsection
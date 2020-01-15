@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

</div>
<table class="table table-striped">

  <thead class="">
    <tr>
        <td colspan=4><a href="{{ route('memberInsert') }}"><button type="button" class="btn btn-primary">Add New</button></a></td>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Co owner name</th>
      <th scope="col">Flat no</th>
      <th scope="col">Floor no</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>

    @foreach ($member_list as $member)
    <tr>
        <th scope="row">{{ $member->id }}</th>
        <td>{{ $member->name }}</td>
        <td>{{ $member->co_owner_name }}</td>
        <td>{{ $member->flat_no }}</td>
        <td>{{ $member->floor_no }}</td>
       
    </tr>

    @endforeach
    </table>
</div>

{{ $member_list->links() }}
@endsection

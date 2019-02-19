@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

</div>
<table class="table table-striped">

  <thead class="">
    <tr>
        <td colspan=4><a href="{{ route('societyInsert') }}"><button type="button" class="btn btn-primary">Add New</button></a></td>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($society_list as $society)
    <tr>
        <th scope="row">{{ $society->id }}</th>
        <td>{{ $society->name }}</td>
        <td><address>{{ $society->address }}</address></td>
        <td>
          <a href="{{ route('societySelect', ['soc_id' => $society->id])}}"><i class="material-icons" style="font-size:20px">done</i></a>
          <a href="{{ route('society.edit',['soc_id' => $society->id]) }}"><i class="material-icons" style="font-size:20px">edit</i></a>
          </td>
    </tr>

    @endforeach
    </table>
</div>
{{ $society_list->links() }}
@endsection

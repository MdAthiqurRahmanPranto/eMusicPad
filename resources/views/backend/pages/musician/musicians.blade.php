@extends('backend.adminpanel')

@section('contents')
<h1>Musician List</h1>

<a href="{{route('musician.form')}}" class="btn btn-primary">
    Add Musician
</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Band</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
  @foreach($musician_list as $data)
  <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->band}}</td>
      <td>
        <a href="" class="btn btn-primary">View</a>
        <a href="" class="btn btn-danger">Delect</a>
        <a href="" class="btn btn-secondary">Edit</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>



@endsection

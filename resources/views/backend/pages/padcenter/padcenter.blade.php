@extends('backend.adminpanel')

@section('contents')
<h1>Padcenter List</h1>
<a href="{{ route('padcenter-form') }}" class="btn btn-primary">Add New Padcenter</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($pad_center as $data )
        <tr>
          {{-- @dd($data); --}}
          <th>{{$data->id}}</th>
          <td>{{ $data->name }}</td> 
          <td>{{ $data->location }}</td>
          <td>{{ $data->phone }}</td>
          <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-danger">Delect</a>
            <a href="" class="btn btn-success">Edit</a>
          </td>
          
        </tr>
        @endforeach
        
      
      </tbody>

</table>
      {{ $pad_center->links('pagination::bootstrap-4') }}

@endsection
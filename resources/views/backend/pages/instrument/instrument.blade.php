@extends('backend.adminpanel')

@section('contents')

<h1>Instrument List</h1>
<a href="{{ route('instrument.list') }}" class="btn btn-primary">Add New Instrument</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">Padcenter</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($inst as $data )
        <tr>
          {{-- @dd($data); --}}
          <th>{{$data->id}}</th>
          <td>{{ $data->name }}</td> 
          <td>{{ $data->price}}</td> 
          <td>{{ $data->padcenter->name }}</td> 
         
          <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-danger">Delect</a>
            <a href="" class="btn btn-success">Edit</a>
          </td>
          
        </tr>
        @endforeach
        
      
      </tbody>

</table>
@endsection
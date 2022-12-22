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

        @foreach ($inst as $key=>$data )
        <tr>
          {{-- @dd($data); --}}
          <th>{{$key+1}}</th>
          <td>{{ $data->name }}</td> 
          <td>{{ $data->price}}</td> 
          <td>{{ $data->padcenter->name }}</td> 
         
          <td>
          
            <a href="{{ route('instrument.delete',$data->id) }}" class="btn btn-danger">Delect</a>
          
          </td>
          
        </tr>
        @endforeach
        
      
      </tbody>

</table>
@endsection
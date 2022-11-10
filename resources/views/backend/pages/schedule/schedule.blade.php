@extends('backend.adminpanel')

@section('contents')
<h1>Schedule List</h1>
<a href="{{ route('schedule.create') }}" class="btn btn-primary">Add Schedule</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">padcenter</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($schedule as $data )
        <tr> 
            
           
           <th>{{$data->id}}</th>
          <td>{{ $data->date }}</td> 
          <td>{{ $data->slot }}</td> 
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
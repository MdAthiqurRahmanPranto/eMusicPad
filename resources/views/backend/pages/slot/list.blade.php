@extends('backend.adminpanel')

@section('contents')
<h1>Slot List</h1>
<a href="{{ route('slot.create') }}" class="btn btn-primary">Add Slot</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">startingTime</th>
      <th scope="col">endingTime</th>
      <th scope="col">padcenter</th>
     
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($slot as $data )
        <tr> 
            
           
           <th>{{$data->id}}</th>
          <td>{{ $data->startingTime }}</td> 
          <td>{{ $data->endingTime}}</td> 
          <td>{{ $data->padcenter->name}}</td> 
          
        
        
          
        </tr>
        @endforeach
      
      </tbody>

</table>
@endsection
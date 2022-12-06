@extends('backend.adminpanel')

@section('contents')
<h1>Day List</h1>
<a href="{{ route('day.create') }}" class="btn btn-primary">Add Day</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Days</th>
      
     
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($days as $data )
        <tr> 
            
           
           <th>{{$data->id}}</th>
          <td>{{ $data->days }}</td> 
          
          
        
        
          
        </tr>
        @endforeach
      
      </tbody>

</table>
@endsection
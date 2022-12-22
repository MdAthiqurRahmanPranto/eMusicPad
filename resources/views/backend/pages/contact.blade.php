@extends('backend.adminpanel')

@section('contents')
<h1>Contact List</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>

    
    </tr>
  </thead>
       
  <tbody>
   
    @foreach($Contact as $data)
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->message}}</td>
        
      </tr>
     @endforeach
    </tbody>

</table>
@endsection
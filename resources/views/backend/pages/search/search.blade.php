@extends('backend.adminpanel')

@section('contents')
<h1>Padcenter List</h1>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Phone</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($search as $key=>$data )
        <tr>
          {{-- @dd($data); --}}
          <th>{{$key+1}}</th>
          <td>{{ $data->name }}</td> 
          <td>{{ $data->location }}</td>
          <td>{{ $data->phone }}</td>
          <td>
            
            <img width="100px" src="{{ url('/uploads/'.$data->image) }}" alt="">
          
          </td>
          <td>
            <a href="{{ route('padcenter.view',$data->id) }}" class="btn btn-primary">View</a>
            <a href="{{ route('padcenter.delect',$data->id) }}" class="btn btn-danger">Delect</a>
            <a href="{{ route('padcenter.edit',$data->id) }}" class="btn btn-success">Edit</a>
          </td>
          
        </tr>
        @endforeach
        
      
      </tbody>

</table>
      {{-- {{ $pad_center->links('pagination::bootstrap-4') }} --}}

@endsection
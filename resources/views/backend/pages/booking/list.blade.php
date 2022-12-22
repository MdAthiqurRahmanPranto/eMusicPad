@extends('backend.adminpanel')

@section('contents')

<h1>Booking List</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Band</th>
      <th scope="col">Date</th>
      <th scope="col">Padcenter</th>
      <th scope="col">Slot</th>
      <th scope="col">Instrument</th>
      <th scope="col">Payment</th>
      <th scope="col">Transaction</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
       
  
      <tbody>

        @foreach ($booking as $data )
        <tr>
          
          <th>{{$data->id}}</th>
          <td>{{ $data->name }}</td> 
          <td>{{ $data->email}}</td> 
          <td>{{ $data->phone}}</td> 
          <td>{{ $data->band}}</td> 
          <td>{{ $data->date}}</td> 
          <td>{{ $data->padcenter}}</td> 
          <td>{{ $data->schedhule}}</td> 
          <td>
            <a href="{{ route('booking.inslist',$data->id) }}" class="btn btn-primary">View</a>
          </td> 
          <td>{{ $data->payment}}</td> 
          <td>{{ $data->transaction_id}}</td>  
          <td>{{ $data->status}}</td> 

          {{-- <td>{{ $data->padcenter->name }}</td>  --}}
         
          <td>
            @if ($data->status==='pending')
            <a href="{{ route('booking.yes',$data->id) }}" class="btn btn-success"  >Yes</a>
            <a href="{{ route('booking.no',$data->id) }}" class="btn btn-danger"  >No</a>
            @endif
            
          </td>
          
        </tr>
        @endforeach
        
      
      </tbody>
    
@endsection
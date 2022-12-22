@extends('frontend.master')

@section('contents')

    <div class="d-flex justify-content-center">
      
      <div class=" bg-white px-3 mb-3 pb-3 mt-5"  style=" width:600px">
        
        @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
        
        
        
        <h1>Musician Profile</h1>
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="py-2">Full Name</p>
                    <p class="py-2 text-muted">{{ $musician->name }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="py-2">Email</p>
                    <p class="py-2 text-muted">{{ $musician->email }}</p>
                </div>
              
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="py-2">Mobile</p>
                    <p class="py-2 text-muted">{{ $musician->phone }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="py-2">Band</p>
                    <p class="py-2 text-muted">{{ $musician->band }}</p>
                   
                </div>
                <a type="submit" href="{{ route('edit.profile',$musician->id) }}" class="btn btn-primary">Edit</a>
            </div>
       </div>    
       <h1 style="color: white">Booking List</h1>
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
      {{-- @dd($booking) --}}
              @foreach ($booking as $data)
                
             
              
              <tr>
                
                <th>{{$data->id}}</th>
                <td>{{ $data->name }}</td> 
                <td>{{ $data->email}}</td> 
                <td>{{ $data->phone}}</td> 
                <td>{{ $data->band}}</td> 
                <td>{{ $data->date}}</td> 
                <td>{{ $data->padcenterRelation[0]->name}}</td> 
                <td>{{ $data->schedhule}}</td> 
                <td>{{ $data->instrument}}</td> 
                <td>{{ $data->payment}}</td> 
                <td>{{ $data->transaction_id}}</td>
                <td>{{ $data->status}}</td> 
      
                
               
                <td>
                
                  <a href="{{ route('invoice',$data->id) }}" class="btn btn-success"  >Details</a>
                 
                 
                  
                </td>
                
              </tr>
              
              @endforeach
              
              
            
            </tbody>

@endsection
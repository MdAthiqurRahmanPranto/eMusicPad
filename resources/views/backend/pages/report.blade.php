@extends('backend.adminpanel')

@section('contents')
<style>
  @media print{
      body *:not(#printableArea):not(#printableArea *){
          visibility: hidden;
      }
  #printableArea{
      position: absolute;
      visibility: visible;
  }
  }
</style>

<form action="{{ route('report.list.submit') }}" method="POST">
  @csrf
  <h2>Select Dates</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="" style="font-size: 20px" >
    <label for="name">From</label>
    <input name="from" type="date" class="form-control" value="{{ old('from') }}" id="name" required  >
 
  </div>
  <div class="" style="font-size: 20px">
    <label for="name">To</label>
    <input name="to" type="date" class="form-control" value="{{ old('to') }}" id="name"  required >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





<h1>Report Table</h1>

<table class="table table-striped table-dark" id="printableArea">
  
  
  <thead>
    
    
    <tr>
      <th scope="col">Id</th>
      <th scope="col">PadCenter</th>
      <th scope="col">Booking date</th>
      <th scope="col">Slots</th>
      <th scope="col">Band</th>
      <th scope="col">Name</th>

      
     
    </tr>
  
  
  </thead>
       
  
      <tbody>

        @foreach ($report as $data )
        <tr> 
            
           
          <th>{{$data->id}}</th>
          <td>{{ $data->padcenter}}</td> 
          <td>{{ $data->date}}</td> 
          <td>{{ $data->schedhule}}</td> 
          <td>{{ $data->band}}</td> 
          <td>{{ $data->name}}</td> 
          {{-- <td>{{ $data->padcenter->name}}</td>  --}}
          
        
        
          
        </tr>
        @endforeach
      
      </tbody>
      
</table>
<div class="text-right mb-3" id="print">
  <button onclick="window.print()" class="btn btn-danger btn-sm mr-5" type="submit">Print</button>
</div>

@endsection








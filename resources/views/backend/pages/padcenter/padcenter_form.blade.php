@extends('backend.adminpanel')

@section('contents')
   
<form action="{{ route('padcenter.store') }}" method="post">
    
    @if ($errors->any())
        @foreach ($errors->all() as $err )
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        
    @endif
    
    
    
    @csrf  
    <label class="col-lg-4 col-form-label">Name <span class="text-danger">*</span> </label>
    <input required type="text" class="form-control " placeholder="Enter Pad Center Name"  name="name" >
    <label class="col-lg-4 col-form-label">Location <span class="text-danger">*</span> </label>
    <input type="text" class="form-control " placeholder="Enter Location" name="location" >
    <label class="col-lg-4 col-form-label">Phone <span class="text-danger">*</span> </label>
    <input type="text" class="form-control " placeholder="Enter Phone Number" name="phone" >
    <button  class="btn btn-primary" type="submit">Submit</button>

</form>



@endsection
@extends('backend.adminpanel')

@section('contents')
   
<form action="{{ route('padcenter.store') }}" method="post" enctype="multipart/form-data" >
    
    @if ($errors->any())
        @foreach ($errors->all() as $err )
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        
    @endif
    
    
    
    @csrf  
    
    <div class="form-group">
        <label for="name">Enter Pad Center Name</label>
        <input required name="name" type="text" class="form-control" id="name" placeholder="Enter Category Name">
    </div>
    
    <div class="form-group">
        <label for="name">Phone</label>
        <input required name="phone" type="text" class="form-control" id="name" placeholder="Enter Category Name">
    </div>
    
    <div class="form-group">
        <label for="name">Location</label>
        <input required name="location" type="text" class="form-control" id="name" placeholder="Enter Category Name">
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input name="image" type="file" class="form-control" id="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    
    
    
    
    
    {{-- <label class="col-lg-4 col-form-label">Name <span class="text-danger">*</span> </label>
    <input required type="text" class="form-control " placeholder="Enter Pad Center Name"  name="name" >
    <label class="col-lg-4 col-form-label">Location <span class="text-danger">*</span> </label>
    <input type="text" class="form-control " placeholder="Enter Location" name="location" >
    <label class="col-lg-4 col-form-label">Phone <span class="text-danger">*</span> </label>
    <input type="text" class="form-control " placeholder="Enter Phone Number" name="phone" >
    <button  class="btn btn-primary" type="submit">Submit</button> --}}

</form>



@endsection
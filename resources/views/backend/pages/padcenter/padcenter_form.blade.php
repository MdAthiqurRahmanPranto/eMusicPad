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
        <input required name="name" type="text" class="form-control" id="name"  placeholder="Enter Pad Center Name">
    </div>
    
    <div class="form-group">
        <label for="name">Phone</label>
        <input required name="phone" type="text" class="form-control" id="name" placeholder="Enter Phone">
    </div>
    
    <div class="form-group">
        <label for="name">Location</label>
        <input required name="location" type="text" class="form-control" id="name" placeholder="Enter Location">
    </div>

    <div class="form-group">
        <label for="name">Description</label>
        <textarea class="form-control" name="description" id=""></textarea>
    </div>

    <div class="form-group">
        <label for="name">Price</label>
        <input required name="price" type="text" class="form-control" id="name" placeholder="BDT">
    </div>

    

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input name="image" type="file" class="form-control" id="image">
    </div>

   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    
    
    
    
    


</form>



@endsection
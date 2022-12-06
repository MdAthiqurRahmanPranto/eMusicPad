@extends('backend.adminpanel')


@section('contents')
<h1>Update List</h1>
<form action="{{ route('padcenter.update',$padcenter->id) }}" method="post" enctype="multipart/form-data" >
    @method('put')
    
    @if ($errors->any())
        @foreach ($errors->all() as $err )
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        
    @endif
    
    
    
    @csrf  
    
    <div class="form-group">
        <label for="name">Enter Pad Center Name</label>
        <input required name="name" value="{{ $padcenter->name }}" type="text" class="form-control" id="name"  placeholder="Enter PadCenter Name">
    </div>
    
    <div class="form-group">
        <label for="name">Phone</label>
        <input required name="phone" value="{{ $padcenter->phone }}" type="text" class="form-control" id="name" placeholder="Enter Phone Number">
    </div>
    
    <div class="form-group">
        <label for="name">Location</label>
        <input required name="location" type="text" value="{{ $padcenter->location }}" class="form-control" id="name" placeholder="Enter Location Name">
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input name="image"  type="file" class="form-control" id="image">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
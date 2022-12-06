@extends('backend.adminpanel')

@section('contents')

<form action="{{ route('instrument.store') }}" method="post">
    
    @if ($errors->any())
    @foreach ($errors->all() as $err )
        <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
    
@endif
    
    
    @csrf
    <div>
        <label class="col-lg-4 col-form-label">Name <span class="text-danger">*</span> </label>
        <input required type="text" class="form-control " placeholder="Enter Instrument Name"  name="name" >
    </div>

    <div>
        <label class="col-lg-4 col-form-label">Price <span class="text-danger">*</span> </label>
        <input required type="text" class="form-control " placeholder="BDT"  name="price" >
    </div>
   
    
    <select name="padcenter_id">
        @foreach ($padcenters as $item)
            
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach

    </select>
    <button  class="btn btn-primary" type="submit">Submit</button>
</form>


    
@endsection
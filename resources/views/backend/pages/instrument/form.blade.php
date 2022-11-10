@extends('backend.adminpanel')

@section('contents')

<form action="{{ route('instrument.store') }}" method="post">
    
    @if ($errors->any())
    @foreach ($errors->all() as $err )
        <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
    
@endif
    
    
    
    @csrf
    <label class="col-lg-4 col-form-label">Name <span class="text-danger">*</span> </label>
    <input required type="text" class="form-control " placeholder="Enter Pad Center Name"  name="name" >
    <select name="padcenter_id">
        @foreach ($padcenters as $item)
            
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach

    </select>
    <button  class="btn btn-primary" type="submit">Submit</button>
</form>


    
@endsection
@extends('frontend.master')

@section('contents')
<form class="form-valide" action="{{route('update.profile',$musician->id)}}" method="post">
    @method('put')
    @csrf  
      <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter name.." value="{{ $musician->name }}" required>
  
      <label class="col-lg-4 col-form-label" for="val-username">Email <span class="text-danger">*</span></label>
      <input type="email" class="form-control" id="val-username" name="email" placeholder="Enter address.." value="{{ $musician->email }}" required>
  
      <label class="col-lg-4 col-form-label" for="val-username">Phone <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="val-username" name="phone" placeholder="Enter phone.." value="{{ $musician->phone }}" required>
  
      <label class="col-lg-4 col-form-label" for="val-username">Band <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="val-username" name="band" placeholder="Enter band.." value="{{ $musician->band }}" required>
  
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
  
    </form>
@endsection
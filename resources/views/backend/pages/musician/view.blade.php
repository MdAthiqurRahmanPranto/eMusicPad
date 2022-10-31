@extends('backend.adminpanel')

@section('contents')
<div class="m-3">
    <label class="col-lg-4 col-form-label" for="val-username">Name</label>
    <input type="text" class="form-control" id="val-username" value="{{ $musician->name }}" disabled>
    <label class="col-lg-4 col-form-label" for="val-username">Address</label>
    <input type="text" class="form-control" id="val-username" value="{{ $musician->address }}" disabled>
    <label class="col-lg-4 col-form-label" for="val-username">Phone</label>
    <input type="text" class="form-control" id="val-username" value="{{ $musician->phone }}" disabled>
    <label class="col-lg-4 col-form-label" for="val-username">Band</label>
    <input type="text" class="form-control" id="val-username" value="{{ $musician->band }}" disabled>
</div>
@endsection

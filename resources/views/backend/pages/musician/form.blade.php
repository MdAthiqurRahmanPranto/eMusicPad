@extends('backend.adminpanel')

@section('contents')
<form class="form-valide" action="{{ route('musician.create') }}" method="post">
    @csrf
    <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter name.." required>

    <label class="col-lg-4 col-form-label" for="val-username">Address <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="val-username" name="address" placeholder="Enter address.." required>

    <label class="col-lg-4 col-form-label" for="val-username">Phone <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="val-username" name="phone" placeholder="Enter phone.." required>

    <label class="col-lg-4 col-form-label" for="val-username">Band <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="val-username" name="band" placeholder="Enter band.." required>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection

@extends('backend.adminpanel')

@section('contents')
    
<form action="{{ route('schedule.store') }}" method="post">
    @csrf  
    <label class="col-lg-4 col-form-label">Slots<span class="text-danger">*</span> </label>
    <input required type="date" class="form-control " placeholder="Enter Pad Center Name"  name="time" >
    <select name="slot" id="">
        <option value="9:00am-12:00am">9:00am-12:00am</option>
        <option value="1:00am-4:00pm">1:00am-4:00pm</option>
        <option value="4:00am-8:00pm">4:00am-8:00pm</option>
    </select>
    <select name="padcenter_id">
        @foreach ($padcenters as $item)
            
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    <button  class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection
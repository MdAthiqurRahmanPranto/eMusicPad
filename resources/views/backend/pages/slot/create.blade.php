@extends('backend.adminpanel')

@section('contents')

<form action="{{ route('slot.store') }}" method="POST">
    @csrf
    <div class="form-control">

        <label for="appt">Starting time:</label>
        <input type="time" id="appt" name="startTime">
        
        <label for="appt">Ending time:</label>
        <input type="time" id="appt" name="endTime">

        <select name="padcenter_id">
            @foreach ($padcenter as $item)
                
            <option value="{{ $item->id}}">{{ $item->name}}</option>
            @endforeach
    
        </select>

        
        
        <button  class="btn btn-primary" type="submit">Submit</button>
        
        </div>
     

    
</form>


@endsection
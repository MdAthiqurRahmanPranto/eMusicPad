@extends('backend.adminpanel')

@section('contents')
    <form action="{{ route('day.store') }}" method="POST">
        @csrf
        <div class="form-control">

            <label for="">Days</label>
            <input type="text" name=days>

            <select name="slots_id">
                @foreach ($slots as $item)
                    
                <option value="{{ $item->id}}">{{ $item->days}}</option>
                @endforeach
        
            </select>
            
        <button class="btn btn-primary" type="submit">Submit</button>

        </div>

        
    
    </form>
@endsection
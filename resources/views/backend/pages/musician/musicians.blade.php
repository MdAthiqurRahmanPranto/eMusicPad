@extends('backend.adminpanel')

@section('contents')
<h1>Musician List</h1>

<a href="{{route('musician.form')}}" class="btn btn-primary">
    Add Musician
</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Band</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($musician as $key=>$data)
        <tr>
            <th>{{ $key+1 }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->band }}</td>
            <td>
                <a href="{{ route('musician.single', $data->id) }}" class="btn btn-success">View</a>
                <a href="{{ route('musician.update.form', $data->id) }}" class="btn btn-primary">Update</a>
                <a href="{{ route('musician.delete', $data->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection

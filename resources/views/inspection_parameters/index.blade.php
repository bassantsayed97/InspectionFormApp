{{-- resources/views/inspection_forms/index.blade.php --}}
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Inspection Parameters</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>s_no</th>
                <th>inspection_form_id</th>
                <th>inspection_parameter</th>
                <th>check_type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parameters as $parameter)
            <tr>
                <td>{{ $parameter->id }}</td>
                <td>{{ $parameter->s_no }}</td>
                <td>{{ $parameter->inspection_form_id }}</td>
                <td>{{ $parameter->inspection_parameter }}</td>
                <td>{{ $parameter->check_type }}</td>
                <td>

                    <a href="{{ route('inspection_parameters.show', ['inspectionFormId' => $inspectionFormId, 'inspectionParameterId' => $parameter->id]) }}" class="btn btn-info">
                        View Parameter
                    </a>
                    <a href="{{ route('inspection_parameters.edit', ['inspectionFormId' => $inspectionFormId, 'inspectionParameterId' => $parameter->id]) }}" class="btn btn-warning">
                        Edit Parameter
                    </a>


                    {{-- <form action="{{ route('inspection_parameters.destroy', $parameter->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

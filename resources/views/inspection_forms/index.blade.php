{{-- resources/views/inspection_forms/index.blade.php --}}
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Inspection Forms</h1>

        <a href="{{ route('inspection_forms.create') }}" class="btn btn-primary mb-3">Create New Inspection Form</a>

        {{-- @if($forms->isEmpty())
            <p>No inspection forms found.</p>
        @else --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Work Order Number</th>
                        <th>Customer Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                        <tr>
                            <td>{{ $form->id }}</td>
                            <td>{{ $form->work_order_no }}</td>
                            <td>{{ $form->customer_name }}</td>
                            <td>
                                <a href="{{ route('inspection_forms.show', $form->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('inspection_forms.edit', $form->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('inspection_forms.destroy', $form->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{-- @endif --}}
    </div>
@endsection

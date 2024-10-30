{{-- resources/views/inspection_forms/show.blade.php --}}
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Inspection Form Details</h1>

        <div class="mb-3">
            <strong>ID:</strong> {{ $form->id }}
        </div>

        <div class="mb-3">
            <strong>Work Order Number:</strong> {{ $form->work_order_no }}
        </div>

        <div class="mb-3">
            <strong>Customer Name:</strong> {{ $form->customer_name }}
        </div>

        {{-- Display other fields as needed --}}

        <a href="{{ route('inspection_forms.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        <a href="{{ route('inspection_forms.edit', $form->id) }}" class="btn btn-warning mt-3">Edit</a>
    </div>
@endsection

{{-- resources/views/inspection_forms/edit.blade.php --}}
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Edit Inspection Form</h1>

        <form action="{{ route('inspection_forms.update', $form->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="work_order_no">Work Order no</label>
                <input type="text" name="work_order_no" id="work_order_no" class="form-control" value="{{ $form->work_order_no }}" required>
            </div>

            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $form->customer_name }}" required>
            </div>

            

            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
            <a href="{{ route('inspection_forms.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection

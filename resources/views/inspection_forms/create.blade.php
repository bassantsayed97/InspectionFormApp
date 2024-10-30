{{-- resources/views/inspection_forms/create.blade.php --}}
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Create New Inspection Form</h1>

        <form action="{{ route('inspection_forms.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="work_order_no">Work Order Number</label>
                <input type="text" name="work_order_no" id="work_order_no" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="production_order_no">production order no</label>
                <input type="text" name="production_order_no" id="production_order_no" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="project">project</label>
                <input type="text" name="project" id="project" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="quality_inspector">quality inspector</label>
                <input type="text" name="quality_inspector" id="quality_inspector" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date"> date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>



            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <a href="{{ route('inspection_forms.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection

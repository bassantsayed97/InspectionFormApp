{{-- resources/views/inspection_forms/create.blade.php --}}
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Add Inspection Parameter</h1>

    <form action="{{ route('inspection_parameters.store', ['inspectionFormId' => $inspectionFormId]) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="s_no">Serial Number</label>
            <input type="text" name="s_no" id="s_no" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="inspection_parameter">Inspection Parameter</label>
            <input type="text" name="inspection_parameter" id="inspection_parameter" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="check_type">Check Type</label>
            <input type="text" name="check_type" id="check_type" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="accepted">Accepted</label>
            <input type="number" name="accepted" id="accepted" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="rejected">Rejected</label>
            <input type="number" name="rejected" id="rejected" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="qc_noted">QC Noted</label>
            <input type="text" name="qc_noted" id="qc_noted" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Parameter</button>
    </form>
</div>
@endsection

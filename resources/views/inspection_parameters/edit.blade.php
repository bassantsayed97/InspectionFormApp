{{-- resources/views/inspection_forms/edit.blade.php --}}
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Inspection Parameter</h1>

    <form action="{{ route('inspection_parameters.update', ['inspectionFormId' => $inspectionFormId, 'inspectionParameterId' => $inspectionParameter->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="s_no">Serial Number</label>
            <input type="text" name="s_no" id="s_no" class="form-control" value="{{ $inspectionParameter->s_no }}" required>
        </div>

        <div class="form-group">
            <label for="inspection_parameter">Inspection Parameter</label>
            <input type="text" name="inspection_parameter" id="inspection_parameter" class="form-control" value="{{ $inspectionParameter->inspection_parameter }}" required>
        </div>

        <div class="form-group">
            <label for="check_type">Check Type</label>
            <input type="text" name="check_type" id="check_type" class="form-control" value="{{ $inspectionParameter->check_type }}" required>
        </div>

        <div class="form-group">
            <label for="accepted">Accepted</label>
            <input type="number" name="accepted" id="accepted" class="form-control" value="{{ $inspectionParameter->accepted }}" required>
        </div>

        <div class="form-group">
            <label for="rejected">Rejected</label>
            <input type="number" name="rejected" id="rejected" class="form-control" value="{{ $inspectionParameter->rejected }}" required>
        </div>

        <div class="form-group">
            <label for="qc_noted">QC Noted</label>
            <input type="text" name="qc_noted" id="qc_noted" class="form-control" value="{{ $inspectionParameter->qc_noted }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Parameter</button>
    </form>
</div>
@endsection

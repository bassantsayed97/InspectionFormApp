{{-- resources/views/inspection_forms/show.blade.php --}}
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Inspection Parameter Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><strong>Parameter:</strong> {{ $inspectionParameter->inspection_parameter }}</h5>
            <p><strong>Serial Number:</strong> {{ $inspectionParameter->s_no }}</p>
            <p><strong>Check Type:</strong> {{ $inspectionParameter->check_type }}</p>
            <p><strong>Accepted:</strong> {{ $inspectionParameter->accepted }}</p>
            <p><strong>Rejected:</strong> {{ $inspectionParameter->rejected }}</p>
            <p><strong>QC Noted:</strong> {{ $inspectionParameter->qc_noted }}</p>
            <a href="{{ route('inspection_parameters.index', ['inspectionFormId' => $inspectionFormId]) }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection

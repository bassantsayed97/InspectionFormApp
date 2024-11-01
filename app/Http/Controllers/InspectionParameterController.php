<?php

namespace App\Http\Controllers;

use App\Http\Requests\InspectionParameterRequest;
use App\Repositories\InspectionParameterRepository;
use Illuminate\Http\Request;

class InspectionParameterController extends Controller
{
    protected $inspectionParameterRepository;

    public function __construct(InspectionParameterRepository $inspectionParameterRepository)
    {
        $this->inspectionParameterRepository = $inspectionParameterRepository;
    }

    public function index($inspectionFormId)
    {
        $parameters = $this->inspectionParameterRepository->getAllByFormId($inspectionFormId);
        return view('inspection_parameters.index', compact('parameters', 'inspectionFormId'));
    }

    public function create($inspectionFormId)
    {
        return view('inspection_parameters.create', compact('inspectionFormId'));
    }

    public function store(InspectionParameterRequest $request, $inspectionFormId)
    {
        // dd($request->all());
        $this->inspectionParameterRepository->create(array_merge($request->validated(), ['inspection_form_id' => $inspectionFormId]));
        return redirect()->route('inspection_forms.index')->with('success', 'Parameter added successfully.');
    }

    public function show($inspectionFormId, $id)
    {
        $inspectionParameter = $this->inspectionParameterRepository->getById($id);
        return view('inspection_parameters.show', compact('inspectionParameter', 'inspectionFormId'));
    }

    public function edit($inspectionFormId, $id)
    {
        $inspectionParameter = $this->inspectionParameterRepository->getById($id);
        return view('inspection_parameters.edit', compact('inspectionParameter', 'inspectionFormId'));
    }

    public function update(InspectionParameterRequest $request, $inspectionFormId, $id)
    {
        $inspectionParameter = $this->inspectionParameterRepository->getById($id);
        $this->inspectionParameterRepository->update($inspectionParameter, $request->validated());
        return redirect()->route('inspection_parameters.index', $inspectionFormId)->with('success', 'Parameter updated successfully.');
    }

    public function destroy($inspectionFormId, $id)
    {
        $inspectionParameter = $this->inspectionParameterRepository->getById($id);
        $this->inspectionParameterRepository->delete($inspectionParameter);
        return redirect()->route('inspection_parameters.index', $inspectionFormId)->with('success', 'Parameter deleted successfully.');
    }
}

<?php

namespace App\Repositories;

use App\Models\InspectionParameter;
use App\Repositories\Interfaces\InspectionParameterRepositoryInterface;

class InspectionParameterRepository implements InspectionParameterRepositoryInterface
{
    public function getAllByFormId($formId)
    {
        return InspectionParameter::where('inspection_form_id', $formId)->get();
    }

    public function create(array $data)
    {
        return InspectionParameter::create($data);
    }

    public function update(InspectionParameter $inspectionParameter, array $data)
    {
        return $inspectionParameter->update($data);
    }

    public function delete(InspectionParameter $inspectionParameter)
    {
        return $inspectionParameter->delete();
    }
}


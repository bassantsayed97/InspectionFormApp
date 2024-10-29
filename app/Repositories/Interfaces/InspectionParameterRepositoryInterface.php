<?php

namespace App\Repositories\Interfaces;

use App\Models\InspectionParameter;

interface InspectionParameterRepositoryInterface
{
    public function getAllByFormId($formId);
    public function create(array $data);
    public function update(InspectionParameter $inspectionParameter, array $data);
    public function delete(InspectionParameter $inspectionParameter);
}



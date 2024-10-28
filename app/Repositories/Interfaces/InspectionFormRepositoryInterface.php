<?php

namespace App\Repositories\Interfaces;

use App\Models\InspectionForm;

interface InspectionFormRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(InspectionForm $inspectionForm, array $data);
    public function delete(InspectionForm $inspectionForm);
}


<?php
namespace App\Repositories;

use App\Models\InspectionForm;
use App\Repositories\Interfaces\InspectionFormRepositoryInterface;

class InspectionFormRepository implements InspectionFormRepositoryInterface
{
    public function getAll()
    {
        return InspectionForm::all();
    }

    public function getById($id)
    {
        return InspectionForm::findOrFail($id);
    }

    public function create(array $data)
    {
        return InspectionForm::create($data);
    }

    public function update(InspectionForm $inspectionForm, array $data)
    {
        return $inspectionForm->update($data);
    }

    public function delete(InspectionForm $inspectionForm)
    {
        return $inspectionForm->delete();
    }
}

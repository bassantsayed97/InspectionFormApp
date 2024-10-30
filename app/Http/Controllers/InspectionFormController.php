<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectionFormRequest;
use App\Http\Requests\UpdateInspectionFormRequest;
use App\Models\InspectionForm;
use App\Repositories\Interfaces\InspectionFormRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class InspectionFormController extends Controller
{
    protected $inspectionFormRepo;

    public function __construct(InspectionFormRepositoryInterface $inspectionFormRepo)
    {
        $this->inspectionFormRepo = $inspectionFormRepo;
    }

    public function index()
    {
        // dd(InspectionForm::all());

        $forms = $this->inspectionFormRepo->getAll();
        return view('inspection_forms.index', compact('forms'));
    }

    public function show($id)
    {
        $form = $this->inspectionFormRepo->getById($id);
        return view('inspection_forms.show', compact('form'));
    }

    public function create()
    {
        return view('inspection_forms.create');
    }

    public function store(StoreInspectionFormRequest $request)
    {

        $validatedData = $request->validated();
        // dd($request->all());
        // Handle file upload if provided
        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $filePath = $file->store('signatures', 'public'); // Store the file in the 'public/signatures' directory
            $validatedData['signature'] = $filePath;
        }

        $this->inspectionFormRepo->create($validatedData);
        return redirect()->route('inspection_forms.index');
    }

    public function edit($id)
    {
        $form = $this->inspectionFormRepo->getById($id);
        return view('inspection_forms.edit', compact('form'));
    }

    public function update(UpdateInspectionFormRequest $request, $id)
    {
        $validatedData = $request->validated();
        $form = $this->inspectionFormRepo->getById($id);

        // Handle file upload if provided
        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $filePath = $file->store('signatures', 'public'); // Store the file in the 'public/signatures' directory
            $validatedData['signature'] = $filePath;
        }

        $this->inspectionFormRepo->update($form, $validatedData);
        return redirect()->route('inspection_forms.index');
    }


    public function delete(InspectionForm $inspectionForm)
    {
        // Delete the file if it exists
        if ($inspectionForm->signature && Storage::disk('public')->exists($inspectionForm->signature)) {
            Storage::disk('public')->delete($inspectionForm->signature);
        }

        return $inspectionForm->delete();
    }
}

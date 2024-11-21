<?php

namespace App\Http\Controllers;

use App\DataTables\DocumentationDataTable;
use App\Http\Requests\CreateDocumentationRequest;
use App\Http\Requests\UpdateDocumentationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DocumentationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;

class DocumentationController extends AppBaseController
{
    /** @var DocumentationRepository $documentationRepository*/
    private $documentationRepository;

    public function __construct(DocumentationRepository $documentationRepo)
    {
        $this->documentationRepository = $documentationRepo;
    }

    /**
     * Display a listing of the Documentation.
     */
    public function index(DocumentationDataTable $documentationDataTable)
    {
    return $documentationDataTable->render('documentations.index');
    }


    /**
     * Show the form for creating a new Documentation.
     */
    public function create()
    {
        return view('documentations.create');
    }

    /**
     * Store a newly created Documentation in storage.
     */
    public function store(CreateDocumentationRequest $request)
    {
        // Validate the incoming request
        $request->validate([

            'employee_id' => 'required|exists:employees,id',
            'document_type' => 'required|string|max:100',
            'document_name' => 'required|string|max:100',
        ]);

        // Get all the form input data
        $input = $request->all();

        // Check if a file was uploaded
        if ($request->hasFile('file_path')) {
            // Define the storage folder
            $folder = 'Documentations';

            // Ensure the folder exists
            $path = storage_path('app/public/' . $folder);
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Store the file in the 'Documentations' folder under 'public' disk and get the path
            $filePath = $request->file('file_path')->store($folder, 'public');

            // Add the file path to the input array
            $input['file_path'] = 'storage/' . $filePath;
        }

        // Save the form inputs along with the file path to the database
        $documentations = $this->documentationRepository->create($input);

        // Show success message and redirect to the index page
        Flash::success('Documentations saved successfully.');

        return redirect(route('documentations.index'));
    }
    public function show($id)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        return view('documentations.show')->with('documentation', $documentation);
    }

    /**
     * Show the form for editing the specified Documentation.
     */
    public function edit($id)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        return view('documentations.edit')->with('documentation', $documentation);
    }

    /**
     * Update the specified Documentation in storage.
     */
    public function update($id, UpdateDocumentationRequest $request)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        $documentation = $this->documentationRepository->update($request->all(), $id);

        Flash::success('Documentation updated successfully.');

        return redirect(route('documentations.index'));
    }

    /**
     * Remove the specified Documentation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $documentation = $this->documentationRepository->find($id);

        if (empty($documentation)) {
            Flash::error('Documentation not found');

            return redirect(route('documentations.index'));
        }

        $this->documentationRepository->delete($id);

        Flash::success('Documentation deleted successfully.');

        return redirect(route('documentations.index'));
    }
}

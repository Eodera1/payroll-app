<?php

namespace App\Http\Controllers;

use App\DataTables\LeavetypeDataTable;
use App\Http\Requests\CreateLeavetypeRequest;
use App\Http\Requests\UpdateLeavetypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\LeavetypeRepository;
use Illuminate\Http\Request;
use Flash;

class LeavetypeController extends AppBaseController
{
    /** @var LeavetypeRepository $leavetypeRepository*/
    private $leavetypeRepository;

    public function __construct(LeavetypeRepository $leavetypeRepo)
    {
        $this->leavetypeRepository = $leavetypeRepo;
    }

    /**
     * Display a listing of the Leavetype.
     */
    public function index(LeavetypeDataTable $leavetypeDataTable)
    {
    return $leavetypeDataTable->render('leavetypes.index');
    }


    /**
     * Show the form for creating a new Leavetype.
     */
    public function create()
    {
        return view('leavetypes.create');
    }

    /**
     * Store a newly created Leavetype in storage.
     */
    public function store(CreateLeavetypeRequest $request)
    {
        $input = $request->all();

        $leavetype = $this->leavetypeRepository->create($input);

        Flash::success('Leavetype saved successfully.');

        return redirect(route('leavetypes.index'));
    }

    /**
     * Display the specified Leavetype.
     */
    public function show($id)
    {
        $leavetype = $this->leavetypeRepository->find($id);

        if (empty($leavetype)) {
            Flash::error('Leavetype not found');

            return redirect(route('leavetypes.index'));
        }

        return view('leavetypes.show')->with('leavetype', $leavetype);
    }

    /**
     * Show the form for editing the specified Leavetype.
     */
    public function edit($id)
    {
        $leavetype = $this->leavetypeRepository->find($id);

        if (empty($leavetype)) {
            Flash::error('Leavetype not found');

            return redirect(route('leavetypes.index'));
        }

        return view('leavetypes.edit')->with('leavetype', $leavetype);
    }

    /**
     * Update the specified Leavetype in storage.
     */
    public function update($id, UpdateLeavetypeRequest $request)
    {
        $leavetype = $this->leavetypeRepository->find($id);

        if (empty($leavetype)) {
            Flash::error('Leavetype not found');

            return redirect(route('leavetypes.index'));
        }

        $leavetype = $this->leavetypeRepository->update($request->all(), $id);

        Flash::success('Leavetype updated successfully.');

        return redirect(route('leavetypes.index'));
    }

    /**
     * Remove the specified Leavetype from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $leavetype = $this->leavetypeRepository->find($id);

        if (empty($leavetype)) {
            Flash::error('Leavetype not found');

            return redirect(route('leavetypes.index'));
        }

        $this->leavetypeRepository->delete($id);

        Flash::success('Leavetype deleted successfully.');

        return redirect(route('leavetypes.index'));
    }
}

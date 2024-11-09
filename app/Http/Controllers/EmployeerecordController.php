<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeerecordDataTable;
use App\Http\Requests\CreateEmployeerecordRequest;
use App\Http\Requests\UpdateEmployeerecordRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmployeerecordRepository;
use Illuminate\Http\Request;
use Flash;

class EmployeerecordController extends AppBaseController
{
    /** @var EmployeerecordRepository $employeerecordRepository*/
    private $employeerecordRepository;

    public function __construct(EmployeerecordRepository $employeerecordRepo)
    {
        $this->employeerecordRepository = $employeerecordRepo;
    }

    /**
     * Display a listing of the Employeerecord.
     */
    public function index(EmployeerecordDataTable $employeerecordDataTable)
    {
    return $employeerecordDataTable->render('employeerecords.index');
    }


    /**
     * Show the form for creating a new Employeerecord.
     */
    public function create()
    {
        return view('employeerecords.create');
    }

    /**
     * Store a newly created Employeerecord in storage.
     */
    public function store(CreateEmployeerecordRequest $request)
    {
        $input = $request->all();

        $employeerecord = $this->employeerecordRepository->create($input);

        Flash::success('Employeerecord saved successfully.');

        return redirect(route('employeerecords.index'));
    }

    /**
     * Display the specified Employeerecord.
     */
    public function show($id)
    {
        $employeerecord = $this->employeerecordRepository->find($id);

        if (empty($employeerecord)) {
            Flash::error('Employeerecord not found');

            return redirect(route('employeerecords.index'));
        }

        return view('employeerecords.show')->with('employeerecord', $employeerecord);
    }

    /**
     * Show the form for editing the specified Employeerecord.
     */
    public function edit($id)
    {
        $employeerecord = $this->employeerecordRepository->find($id);

        if (empty($employeerecord)) {
            Flash::error('Employeerecord not found');

            return redirect(route('employeerecords.index'));
        }

        return view('employeerecords.edit')->with('employeerecord', $employeerecord);
    }

    /**
     * Update the specified Employeerecord in storage.
     */
    public function update($id, UpdateEmployeerecordRequest $request)
    {
        $employeerecord = $this->employeerecordRepository->find($id);

        if (empty($employeerecord)) {
            Flash::error('Employeerecord not found');

            return redirect(route('employeerecords.index'));
        }

        $employeerecord = $this->employeerecordRepository->update($request->all(), $id);

        Flash::success('Employeerecord updated successfully.');

        return redirect(route('employeerecords.index'));
    }

    /**
     * Remove the specified Employeerecord from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employeerecord = $this->employeerecordRepository->find($id);

        if (empty($employeerecord)) {
            Flash::error('Employeerecord not found');

            return redirect(route('employeerecords.index'));
        }

        $this->employeerecordRepository->delete($id);

        Flash::success('Employeerecord deleted successfully.');

        return redirect(route('employeerecords.index'));
    }
}

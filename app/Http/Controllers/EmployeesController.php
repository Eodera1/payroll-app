<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeesDataTable;
use App\Http\Requests\CreateEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmployeesRepository;
use Illuminate\Http\Request;
use Flash;

class EmployeesController extends AppBaseController
{
    /** @var EmployeesRepository $employeesRepository*/
    private $employeesRepository;

    public function __construct(EmployeesRepository $employeesRepo)
    {
        $this->employeesRepository = $employeesRepo;
    }

    /**
     * Display a listing of the Employees.
     */
    public function index(EmployeesDataTable $employeesDataTable)
    {
    return $employeesDataTable->render('employees.index');
    }


    /**
     * Show the form for creating a new Employees.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created Employees in storage.
     */
    public function store(CreateEmployeesRequest $request)
    {
        $input = $request->all();

        $employees = $this->employeesRepository->create($input);

        Flash::success('Employees saved successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified Employees.
     */
    public function show($id)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified Employees.
     */
    public function edit($id)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.edit')->with('employees', $employees);
    }

    /**
     * Update the specified Employees in storage.
     */
    public function update($id, UpdateEmployeesRequest $request)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $employees = $this->employeesRepository->update($request->all(), $id);

        Flash::success('Employees updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified Employees from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $this->employeesRepository->delete($id);

        Flash::success('Employees deleted successfully.');

        return redirect(route('employees.index'));
    }
}

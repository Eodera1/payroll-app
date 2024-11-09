<?php

namespace App\Repositories;

use App\Models\Employees;
use App\Repositories\BaseRepository;

class EmployeesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'physical_address',
        'department',
        'hire_date',
        'salary',
        'disability_status',
        'job_basis',
        'emergency_contact'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employees::class;
    }
}

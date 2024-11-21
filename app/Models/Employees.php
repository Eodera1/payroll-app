<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Allowance;
use Carbon\Carbon;

class Employees extends Model
{
    public $table = 'employees';

    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'physical_address',
        'department_id',
        'hire_date',
        'salary',
        'disability_status',
        'job_basis',
        'emergency_contact'
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'physical_address' => 'string',
        'hire_date' => 'date',
        'salary' => 'decimal:0',
        'disability_status' => 'string',
        'job_basis' => 'string',
        'emergency_contact' => 'string',
        'department_id' => 'integer',
    ];

    public static array $rules = [
        'first_name' => 'nullable|string|max:100',
        'last_name' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:100',
        'phone_number' => 'nullable|string|max:100',
        'physical_address' => 'nullable|string|max:100',
        'department' => 'nullable',
        'hire_date' => 'nullable',
        'salary' => 'nullable|numeric',
        'disability_status' => 'nullable|string|max:100',
        'job_basis' => 'nullable|string|max:100',
        'emergency_contact' => 'nullable|string|max:100'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function allowances()
    {
        return $this->hasMany(Allowance::class, 'employee_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'employee_id');
    }

    public function bankDetails()
    {
        return $this->hasMany(BankDetail::class, 'employee_id');
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class, 'employee_id');
    }

    public function documentations()
    {
        return $this->hasMany(Documentation::class, 'employee_id');
    }

    public function employeeRecords()
    {
        return $this->hasMany(EmployeeRecord::class, 'employee_id');
    }

    public function leaves()
    {
        return $this->hasMany(Leaf::class, 'employee_id');
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class, 'employee_id');
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class, 'employee_id');
    }

    public function salaries()
    {
        return $this->hasMany(Salary::class, 'employee_id');
    }
    public function getHireDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name );
    }
}

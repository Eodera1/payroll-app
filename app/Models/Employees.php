<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $table = 'employees';

    public $fillable = [
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
        'emergency_contact' => 'string'
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

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department');
    }

    public function allowances(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Allowance::class, 'employee_id');
    }

    public function attendances(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Attendance::class, 'empolyee_id');
    }

    public function bankDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\BankDetail::class, 'employee_id');
    }

    public function deductions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Deduction::class, 'employee_id');
    }

    public function department1s(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Department::class, 'manager_id');
    }

    public function documentations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Documentation::class, 'employee_id');
    }

    public function employeeRecords(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\EmployeeRecord::class, 'employee_id');
    }

    public function leaves(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Leaf::class, 'employee_id');
    }

    public function payrolls(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Payroll::class, 'employee_id');
    }

    public function promotions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Promotion::class, 'employee_id');
    }

    public function salaries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Salary::class, 'employee_id');
    }
}

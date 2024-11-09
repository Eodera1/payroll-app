<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    public $table = 'salaries';

    public $fillable = [
        'employee_id',
        'basic_salary',
        'bonus',
        'deductions',
        'net_salary',
        'pay_date'
    ];

    protected $casts = [
        'pay_date' => 'date'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'basic_salary' => 'nullable',
        'bonus' => 'nullable',
        'deductions' => 'nullable',
        'net_salary' => 'nullable',
        'pay_date' => 'nullable'
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }

    public function payrolls(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Payroll::class, 'salary_id');
    }
}

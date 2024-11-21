<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    public $table = 'payrolls';

    public $fillable = [
        'employee_id',
        'salary_id',
        'payment_period',
        'total_earning',
        'total_deductions',
        'net_pay',
        'status',
        'pay_slip'
    ];

    protected $casts = [
        'status' => 'string',
        'pay_slip' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'salary_id' => 'nullable',
        'payment_period' => 'nullable',
        'total_earning' => 'nullable',
        'total_deductions' => 'nullable',
        'net_pay' => 'nullable',
        'status' => 'nullable|string|max:1',
        'pay_slip' => 'nullable|string|max:100'
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function salary()
    {
        return $this->belongsTo(Salaries::class, 'salary_id');
    }
}

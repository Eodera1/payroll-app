<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Leave extends Model
{
    public $table = 'leaves';

    public $fillable = [
        'employee_id',
        'leave_type_id',
        'department_id',
        'start_date',
        'end_date',
        'duration',
        'status'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'leave_type_id' => 'nullable',
        'department_id' => 'nullable',
        'start_date' => 'nullable',
        'end_date' => 'nullable',
        'duration' => 'nullable',
        'status' => 'nullable|string|max:1'
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function leaveType()
    {
        return $this->belongsTo(Leavetype::class, 'leave_type_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}

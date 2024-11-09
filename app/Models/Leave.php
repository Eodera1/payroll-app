<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }

    public function leaveType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Leavetype::class, 'leave_type_id');
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }
}

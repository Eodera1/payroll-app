<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employeerecord extends Model
{
    public $table = 'employeerecords';

    public $fillable = [
        'employee_id',
        'record_type',
        'record_date',
        'record_description',
        'outcome',
        'comments',
        'handled_by'
    ];

    protected $casts = [
        'record_type' => 'string',
        'record_date' => 'date',
        'record_description' => 'string',
        'outcome' => 'string',
        'comments' => 'string',
        'handled_by' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'record_type' => 'nullable|string|max:100',
        'record_date' => 'nullable',
        'record_description' => 'nullable|string|max:100',
        'outcome' => 'nullable|string|max:100',
        'comments' => 'nullable|string|max:100',
        'handled_by' => 'nullable|string|max:100'
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }
}

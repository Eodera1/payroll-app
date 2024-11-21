<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }
    public function getRecordDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

   // public function manager()
    //{
       //return $this->belongsTo(Employees::class, 'manager_id');
    //}
}

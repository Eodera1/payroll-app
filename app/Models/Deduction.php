<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Deduction extends Model
{
    public $table = 'deductions';

    public $fillable = [
        'deduction_name',
        'deduction_type',
        'amount'
    ];

    protected $casts = [
        'deduction_name' => 'string',
        'deduction_type' => 'string',
        'amount' => 'decimal:0',
    ];

    public static array $rules = [
        'deduction_name' => 'nullable|string|max:100',
        'deduction_type' => 'nullable|string|max:100',
        'amount' => 'nullable|numeric'
    ];


    //public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    //{
    //    return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    //}
    //public function getDateAppliedAttribute($value)
    //{
    //    return Carbon::parse($value)->format('Y-m-d');
    //}
}

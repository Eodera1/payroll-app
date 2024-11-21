<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Deduction extends Model
{
    public $table = 'deductions';

    public $fillable = [
        'employee_id',
        'deduction_type',
        'amount',
        'date_applied'
    ];

    protected $casts = [
        'deduction_type' => 'string',
        'amount' => 'decimal:0',
        'date_applied' => 'date'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'deduction_type' => 'nullable|string|max:65535',
        'amount' => 'nullable|numeric',
        'date_applied' => 'nullable'
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }
    public function getDateAppliedAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}

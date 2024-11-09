<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public $table = 'promotions';

    public $fillable = [
        'employee_id',
        'previous_position',
        'new_position',
        'promotion_date',
        'previous_salary',
        'new_salary',
        'reason',
        'approved_by'
    ];

    protected $casts = [
        'previous_position' => 'string',
        'new_position' => 'string',
        'promotion_date' => 'date',
        'reason' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'previous_position' => 'nullable|string|max:100',
        'new_position' => 'nullable|string|max:100',
        'promotion_date' => 'nullable',
        'previous_salary' => 'nullable',
        'new_salary' => 'nullable',
        'reason' => 'nullable|string|max:100',
        'approved_by' => 'nullable'
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }
}

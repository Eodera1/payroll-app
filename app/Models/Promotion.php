<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }
    public function getPromotionDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}

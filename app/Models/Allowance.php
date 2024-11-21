<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Allowance extends Model
{
    public $table = 'allowances';

    public $fillable = [
        'employee_id',
        'allowance_type',
        'amount',
        'date_granted',
        'allowance_privilage'
    ];

    protected $casts = [
        'allowance_type' => 'string',
        'amount' => 'decimal:0',
        'date_granted' => 'date',
        'allowance_privilage' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'allowance_type' => 'nullable|string|max:100',
        'amount' => 'nullable|numeric',
        'date_granted' => 'nullable',
        'allowance_privilage' => 'nullable|string|max:100',
        // 'updated_at' => 'required',
        // 'created_at' => 'required'
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }
    public function getDateGrantedAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}

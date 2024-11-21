<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public $table = 'banks';

    public $fillable = [
        'employee_id',
        'bank_name',
        'branch_name',
        'account_number',
        'account_name',
        'account_type',
        'bank_code',
        'currency'
    ];

    protected $casts = [
        'bank_name' => 'string',
        'branch_name' => 'string',
        'account_number' => 'string',
        'account_name' => 'string',
        'account_type' => 'string',
        'bank_code' => 'string',
        'currency' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'bank_name' => 'nullable|string|max:100',
        'branch_name' => 'nullable|string|max:100',
        'account_number' => 'nullable|string|max:100',
        'account_name' => 'nullable|string|max:100',
        'account_type' => 'nullable|string|max:100',
        'bank_code' => 'nullable|string|max:100',
        'currency' => 'nullable|string|max:100',
        //'updated_at' => 'required',
        //'created_at' => 'required'
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employees::class, 'employee_id');
    }
}

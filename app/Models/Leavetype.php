<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leavetype extends Model
{
    public $table = 'leavetypes';

    public $fillable = [
        'leave_name',
        'duration',
        'paid',
        'leave_condition'
    ];

    protected $casts = [
        'leave_name' => 'string',
        'paid' => 'boolean',
        'leave_condition' => 'string'
    ];

    public static array $rules = [
        'leave_name' => 'nullable|string|max:100',
        'duration' => 'nullable',
        'paid' => 'nullable|boolean',
        'leave_condition' => 'nullable|string|max:100'
    ];

    public function leaves(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Leaf::class, 'leave_type_id');
    }
}

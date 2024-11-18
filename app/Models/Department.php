<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table = 'departments';

    public $fillable = [
        'department_name',
        'manager_id'
    ];

    protected $casts = [
        'department_name' => 'string'
    ];

    public static array $rules = [
        'department_name' => 'nullable|string|max:100',
        'manager_id' => 'nullable'
    ];

    public function manager(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'manager_id');
    }

    public function employee1s(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Employee::class, 'department');
    }

    public function leaves(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Leaf::class, 'department');
    }
}

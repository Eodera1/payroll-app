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

    public function manager()
    {
        return $this->belongsTo(Employees::class, 'manager_id');
    }

    public function employee1s()
    {
        return $this->hasMany(Employees::class, 'department');
    }

    public function leaves()
    {
        return $this->hasMany(\App\Models\Leaf::class, 'department');
    }
}

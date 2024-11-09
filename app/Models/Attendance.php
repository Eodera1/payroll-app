<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $table = 'attendances';

    public $fillable = [
        'empolyee_id',
        'check_in_time',
        'check_out_time',
        'date'
    ];

    protected $casts = [
        'check_in_time' => 'datetime',
        'check_out_time' => 'datetime',
        'date' => 'date'
    ];

    public static array $rules = [
        'empolyee_id' => 'nullable',
        'check_in_time' => 'nullable',
        'check_out_time' => 'nullable',
        'date' => 'nullable'
    ];

    public function empolyee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'empolyee_id');
    }
}

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
        'date' => 'date'
    ];

    public static array $rules = [
        'empolyee_id' => 'nullable',
        'check_in_time' => 'nullable',
        'check_out_time' => 'nullable',
        'date' => 'nullable',
        // 'updated_at' => 'required',
        // 'created_at' => 'required'
    ];

    public function empolyee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'empolyee_id');
    }
}

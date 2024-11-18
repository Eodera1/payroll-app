<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    public $table = 'documentations';

    public $fillable = [
        'employee_id',
        'document_type',
        'document_name',
        'file_path'
    ];

    protected $casts = [
        'document_type' => 'string',
        'document_name' => 'string',
        'file_path' => 'string'
    ];

    public static array $rules = [
        'employee_id' => 'nullable',
        'document_type' => 'nullable|string|max:100',
        'document_name' => 'nullable|string|max:100',
        'file_path' => 'nullable|string|max:16777215',
        //'updated_at' => 'required',
        //'created_at' => 'required'
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }
}

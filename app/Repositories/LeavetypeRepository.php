<?php

namespace App\Repositories;

use App\Models\Leavetype;
use App\Repositories\BaseRepository;

class LeavetypeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'leave_name',
        'duration',
        'paid',
        'leave_condition'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Leavetype::class;
    }
}

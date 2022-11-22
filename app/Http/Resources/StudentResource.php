<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'student_id' => $this->student_id,
            'nis' => $this->nis,
            'name' => $this->name,
            'grade' => $this->grade,
        ];
    }
}
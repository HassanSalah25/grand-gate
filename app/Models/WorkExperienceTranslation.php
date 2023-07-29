<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperienceTranslation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function wexps(){
        return $this->belongsTo(WorkExperience::class,'work_experience_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function workexperience_translation()
    {
        return $this->hasMany(WorkExperienceTranslation::class,'work_experience_id');
    }

    public function convertPhotos(){
        $result = array();
        foreach (json_decode($this->img) as $item) {
            array_push($result, api_asset($item));
        }
        return $result;
    }

    function translate($key,$lang)
    {
        $product =$this->product_translations?->where('lang',$lang)->first();
        return $product?->$key;
    }
}

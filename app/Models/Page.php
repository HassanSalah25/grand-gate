<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Page extends Model
{

    protected $with = ['page_translations'];
    protected $guarded = [];

    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? App::getLocale() : $lang;
        $page_translation = $this->hasMany(PageTranslation::class)->where('lang', $lang)->first();
        return $page_translation != null ? $page_translation->$field : $this->$field;
    }

    public function page_translations()
    {
        return $this->hasMany(PageTranslation::class);
    }


    public function media()
    {
        return $this->hasOne(Media::class,'id','img');
    }

    public function getImg()
    {
        return $this->media->file_name ?? '';
    }

    function translate($key , $lang = false)
    {
        $lang = $lang == false ? \Illuminate\Support\Facades\App::getLocale() : $lang;
        $page =$this->page_translations?->where('lang',$lang)->first();
        return $page?->$key;
    }
}

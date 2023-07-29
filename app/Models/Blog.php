<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function blog_translations()
    {
        return $this->hasMany(BlogTranslation::class,'blog_id');
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
        $lang = $lang == false ? App::getLocale() : $lang;
        $blog =$this->blog_translations?->where('lang',$lang)->first();
        return $blog?->$key;
    }
}

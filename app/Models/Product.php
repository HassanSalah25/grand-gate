<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product_translations()
    {
        return $this->hasMany(ProductTranslation::class,'product_id');
    }

    public function media()
    {
    return $this->hasOne(Media::class,'id','img');
    }

    public function getImg()
    {
        return $this->media->file_name ?? '';
    }

    function translate($key,$lang)
    {
        $product =$this->product_translations?->where('lang',$lang)->first();
        return $product?->$key;
    }
    public function convertPhotos(){
        $result = array();
        if($this->imgs)
            foreach (json_decode($this->imgs) as $item) {
                array_push($result, api_asset($item));
            }
        return $result;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $table = 'product_brand';
    protected $fillable = ['name'];
    protected $hidden = ["created_at", "updated_at"];
    function products(){
        return $this->hasMany('App\Models\Product', 'product_brand_id', 'id');
    }
}

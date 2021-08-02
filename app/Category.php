<?php

namespace App;
use Illuminate\Support\Facades\View;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function category()
    {
        return $this->hasMany(product::class,'code_cat','code');
    }
 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodoct extends Model
{
    public function product()
    {
        return $this->hasMany(Category::class,'code','code_cat');

    }
}

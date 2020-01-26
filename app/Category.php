<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function consulting()
    {
        return $this->belongsToMany(Consulting::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulting extends Model
{
    protected $fillable = ['name', 'price', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

//    public function posts()
//    {
//        return $this->belongsToMany('App\Models\Post');
//    }

//    protected $table = 'tag';
    protected $fillable = ['name', 'slug'];


    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'tags');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    //product relation
    public function tags()
    {
    	return $this -> belongsToMany('App\Models\Tag');
    }

    //product relation
    public function categoris()
    {
    	return $this -> belongsToMany('App\Models\Category');
    }

    //Author relation
    public function Author()
    {
        return $this -> belongsTo('App\Models\User', 'user_id', 'id');
    }
}

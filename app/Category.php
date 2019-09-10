<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    //Relacion de Post con categorias
    public function posts(){
        return $this->hasMany('App\Post');
    }
}

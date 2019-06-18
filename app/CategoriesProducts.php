<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesProducts extends Model
{

    public $table = "categories_products";
    protected $fillable = [
        'id',
        'categories_id',
        'products_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

}
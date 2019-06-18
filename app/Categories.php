<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /** @$table represent the object of table in database  **/

    public $table = "Categories";
    protected $fillable = [
        'id',
        'name'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}

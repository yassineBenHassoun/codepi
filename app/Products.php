<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /** @$table represent the object of table in database  **/

    public $table = "Products";
    protected $fillable = [
        'id',
        'name',
        'size',
        'color',
        'reference'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }
}

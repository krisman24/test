<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';

    protected $fillable = [
    	'product',
    	'shipping',
    	'price',
    	'email',
    	'created_at',
    	'updated_at'
    ];

    public function get_email(){
        return $this->hasMany('App\\Model\\User', 'email', 'email');
    }
}

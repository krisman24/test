<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
	protected $table = 'orders';

    protected $fillable = [
    	'order',
    	'email',
    	'status',
    	'created_at',
    	'updated_at'
    ];

    public function get_email(){
        return $this->hasMany('App\\Model\\User', 'email', 'email');
        
    }
}

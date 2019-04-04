<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topup extends Model
{
    protected $table = 'topup';

    protected $fillable = [
    	'mobile_number',
    	'value',
    	'email',
    	'created_at',
    	'updated_at'
    ];

    public function get_email(){
        return $this->hasMany('App\\Model\\User', 'email', 'email');
    }
}

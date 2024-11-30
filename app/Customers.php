<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    
    public $table ='customer';
    public $primaryKey ='id';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'idcard','type','email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}

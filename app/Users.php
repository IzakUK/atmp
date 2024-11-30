<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    public $table ='users';
    public $primaryKey ='id';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password','email','name','sex','age','health','ill','fam','fap','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}

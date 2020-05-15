<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'nom', 'username', 'email','nationalite','tel', 'password','type1','type2','type3','type4','num_cni'
    ];

    public $timestamps=false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Role soll zu vielen User Model gehören
     */
    public function useres(){
        return $this -> belongsToMany('App\User');
    }
}

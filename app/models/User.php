<?php

/**
 * Created by PhpStorm.
 * User: christian
 * Date: 03/07/16
 * Time: 02:31 PM
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    protected $fillable = ['username', 'email'];
}
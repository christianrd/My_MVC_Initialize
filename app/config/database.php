<?php

/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/30/2016
 * Time: 11:06 AM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'    =>  'mysql',
    'host'      =>  '127.0.0.1',
    'username'  =>  'root',
    'password'  =>  '',
    'database'  =>  '', //Database name
    'charset'   =>  'utf8',
    'collation' =>  'utf8_unicode_ci',
    'prefix' =>  '' // if your tables have prefix like (prefix_nameTable), only you have to put a prefix
]);

$capsule->bootEloquent();
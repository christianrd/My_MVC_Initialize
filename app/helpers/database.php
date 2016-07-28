<?php
/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/27/2016
 * Time: 6:56 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'        =>  'mysql',
    'host'          =>  '127.0.0.1',
    'username'      =>  'root',
    'password'      =>  '',
    'database'      =>  'appweb_codeCourse',
    'charset'       =>  'utf8',
    'collaction'    =>  'utf8_unicode_ci',
    'prefix'        =>  ''
]);

$capsule->bootEloquent();
<?php
/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/29/2016
 * Time: 5:34 PM
 */


//require_once ('');
require_once ('../vendor/autoload.php');

require_once ('config/database.php');

require_once ('core/App.php');

require_once ('core/Controller.php');

define('SITE_URL', 'http://'. $_SERVER['HTTP_HOST'] .'/My_MVC_Initialize'); //you can change this route url
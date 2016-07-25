<?php

/**
 * Created by PhpStorm.
 * User: christian
 * Date: 03/07/16
 * Time: 11:41 AM
 */
class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('home/index',  ['name' => $user->name]);
    }

}
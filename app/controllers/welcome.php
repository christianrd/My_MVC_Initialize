<?php

/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/30/2016
 * Time: 10:14 AM
 */
class Welcome extends Controller
{
    public function index()
    {
        $this->view('welcome/index');
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/29/2016
 * Time: 6:17 PM
 */
class Home extends Controller
{
    public function index()
    {
        $this->view('welcome/index');
    }
}
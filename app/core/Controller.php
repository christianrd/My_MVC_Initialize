<?php

/**
 * Created by PhpStorm.
 * User: ChristianDevCode
 * Date: 7/29/2016
 * Time: 5:22 PM
 */
class Controller
{
    protected function model($model)
    {
        require_once "../app/models/". $model .'.php';
        return new $model();
    }

    protected function view($view, $data = [])
    {
        require_once '../app/views/'. $view .'.php';
    }
}
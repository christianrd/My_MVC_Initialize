<?php

/**
 * Created by PhpStorm.
 * User: christian
 * Date: 03/07/16
 * Time: 11:37 AM
 */
class Controller
{
    protected function model($model)
    {
        require_once '../app/models/'. $model .'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
<?php

namespace app\page\controller;

use think\Controller;

class Layout extends Controller
{
    function index()
    {
        return $this->fetch();
    }
}
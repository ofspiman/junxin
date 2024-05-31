<?php

namespace app\page\controller;

use think\Controller;

class Banner extends Beck
{

    function index()
    {
        return $this->fetch();
    }

}
<?php

namespace app\page\controller;

use think\Controller;

class Purchase extends Beck
{

    function index()
    {
        return $this->fetch();
    }


    function banner($bannerid=6)
    {
        return parent::banner($bannerid);
    }

}
<?php

namespace app\page\controller;

use think\Controller;
use \app\admin\model\Aboutus as AboutusModel;

class Aboutus extends Beck
{


    function index()
    {
        $id = $this->request->param('id');
        $data =  AboutusModel::find($id);
        $this->assign([
            'data'=>$data
        ]);
        return $this->fetch();
    }

    function banner($bannerid=2)
    {
         return parent::banner($bannerid);
    }

}
<?php

namespace app\page\controller;

use think\Controller;
use \app\admin\model\Contact as ContactModel;

class Contact extends Beck
{


    function  index()
    {
        $id = $this->request->param('id',1);
        $data = ContactModel::find($id);

        $this->assign('data',$data);
        return $this->fetch();
    }

    function banner($bannerid=9)
    {
        return parent::banner($bannerid);
    }

}
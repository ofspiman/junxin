<?php

namespace app\page\controller;

use think\Controller;
use \app\admin\model\Message as MessageModel;

class Message extends Beck
{

    function index()
    {


        return $this->fetch();
    }
    function save()
    {

        $data = $this->request->post();

        $vialidate = new \app\admin\validate\Message();

        if (!$vialidate->check($data)){

            $this->error($vialidate->getError());
        }else{
            array_shift($data);
              MessageModel::create($data);
            $this->success('留言成功');
        }

    }

    function banner($bannerid=8)
    {
        return parent::banner($bannerid);
    }

}
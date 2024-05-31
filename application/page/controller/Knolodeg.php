<?php

namespace app\page\controller;

use think\Controller;
use \app\admin\model\Knolodeg as  KnolodegModel;
class Knolodeg extends Beck
{
    function index()
    {

        $data = KnolodegModel::select();
//        $time = $data.time_text;

        $this->assign('data',$data);
        return $this->fetch();
    }

    function  detail()
    {
        $id = $this->request->param('id');
        $ones = KnolodegModel::find($id);
        $this->assign('ones',$ones);

        $upPage = KnolodegModel::where('id', '<', $id)->order('id', 'desc')->find();
        $nextPage = KnolodegModel::where('id', '>', $id)->order('id', 'asc')->find();
        $this->assign('upPage', $upPage);
        $this->assign('nextPage', $nextPage);

        return $this->fetch();
    }

    function banner($bannerid=7)
    {
        return parent::banner($bannerid);
    }

}
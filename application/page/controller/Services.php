<?php

namespace app\page\controller;

use app\admin\model\Server as ServerModel;
use think\Controller;

class Services extends Beck
{

    function index()
    {
        $cid = $this->request->param('cid');
        $where = [];
        $query = [];
        if ($cid){
            $where['category_id'] = $cid;
            $query['category_id'] =  $cid;
        }
        $data = ServerModel::where($where)->paginate([
            'query' => $query,
            'list_rows' => 6
        ]);

        $this->assign('data', $data);
        return $this->fetch();
    }

    function detail()
    {
        $id = $this->request->param('id');
        $ones = ServerModel::find($id);
        $this->assign('ones', $ones);
//        dump($ones);

        $upPage = ServerModel::where('id', '<', $id)->order('id', 'desc')->find();
        $nextPage = ServerModel::where('id', '>', $id)->order('id', 'asc')->find();
        $this->assign('upPage', $upPage);
        $this->assign('nextPage', $nextPage);
        return $this->fetch();
    }

    function banner($bannerid=5)
    {
        return parent::banner($bannerid);
    }

}
<?php

namespace app\page\controller;
use \app\admin\model\Product as ProductModel;

class Product extends Beck
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

        $data = ProductModel::where($where)->paginate([
            'query' => $query,
            'list_rows' => 6
        ]);

        $this->assign('data', $data);
        return $this->fetch();
    }

    function detail()
    {
        $id = $this->request->param('id');
        $ones = ProductModel::find($id);
        $this->assign('ones', $ones);

        $upPage = ProductModel::where('id', '<', $id)->order('id', 'desc')->find();
        $nextPage = ProductModel::where('id', '>', $id)->order('id', 'asc')->find();
        $this->assign('upPage', $upPage);
        $this->assign('nextPage', $nextPage);
        return $this->fetch();
    }

    function banner($bannerid=3)
    {
        return parent::banner($bannerid);
    }

}
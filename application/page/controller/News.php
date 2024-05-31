<?php

namespace app\page\controller;
use \app\admin\model\News as NewsModel;


class News extends Beck
{

    function index()
    {
        $cid = $this->request->param('cid');
        $where = [];
        $query = [];
        if ($cid) {
            $where['category_id'] = $cid;
            $query['category_id'] = $cid;
        }

        $data = NewsModel::where($where)->paginate([
            'query' => $query,
            'list_rows' => 9
        ]);

        $this->assign('data', $data);
        return $this->fetch();
    }

    function detail()
    {
        $id = $this->request->param('id');
        $detail = NewsModel::find($id);

        $cid = $detail['category_id'];
        $this->assign('cid', $cid);

        $upPage = NewsModel::where('id', '<', $id)->order('id', 'desc')->find();
        $nextPage = NewsModel::where('id', '>', $id)->order('id', 'asc')->find();
        $this->assign('upPage', $upPage);
        $this->assign('nextPage', $nextPage);
        $this->assign('detail', $detail);
        return $this->fetch();
    }

    function banner($bannerid=4)
    {
        return parent::banner($bannerid);
    }

}
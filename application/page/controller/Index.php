<?php

namespace app\page\controller;

use app\common\model\Config;
use think\Controller;

use  \app\admin\model\Product as ProductModel;

use \app\admin\model\News as NewsModel;
use \app\admin\model\Aboutus as AboutusModel;

class Index extends Beck
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

        $data =ProductModel::order('id','desc')->where($where)
            ->paginate([
            'query' => $query,
            'list_rows' => 8
        ]);

        $this->assign('pdata', $data);

        $news= \app\admin\model\News::where($where)->paginate(
            [
                'query' => $query,
                'list_rows' => 6
            ]
        );

        $this->assign('newslist', $news);


        $aboutus =  AboutusModel::find(1);
        $this->assign([
            'aboutus'=>$aboutus
        ]);

        return $this->fetch();
    }

    function banner($bannerid=1)
    {
        return parent::banner($bannerid);
    }

}
<?php

namespace app\page\controller;


use think\Controller;
use \app\admin\model\Aboutus as AboutusModel;
use \app\common\model\Category;
use \app\admin\model\News as NewsModel;
use \app\admin\model\Contact as ContactModel;

class Beck extends Controller
{
   public $model = '';
    function _initialize()
    {
        $id = $this->request->param('id',1);
//        echo $id;
        $acate = AboutusModel::select();
        $this->assign([
            'acate'=>$acate,
            'id'=>$id,
        ]);

        $product = Category::where('pid',17)->find();
//           dump($product);
        $this->assign('product',$product);

        $cid = $this->request->param('cid');
        $news = Category::where('pid',14)->select();
//        dump($news);
        $this->assign('cid',$cid);
        $this->assign('news',$news);


        $services = Category::find(19);
        $this->assign('services',$services);

        $knolodeg = Category::find(21);

        $this->assign('knolodeg',$knolodeg);


        $Concate = ContactModel::select();

        $this->assign('data',$Concate);


        $this->banner();
    }


    function banner($bannerid)
    {
        $Banner = \app\admin\model\Banner::find($bannerid);
        $this->assign('banner',$Banner);
    }

}
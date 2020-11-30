<?php
namespace app\index\controller;
use app\index\controller\Base;
class Search extends Base
{
    public function index()
    {
        // dump($_GET);
        $searchKeywords=input('keywords');
        if ($searchKeywords) {
            //搜索条件可添加
            $map['title']=['like','%'.$searchKeywords.'%'];
            $searchRes=db('article')->where($map)->order('id desc')->paginate($listRow=1,$simple=false,$config=['query'=>array('keywords'=>$searchKeywords)]);
            $this->assign(array(
                'searchRes'=>$searchRes,
                'searchKeywords'=>$searchKeywords,
            ));
        } else {
            $this->assign(array(
                'searchRes'=>null,
                'searchKeywords'=>'暂无数据',
            ));
        }
        
        return $this->fetch('search');
    }
}

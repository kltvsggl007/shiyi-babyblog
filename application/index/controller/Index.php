<?php
namespace app\index\controller;
use app\index\controller\Base;
class Index extends Base
{
    public function index()
    {
    	//获取最新的文章
    	$latestArticle=db('article')->order('id desc')->limit(1)->select();
    	//获取最新文章的id数值参数，以便选取第二新的文章
    	$maxId=db('article')->max('id');
    	$articleRes=db('article')->where('id','<',$maxId)->order('id desc')->limit(4)->select();
    	// dump($articleRes);die;
        $authorRes = db('author')->select();
    	$this->assign(array(
            'authorRes'=>$authorRes,
    		'articleRes'=>$articleRes,
    		'latestArticle'=>$latestArticle,
    	));
        return $this->fetch();
    }
}

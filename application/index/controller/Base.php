<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
    	$this->rightEvents();
    	$categoryInfo=db('category')->order('id asc')->select();
    	$this->assign('categoryInfo',$categoryInfo);
    }

    public function rightEvents(){
    	$clickRes=db('article')->order('click desc')->limit(8)->select();
    	$recommendRes=db('article')->where('state','=',1)->limit(8)->select();
    	$this->assign(array(
    		'clickRes'=>$clickRes,
    		'recommendRes'=>$recommendRes,
    	));
    }
}

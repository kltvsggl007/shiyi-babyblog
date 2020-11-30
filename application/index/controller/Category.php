<?php
namespace app\index\controller;
use app\index\controller\Base;
class Category extends Base
{
    public function index()
    {
    	$selectedCategoryId=input('cateid');
    	//查询当前栏目名称
    	$selectedCategory=db('category')->find($selectedCategoryId);
    	$this->assign('selectedCategory',$selectedCategory);
    	//查询当前栏目下的所有文章
    	$articleRes=db('article')->where(array('category_id'=>$selectedCategoryId))->paginate(8);
    	$this->assign('articleRes',$articleRes);
        return $this->fetch('category');
    }
}

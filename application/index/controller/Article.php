<?php
namespace app\index\controller;
use app\index\controller\Base;
class Article extends Base
{
    public function index()
    {
    	$artid=input('artid');
    	$articleRes=db('article')->find($artid);
        $authorInfo=db('author')->find($articleRes['author_id']);
        $relatedTagsRes=$this->relatedTags($articleRes['keywords'],$articleRes['id']);
        // dump($relatedTagsRes);die;
    	db('article')->where('id','=',$artid)->setInc('click');
    	$categoryRes=db('category')->find($articleRes['category_id']);
        //同目录下的相关文章
        $relatedRes=db('article')->where(array('category_id'=>$articleRes['category_id'],'state'=>'1'))->limit(8)->select();
    	//用数组的方式赋值
    	$this->assign(array(
            'authorInfo'=>$authorInfo,
    		'articleRes'=>$articleRes,
    		'categoryRes'=>$categoryRes,
            'relatedRes'=>$relatedRes,
            'relatedTagsRes'=>$relatedTagsRes,
    	));
        return $this->fetch('article');
    }

    public function relatedTags($keywords,$id){
        $arr=explode(',', $keywords);
        static $relatedTagsRes=array();
        foreach ($arr as $key => $value) {
            //map查找函数
            $map['keywords']=['like','%'.$value.'%'];
            $map['id']=['neq',$id];
            $articleTagsRes=db('article')->where($map)->order('id desc')->limit(8)->select();
            $relatedTagsRes=array_merge($relatedTagsRes,$articleTagsRes);
        }
        if ($relatedTagsRes) {
            $relatedTagsRes=arr_unique($relatedTagsRes);
            return $relatedTagsRes;
        }
    }
}

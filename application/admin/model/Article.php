<?php
namespace app\admin\model;
use think\Model;
class Article extends Model
{
    public function Category(){
    	return $this->belongsTo('Category','category_id');
    }
    public function Author(){
    	return $this->belongsTo('Author','author_id');
    }
}

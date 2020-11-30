<?php
namespace app\index\model;
use think\Model;

class Index extends Model
{
    public function Author(){
    	return $this->belongsTo('Author','author_id');
    }
}

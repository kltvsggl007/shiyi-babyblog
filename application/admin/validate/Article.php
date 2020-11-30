<?php
namespace app\admin\validate;
use think\Validate;
class Article extends Validate
{
    protected $rule = [
        'title' => 'require|max:25',
        'category_id' => 'require',
    ];

    protected $message = [
        'title.require' => '请填写文章标题',
        'title.max' => '文章标题至多25个字符',
        'category_id.require' => '请选择文章所属栏目',
    ];
    protected $scene = [
        'add' => ['title','category_id'],
        'edit' => ['title','category_id'],
    ];
}

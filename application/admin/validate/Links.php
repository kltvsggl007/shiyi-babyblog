<?php
namespace app\admin\validate;
use think\Validate;
class Links extends Validate
{
    protected $rule = [
        'title' => 'require|max:25',
        'url' => 'require',
    ];

    protected $message = [
        'title.require' => '请填写链接标题',
        'title.max' => '链接标题至少要6个字符',
        'url.require' => '链接地址必须填写',
    ];
    protected $scene = [
        'add' => ['title','url'],
        'edit' => ['title','url'],
    ];
}

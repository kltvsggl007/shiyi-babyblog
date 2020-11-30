<?php
namespace app\admin\validate;
use think\Validate;
class Administrator extends Validate
{
    protected $rule = [
        'username' => 'require|min:6|unique:admin',
        'password' => 'require',
    ];

    protected $message = [
        'username.require' => '请填写管理员名称',
        'username.min' => '管理员名称至少要6个字符',
        'password.require' => '管理员密码必须填写',
        'username.unique' => '此管理员名称已存在',
    ];
    protected $scene = [
        'add' => ['username'=>'require|unique:admin','password'],
        'edit' => ['username'=>'require|unique:admin'],
    ];
}

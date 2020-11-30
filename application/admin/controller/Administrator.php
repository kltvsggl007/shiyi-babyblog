<?php
namespace app\admin\controller;
use think\Loader;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Base;
class Administrator extends Base
{
    public function lists()
    {
        $list = AdminModel::paginate(4);
        // dump($list);die;
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
            ];

            $validate = Loader::validate('Administrator');
                if(!$validate->scene('add')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('admin')->insert($data)) {
                return $this->success('添加管理员成功','lists');
            } else {
                return $this->error('添加管理员失败');
            }
            
            return;
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id = input('id');
        $adminInfo = db('admin')->find($id);

        if (request()->isPost()) {
            $data=[
                'id'=>input('id'),
                'username'=>input('username'),
            ];

            if (input('password')) {
                $data['password']=md5(input('password'));
            }else{
                $data['password']=$adminInfo['password'];
            }

            $validate = Loader::validate('Administrator');
                if(!$validate->scene('edit')->check($data)){
                    $this->error($validate->getError());
                    die;
            }
            $save = db('admin')->update($data);
            if ($save !== false) {
                $this->success('修改管理员信息成功','lists');
            } else {
                $this->error('修改管理员信息失败');
            }
            
            return;
        }

        $this->assign('adminInfo',$adminInfo);
        return $this->fetch();
    }

    public function delete()
    {
        $id= input('id');
        if ($id != 1) {
            if (db('admin')->delete($id)) {
                $this->success('删除成功','lists');
            } else {
                $this->error('删除失败');
            }
            
        } else {
            $this->error('初始化管理员不能删除');
        }
        
    }
    public function logout(){
        session(null);
        $this->success('退出成功','login/index');
    }
}

<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Loader;
use app\admin\model\Links as LinksModel;
class Links extends Base
{
    public function lists()
    {
        $list = LinksModel::paginate(4);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data=[
                'title'=>input('title'),
                'url'=>input('url'),
                'description'=>input('description'),
            ];

            $validate = Loader::validate('Links');
                if(!$validate->scene('add')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('links')->insert($data)) {
                return $this->success('添加链接成功','lists');
            } else {
                return $this->error('添加链接失败');
            }
            
            return;
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id = input('id');
        $linksInfo = db('links')->find($id);

        if (request()->isPost()) {
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
                'url'=>input('url'),
                'description'=>input('description'),
            ];


            $validate = Loader::validate('Links');
                if(!$validate->scene('edit')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('links')->update($data)) {
                $this->success('修改链接信息成功','lists');
            } else {
                $this->error('修改链接信息失败');
            }
            
            return;
        }

        $this->assign('linksInfo',$linksInfo);
        return $this->fetch();
    }

    public function delete()
    {
        $id= input('id');

        if (db('links')->delete($id)) {
            $this->success('链接删除成功','lists');
        } else {
            $this->error('链接删除失败');
        }

        
    }
}

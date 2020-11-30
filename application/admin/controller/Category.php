<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Loader;
use app\admin\model\Category as CategoryModel;
class Category extends Base
{
    public function lists()
    {
        $list = CategoryModel::paginate(8);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data=[
                'category_name'=>input('category_name'),
            ];
            $validate = Loader::validate('Category');
                if(!$validate->scene('add')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('category')->insert($data)) {
                return $this->success('添加栏目成功','lists');
            } else {
                return $this->error('添加栏目失败');
            }
            
            return;
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id = input('id');
        $categoryInfo = db('category')->find($id);
        if (request()->isPost()) {
            $data=[
                'id'=>input('id'),
                'category_name'=>input('category_name'),
            ];

            $validate = Loader::validate('Category');
                if(!$validate->scene('edit')->check($data)){
                    $this->error($validate->getError());
                    die;
            }
            $save = db('category')->update($data);
            if ($save !==false) {
                $this->success('修改栏目信息成功','lists');
            } else {
                $this->error('修改栏目信息失败');
            }
            
            return;
        }

        $this->assign('categoryInfo',$categoryInfo);
        return $this->fetch();

    }

    public function delete()
    {
        $id= input('id');

        if (db('category')->delete($id)) {
            $this->success('删除成功','lists');
        } else {
            $this->error('删除失败');
        }
            
        
    }
}

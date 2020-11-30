<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Loader;
use app\admin\model\Author as AuthorModel;
class Author extends Base
{
    public function lists()
    {
        $list = AuthorModel::paginate(8);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data=[
                'author_name'=>input('author_name'),
            ];
            // dump($_POST);die;
            $validate = Loader::validate('Author');
                if(!$validate->scene('add')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('author')->insert($data)) {
                return $this->success('添加作者成功','lists');
            } else {
                return $this->error('添加作者失败');
            }
            
            return;
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id = input('id');
        $AuthorInfo = db('author')->find($id);
        if (request()->isPost()) {
            $data=[
                'id'=>input('id'),
                'author_name'=>input('author_name'),
            ];

            $validate = Loader::validate('Author');
                if(!$validate->scene('edit')->check($data)){
                    $this->error($validate->getError());
                    die;
            }
            $save = db('author')->update($data);
            if ($save !==false) {
                $this->success('修改作者信息成功','lists');
            } else {
                $this->error('修改作者信息失败');
            }
            
            return;
        }

        $this->assign('AuthorInfo',$AuthorInfo);
        return $this->fetch();

    }

    public function delete()
    {
        $id= input('id');

        if (db('author')->delete($id)) {
            $this->success('删除成功','lists');
        } else {
            $this->error('删除失败');
        }
            
        
    }
}

<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Loader;
use app\admin\model\Article as ArticleModel;
class Article extends Base
{
    public function lists()
    {
        // $list = ArticleModel::paginate(4);
        // $list = db('article')->alias('a')->join('category c','c.id=a.category_id')->field('a.id,a.title,a.pic,a.author,a.state,c.category_name')->paginate(4);
        $list = ArticleModel::paginate(8);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            // dump($_POST);die;
            $data=[
                'title'         =>input('title'),
                'author_id'     =>input('author_id'),
                'keywords'      =>str_replace('，', ',', input('keywords')),
                'description'   =>input('description'),
                'contents'      =>input('contents'),
                'state'         =>input('state'),
                'add_time'      =>input('add_time'),
                'category_id'   =>input('category_id'),
                'add_time'      =>time(),
            ];

            if (input('state') =='on') {
                $data['state'] =1;
            }else{
                $data['state'] =0;
            }
            
            if ($_FILES['pic']['tmp_name']) {
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic'] = $info->getSaveName();
            }
            $validate = Loader::validate('article');
                if(!$validate->scene('add')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('article')->insert($data)) {
                return $this->success('添加文章成功','lists');
            } else {
                return $this->error('添加文章失败');
            }
            
            return;
        }
        $authorRes = db('author')->select();
        $categoryRes = db('category')->select();
        // $this->assign('categoryRes',$categoryRes);
        $this->assign(array(
            'authorRes'=>$authorRes,
            'categoryRes'=>$categoryRes,
        ));
        return $this->fetch();
    }

    public function edit()
    {
        $id = input('id');
        $articleInfos = db('article')->find($id);

        if (request()->isPost()) {
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
                'author_id'=>input('author_id'),
                'description'=>input('description'),
                'keywords'=>str_replace('，', ',', input('keywords')),
                'contents'=>input('contents'),
                'category_id'=>input('category_id'),
            ];
            if (input('state') =='on') {
                $data['state'] =1;
            }else{
                $data['state'] =0;
            }
            // dump($data);die;
            if ($_FILES['pic']['tmp_name']) {
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic'] = $info->getSaveName();
            }

            $validate = Loader::validate('Article');
                if(!$validate->scene('edit')->check($data)){
                    $this->error($validate->getError());
                    die;
            }

            if (db('article')->update($data)) {
                $this->success('修改文章成功','lists');
            } else {
                $this->error('修改文章失败');
            }
            
            return;
        }

        $authorRes = db('author')->select();
        $categoryRes = db('category')->select();
        $this->assign(array(
            'articleInfos'=>$articleInfos,
            'authorRes'=>$authorRes,
            'categoryRes'=>$categoryRes,
        ));

        return $this->fetch();
    }

    public function delete()
    {
        $id= input('id');

        if (db('Article')->delete($id)) {
            $this->success('文章删除成功','lists');
        } else {
            $this->error('文章删除失败');
        }

        
    }
}

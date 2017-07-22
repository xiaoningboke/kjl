<?php
namespace Admin\Controller;

use Common\Controller\AdminbaseController;


class AboutController extends AdminbaseController {
    public function index(){
             $m=M('About');
            $data=$m->where("id=1")->select();
            $this->assign('data',$data);
            $gsry=$m->where('about_flag=1')->select();
            $this->assign('gsry',$gsry);
            $zzrz=$m->where('about_flag=2')->select();
            $this->assign('zzrz',$zzrz);
            $name=$m->where('about_flag=3')->select();
            $this->assign("name",$name);
            $this->display();
    }

    public function about(){
            $m=M('About');
            htmlspecialchars($post);
            $post = str_replace("&lt;br /&gt;", "<Br/>", $post); // 替换回车
            $post = str_replace("&lt;br /&gt;", "\n", $post); // 替换回车
             $_POST[gsjj];
       //保持原样
            if($_POST['gsjj']){
                     $pattern = array(
                    '/ /',//半角下空格
                    '/　/',//全角下空格
                     '/\r\n/',//window 下换行符
                         );
                    $replace = array('&nbsp;','&nbsp;','<br />','<br />');
                   $ss= preg_replace($pattern, $replace, $_POST['gsjj']);
                }
                $m->about_content =$ss;
//保持原样
            $m->where('id=1')->save();
            $id="1";
            $d="Join";
            $this->upload($id,$d);
    }
    //公司荣誉
    public function aboutt(){
            $id="$_POST[id]";
            $d="gsry";
            $this->upload($id,$d);
    }
    public function aboutz(){
            $d="gsry";
            $this->upload($q,$d);
    }
    public function upp(){
            $id = I('get.id');
            $this->assign('id',$id);
            $this->display();
      }
    //资质认证
    //
    public function edit(){
          $id = I('get.id');
         $this->assign('id',$id);
         $m=M("about");
       $data = $m->where("id=$id")->select();
       $this->assign('name',$data);
       $this->display();
    }
    public function deleat(){
      $id = I('get.id');
      $m = M('About');
      $i=$m->delete($id);
      if($i>0){
        $this->success("删除成功");
      }
      else{
        $this->error("删除失败");
      }
}
public function add(){
           $flag=I('post.about_flag');
            $gsry=M('About');
           $data['about_flag'] = $flag;
           $id=$gsry->add($data);
           $d="gsry";
           $this->upload($id,$d);
}
    public function up(){
            $id = I('post.id');
           $title = I('post.title');
           $content = I('post.content');
            $data['about_title'] = $title;
            $data['about_content'] = $content;
            $m = M('About'); // 实例化User对象
            $i=$m->where("id=$id")->save($data);
            $d="zzrz";
            $this->upload($id);

    }
    public function addh(){
      $this->display();
    }
    public function addhz(){
           $title = I('post.title');
           $content = I('post.content');
           $data['about_flag'] = 3;
            $data['about_title'] = $title;
            $data['about_content'] = $content;
            $m = M('About'); // 实例化User对象
            $id=$m->add($data);
            $this->upload($id);
    }
    public function upload($id,$d){
            $upload = new \Think\Upload();// 实例化上传类
            $oldFN = $_FILES;
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =  '.\themes\simplebootx\Public\about\img/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $upload->replace  = true;
            $upload->autoSub  = false;
            $upload->saveName = '';
            $info   =   $upload->upload();
            $this->renameFile($oldFN['photo']['name'], '.\themes\simplebootx\Public\about\img/',$id,$d);
            if(!$info) {// 上传错误提示错误信息
                        $this->success('上传成功！',U('Admin/About/index'));
            }else{// 上传成功
                       $this->success('上传成功！',U('Admin/About/index'));
            }
}
public function renameFile($oldFN,$path,$id,$d){
                  $newName = "$d"."$id".".jpg";
                  rename($path.$oldFN[0],$path.$newName);
                  $m=M('About');
                  $data[about_address]= $newName;
                  $i=$m->where("id=$id")->save($data);
    }
}

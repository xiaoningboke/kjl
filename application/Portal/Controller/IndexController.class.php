<?php

namespace Portal\Controller;
use Common\Controller\HomebaseController;
use Portal\Model\IndexModel;

class IndexController extends HomebaseController{

            // 前台控制器
	public function index() {
            $Index = new IndexModel();
             $data = $Index->selectIndex();
             //
                $touch = M('Touch');
                $touchdata = $touch->select();
                $this->assign('touchdata',$touchdata);
                $this->assign('data',$data);
               //$this->display();


            // 前台文章列表

        $term_id=4;
        $term=sp_get_term($term_id);
        if(empty($term)){
            header('HTTP/1.1 404 Not Found');
            header('Status:404 Not Found');
            if(sp_template_file_exists(MODULE_NAME."/404")){
                $this->display(":404");
            }
            return;
        }


        $this->assign('cat_id', $term_id);

        $this->display();
    }

    // 文章分类列表接口,返回文章分类列表,用于后台导航编辑添加
    public function nav_index(){
        $navcatname="文章分类";
        $term_obj= M("Terms");

        $where=array();
        $where['status'] = array('eq',1);
        $terms=$term_obj->field('term_id,name,parent')->where($where)->order('term_id')->select();
        $datas=$terms;
        $navrule = array(
            "id"=>'term_id',
            "action" => "Portal/List/index",
            "param" => array(
                "id" => "term_id"
            ),
            "label" => "name",
            "parentid"=>'parent'
        );
        return sp_get_nav4admin($navcatname,$datas,$navrule) ;
    }



}



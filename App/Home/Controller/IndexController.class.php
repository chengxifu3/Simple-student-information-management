<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//使用模板输出 

       $this->display();
       //之前直接在index方法里面写 链接地址
       // $url = U("Admin/Index/index");
       // echo "<h2><a href='{$url}'>1 后台控制器</a></h2>";
    }

    public function demo(){
    	$this->assign("name","张三");
    	$this->assign("stu",array('name'=>'lisi','sex'=>'man'));
    	$_GET['name'] = "翠花";
    	$_POST['num'] = 100;

    	$this->display();
    }
}
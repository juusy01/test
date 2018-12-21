<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // $user = M('user');
	   // $result = $user->select();
	   // dump($result);
	   
	  // echo C("DB_HOST");  //C方法读取已有的配置
	  // echo C("my_config",null,'123');  //my_config配置文件未设置，设置默认值
	 $arr = C('URL_ROUTE_RULES');
	 $code = randomCode();
     echo $code;	 
	  
    }
	
	
	public function image(){
		$image = new \Think\Image(); 
        $image->open('./4.jpg');
        //将图片裁剪为400x400并保存为corp.jpg
        $image->thumb(150, 150)->save('./thumb2.jpg');
		echo 'OK';
	}
	
	public function addUser(){
		
	}
	
	
	
}
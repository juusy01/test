<?php
namespace Admin\Controller;
use Think\Controller;
use Demo\Demo;
class UserController extends Controller {
    public function index(){
	//echo C('Demo');die();
      $demo = new Demo();
	  $demo->index();
	  
    }
	public function login(){
		
		//var_dump(C());die();
		$demo = new \Admin\Model\UserModel();
		$data['username'] = I('post.username');
		$data['password'] = md5(I('post.password'));
		;
		//dump($data);die();
		if(IS_POST){
		   if(!$demo->create()){	
		     exit($demo->getError());
		   }else{
			 $map['username'] = I('post.username');
			 $select = $demo->field('username')->where($map)->find();
             if(empty($select)){
				$result = $demo->add();
			    echo $result; 
			 }else{
				 $this->error("123");
			 }			 
			 
		    }
	    }else{ 
		$this->display();
		}
	}
	
	
}
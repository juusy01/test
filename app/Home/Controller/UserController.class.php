<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	
	public function login(){
		if(IS_POST){
			$username = I('post.username');
			$password = I('post.password');
			if($username){
			echo 1;
			}else{
				echo 0;
			}
		// $user = new \Home\Model\UserModel();
        // $result = $user->where("username=".$username)->find();
        // if($result){
			// echo "1";
		// }else{
			// echo "0";
		// } 		
			
		}
		//echo C('VIEW_PATH');die();
		$this->display();
	}
	
	
}












?>
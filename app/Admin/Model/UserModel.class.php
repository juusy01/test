<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	
	protected $_validate = array(
	 array('username','require','姓名不能为空'), 
	 array('password','require','密码不能为空'),
	
	);
}


?>
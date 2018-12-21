<?php
namespace Home\Controller;
use Think\Controller;
use Qcloud\QcloudSms;
class QcloudController extends Controller {
    public function index(){
      $sms = new QcloudSms();
	  $test = $sms->index();
	  echo $test;
    }
	
	
	public function image(){
		$image = new \Think\Image(); 
        $image->open('./4.jpg');
        //将图片裁剪为400x400并保存为corp.jpg
        $image->thumb(150, 150)->save('./thumb2.jpg');
		echo 'OK';
	}
	
	
    public function sendMail() {
      $url = 'http://api.sendcloud.net/apiv2/mail/send';
      $API_USER = 'juusy01_test_FLR1L0';
      $API_KEY = 'EL516SEXMAi4YQvH';

      //您需要登录SendCloud创建API_USER，使用API_USER和API_KEY才可以进行邮件的发送。
      $param = array(
          'apiUser' => $API_USER,
          'apiKey' => 'EL516SEXMAi4YQvH',
          'from' => 'wei_speet@163.com',
          'fromName' => 'SendCloud测试邮件',
          'to' => '120606327@qq.com',
          'subject' => '来自SendCloud的第一封邮件！',
          'html' => '你太棒了！你已成功的从SendCloud发送了一封测试邮件，接下来快登录前台去完善账户信息吧！',
          'respEmailId' => 'true');

    $data = http_build_query($param);

    $options = array(
          'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-Type: application/x-www-form-urlencoded',
          'content' => $data
    ));

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    echo $result;
  }
  

}
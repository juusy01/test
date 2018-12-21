<?php
$route_rules = [
  'aaa' => 'Home/Index/index',
];

return array(
	//'配置项'=>'配置值'
	'VIEW_PATH' =>'./template/Home/',
	'TMPL_PATH'	=> '/template/Home/',
	'URL_ROUTER_ON'   => true ,
    'URL_ROUTE_RULES' => $route_rules,
);
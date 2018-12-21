<?php

function pf($arr){
$str = '<pre>'.print_r($arr,1).'</pre>';
echo $str;


}

function randomCode(){
    return mt_rand(100000,999999);
} 




?>
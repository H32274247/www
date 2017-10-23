<?php
/* +----------------------------------------------------------------
 * | Software: [AQPHP framework]
 * |	 Site: www.aqphp.com
 * |----------------------------------------------------------------
 * |   Author: 赵 港 < admin@gzibm.com | 847623251@qq.com >
 * |   WeChat: GZIDCW
 * |   Copyright (C) 2015-2020, www.aqphp.com All Rights Reserved.
 * +----------------------------------------------------------------*/


//$连接上字母 是申明变量
$name = 1111;     //数字类型 int

$name = '赵港';   //由数字类型 变换到字符串String类型

$name = 3.14159; //由字符串型 转到浮点型

//var_dump($name);//详细的打印

//echo $nname;   //echo 是一个关机词 不需要加（） 只能打印值


//按址传参
$sex = 21;

$data = &$sex;


//可变变量
/*
$a = 'hello';  //字符串 hello

$$a = 'word';

var_dump($hello);*/

//$_GET  获取浏览器地址栏参数
//$_POST  获取POST提交的所有数据
//$_REQUEST  //获取GET或者POST提交的数据
//$_SERVER   //获取请求的HTTP头信息

//var_dump($_REQUEST);




//定义常量 define('YS','杨森森');

//echo YS;  不需要加$

//系统自带常量
echo PHP_VERSION;

$str = array('1','2');

unset($str);

//var_dump(is_int($str));

var_dump(defined('PHP_VERSION'));
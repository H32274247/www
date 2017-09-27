<?php
/**
 * Created by PhpStorm.
 * User: admin_isk27uk
 * Date: 2017/9/27
 * Time: 19:28
 */

$name = '贵州';

$DATA = '华夏微联大数据';

$fix = '有限公司';


$str =  $name.$DATA.$fix;       //.是链接字符串 不具备加减乘除

//删除变量
unset($str);


/*if(isset($str))
{
    echo "<script>alert('变量存在')</script>";
}
else
{
    echo "<script>alert('变量不存在')</script>";
}*/

//echo $str;              //输出 是一个关键词 不是函数 不需要跨号
var_dump($_REQUEST);      // 详细的输出信息；


define('PHP_PATH','aaaaa'); //常量 全大写 作用于全局 凡是应用了当前文件的 都可以调用

//$PHP_PATH = 'aaaa';
//
//echo PHP_VERSION.'<br/>';
//echo PHP_OS.'<br/>';

if(defined('PHP_PATH'))
{
    echo "<script>alert('常量存在')</script>";
}
else
{
    echo "<script>alert('常量不存在')</script>";
}

$pwd = "";
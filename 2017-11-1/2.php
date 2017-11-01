<?php
/* +----------------------------------------------------------------
 * | Software: [AQPHP framework]
 * |	 Site: www.aqphp.com
 * |----------------------------------------------------------------
 * |   Author: 赵 港 < admin@gzibm.com | 847623251@qq.com >
 * |   WeChat: GZIDCW
 * |   Copyright (C) 2015-2020, www.aqphp.com All Rights Reserved.
 * +----------------------------------------------------------------*/
 
/*
  * "$str后面一定要隔开 否则会被认定为 这一整个是变量
  * 例如 $str12313 需要改为 {$str}123 或者 $str 123"
  *
  *
  *
  * $str = 2;

$c = "$str sdfsfsf";

echo $c;*/

/*
 *
 * \ 转义 关键词或者变量或者单双引符号 $符 及制表符 换行 \等
$str = "\"这个是转义符号\"\$a这个是转义符号这个是转义符号这个\r\n是转义符号这个是转义符号这个是转义符号这个是转义符号";

file_put_contents('20.txt', $str);

echo $str;*/
/*
$aa='aa';
print('aa is \'aa\''."<br/>");
print("aa is \"aa\""."<br/>");
print("aa is 'aa'"."<br/>");
print("aa is $aa"."<br>");
print("aa is {$aa}"."<br>");
print('aa is $aa'."<br>");
print('aa is '.$aa);*/



/*
 *
 * 定界符  <<<定界符名
 * 结束的时候在当前行最前 打上定界符名加;号
 * 定界符 的结束符号前不能有任何空格
$num = mt_rand(1,3);
                            $str = <<<strContent
    <html>
<head>
    <link rel="stylesheet" href="{$num}.css">
</head>
<body>
    <div class="box">这个是测试随机换色{$num}</div>
</body>
</html>

strContent;  //前面不能有任何代码或则空格

echo $str;*/
/*
 * echo print 是只打印输出字符串等简单数据类型
 * print_r() var_dump() 可以打印复杂的数据类型 例如 Array 数组 Object 对象


$arr = Array('a');

var_dump($arr);
print_r($arr);*/

//$str = "          这是什么       ";


//trim()  是去掉收尾的空白
//ltrim left + trim  去掉左边的空白
//rtrim right+ trim  去掉右边的空白


/*var_dump(trim($str));

var_dump(ltrim($str));
var_dump(rtrim($str));*/

/*
 * 获取字符串长度 默认ASCII
$str = "这是什么";
//echo strlen($str);


// GBK BG2312 UTF-8  UTF-16


//UTF-8  是中文 1个字节
//UTF-16       1.5
//ASCLL          3
//GB2312        1.75


获取不同编码的字符串 所占字节大小
mb_strlen(字符串, 指定字符需要全大写);

echo "这是UTF-8 ".mb_strlen($str, "UTF-8")."<br/>";
echo "这是UTF-16 ".mb_strlen($str, "UTF-16")."<br/>";
echo "这是ASCII ".mb_strlen($str, "ASCII")."<br/>";
echo "这是GB2312 ".mb_strlen($str, "GB2312")."<br/>";*/



/*
 *
 *
 *
 *
 *
 *
 *
 * 全部转换为 小写
$str = "HELLO";
echo strtolower($str);

    全部转换为大写
$str = "hello";
echo strtoupper($str);*/


/*
 *
 * 第一个单词的首字母大写
 * echo ucfirst("hello world");

所有单词的首字母大写
echo ucwords("hello world apple");*/

/* 字符串加密
 * echo  md5('a').'<br/>';

echo  md5('a1');*/


/*$str = '1.txt,3.txt,asad.jpg';

/*
 *将字符串拆分为数组
 * var_dump(explode(',',$str));
 *
 *将数组 合并为字符串  可以指定 合并的分隔符
 * echo implode('--',array('测试','文件',1));
 *
 * */



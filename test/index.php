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
 * if  是判断
 * empty 是否为空
 * ！取反
 * $_POST 全大写 是接受所有POST提交的数据
 * file_put_contents 是写入文件 第一个参数是文件名 第二个是需要保存的数据
 * date 是格式化时间 第一参数是时间格式 Y 年  m 月 d 日 H 时 i 分 s 秒 可以随意换位置组合
 * echo  是输出
*/
 //1、判断前台是否提交数据  如果有提交
 if(!empty($_POST))
 {
     //接受前台提交的数据
     $data = $_POST;

     //组合所需结构 公司名称：公司名 - 电话 13145209353 - 联系人 致远
     $str = '公司名字：'.$data['name'].' - 电话：'.$data['phone'].' - 联系人：'.$data['username'];

     //将提交的数据保存到本地根目录 当前时间作为文件名
     $result = file_put_contents(date('YmdHis').'.txt', $str);

     //判断是否保存成功 然后提示用户
     if($result)
     {
         echo "<script>alert('您的留言提交成功');</script>";
     }
     else
     {
         echo "<script>alert('您的留言提交失败');</script>";
     }
 }

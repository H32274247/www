<?php
/**
 * Created by PhpStorm.
 * User: admin_isk27uk
 * Date: 2017/9/28
 * Time: 17:12
 */

/**
 * 文件上传
 *  1、判断文件是否上传 如果上传了再走上传if里面
 *  2、获取上传的文件名 和临时存放目录
 *  3、将文件从临时目录中保存到网站下 指定的目录
 *  4、告诉用户 上传成功
 *
 *
 *  如果用户未进行上传 就提示 用户上传并且转跳到上传页面
 */
if(!empty($_FILES))
{

    $file = $_FILES['file'];
    $temp_file = $file['tmp_name'];
    $file_name = $file['name'];

    move_uploaded_file($temp_file, '/test_upload_'.$file_name);

    echo "<script>alert('文件".$file_name."上传成功');</script>";
}
else
{
    echo "<script>alert('对不起您还未上传文件！！！');location.href='index.html';</script>";
}
?>
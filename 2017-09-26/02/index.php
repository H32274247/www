<?php
/**
 * Created by PhpStorm.
 * User: admin_isk27uk
 * Date: 9/26/2017
 * Time: 8:38 PM
 */

//创建变量  = 用户GET提交的数据

// 用户提交数据的两种方式 POST ---GET   $_POST  $_GET

$name = 'admin';
$pwd  = 123456;

if(!empty($_POST))
{
    $input = $_POST;

    if($name == $input['username'])
    {
        if($pwd == $input['passsword'])
        {
            echo "<script>alert('恭喜您登陆成功');location.href='https://www.aqphp.com';</script>";

        }
        else
        {
            echo "<script>alert('密码错误');</script>";
        }
    }
    else
    {
        echo "<script>alert('用户名或密码错误');</script>";
    }
}


?>


<html>
    <head>
        <style>
            *{
                padding:0px;
                margin:0px;
            }
            .box{
                width:500px;
                height:100px;
                border:1px solid #ccc;
                margin:50px auto;
            }

        </style>
    </head>
    <body>
        <div class="box">
            <img src="./image/1.gif" width="500"/>
            <form action="index.php" method="post">
                用户名：<input type="text" name="username" value="">
                新密码：<input type="password" name="passsword">
                <input type="submit" value="注 册">
            </form>
        </div>
    </body>
</html>

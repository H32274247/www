<?php
/**
 * Created by PhpStorm.
 * User: admin_isk27uk
 * Date: 2017/9/27
 * Time: 19:59
 */

if(!empty($_POST))
{
    $input = $_POST;

   switch ($input['type'])
   {

       case 1:
           $num = $input['a'] + $input['b'];
           echo  "<script>alert('您计算的结果为：".$num."');</script>";
           break;
       case 2:
           $num = $input['a'] - $input['b'];
           echo  "<script>alert('您计算的结果为：".$num."');</script>";
           break;
       case 3:
           $num = $input['a'] * $input['b'];
           echo  "<script>alert('您计算的结果为：".$num."');</script>";
           break;
       case 4:
           $num = $input['a'] / $input['b'];
           echo  "<script>alert('您计算的结果为：".$num."');</script>";
           break;
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
    <form action="jsq.php" method="post">
        数字一：<input type="text" name="a">
            <select name="type">
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">X</option>
                <option value="4">/</option>
            </select>
        数字二：<input type="text" name="b">
        <input type="submit" value="计 算">
    </form>
</div>
        alert('您计算的结果为:35');
<scrip>alert('aaaaa');</scrip>
</body>
</html>


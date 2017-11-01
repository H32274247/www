<?php
/* +----------------------------------------------------------------
 * | Software: [AQPHP framework]
 * |	 Site: www.aqphp.com
 * |----------------------------------------------------------------
 * |   Author: 赵 港 < admin@gzibm.com | 847623251@qq.com >
 * |   WeChat: GZIDCW
 * |   Copyright (C) 2015-2020, www.aqphp.com All Rights Reserved.
 * +----------------------------------------------------------------*/




//进一取整函数
// 凡是浮点型数值 都进一取整
//echo ceil(15.2);


//舍去取整函数
// 凡是浮点型数值 都舍去小数点
//echo floor(15.8);



//获取最大值  获取两个参数 之间的最大值
//echo max(10, 301);



//获取最小值
//echo min(9, 30);  获取两个参数 之间的最小值


// 四舍五入函数
//echo round(10.4);

// 指数 就是次方
//echo pow(2, 8);

$num = mt_rand(1,3);

?>

<html>
<head>

    <link rel="stylesheet" href="<?php echo $num; ?>.css">
</head>
<body>
    <div class="box">这个是测试随机换色<?php echo $num;  ?></div>
</body>
</html>

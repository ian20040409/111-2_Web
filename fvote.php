<?php
$uname2=$_POST['uname'];
$lunch2=$_POST['lunch'];
echo "你的姓名是：" . $uname2 . "，午餐是：" . t_lunch($lunch2);

function t_lunch($lunch)
{
    $tmp = "";
    switch ($lunch) {
        case 1:
            $tmp = "Mcdonald";
            break;
        case 2:
            $tmp = "學餐";
            break;
        case 3:
            $tmp = "海底撈";
            break;
        case 4:
            $tmp = "四海遊龍";
            break;
    }
    return $tmp;
}
?>

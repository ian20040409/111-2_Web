<?php
echo date("Y-m-d H:i:s");
echo "<br>";
echo "截止投票票2023年/3/17 23:59:59總秒數=".mktime("23","59","59","3","17","2023");
echo "<br>";
echo "現在時間".date("Y-m-d H:i:s")."總秒數=".mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));

$voteendtime=mktime("23","59","59","3","17","2023");
$voteNowtime=mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
if($voteNowtime<$voteendtime){
	echo "可投票";
    echo "<a href='fparty.htm'>班聚投票</a>";
}
else 
	echo "投票結束";
?>
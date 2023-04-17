<?php
$lunch2=$_POST['lunch'];
echo "班聚日期時間:".t_lunch($lunch2);


function t_lunch($lunch){
	$tmp = "";
	switch($lunch){
	case 1:
       $tmp="112/03/17(五)18:00貴族世家";
	   break;
	case 2:
       $tmp="112/03/18(六)18:00貴族世家";
	   break;
    case 3:
       $tmp="112/03/19(日)18:00貴族世家";
	   break;
    case 4:
       $tmp="112/03/17(五)18:00牛比燒";
	   break;	
	case 5:
       $tmp="112/03/17(六)18:00牛比燒";
	   break;
	case 6:
       $tmp="112/03/17(日)18:00牛比燒";
	   break;  
	}	
	return $tmp;
}
?>
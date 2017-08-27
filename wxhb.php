<?php
//模拟微信红包
$num=8;
$total_money=10;
$min_money=0.01;
$q_arr=array();
for($i=1;$i<=$num;$i++){
    $safe_total_money=$total_money-($num-$i)*$min_money;
    $q_money=mt_rand($min_money*100,$safe_total_money*100)/100;
    $total_money=$total_money-$q_money;
    $q_arr[]=$q_money;
}
print_r($q_arr);
echo '<br>';
$a="qwertyuiop";
echo '<pre>';
print_r(str_split($a));
?>
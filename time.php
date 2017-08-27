<?php
//返回当前时间的时间戳
echo time().'<br>';
echo strtotime('-1 day').'<br>';
echo strtotime('-1 week').'<br>';
echo strtotime('-1 month').'<br>';
echo date("y-m-d",strtotime('0 day')).'<br>';
echo date("y-m-d",time()).'<br>';
//(hour,minute,second,month,day,year,)
echo mktime(0,0,0,7,22,2017);
echo '<hr>';
echo date('y-m-d');
?>
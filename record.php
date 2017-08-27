<?php
include 'public.php';
include 'test.xml';
$now=date('y-m-d',time());
$filename='log/tongbu_'.$now.'.log';
$time=time();
$re="www.geiliyou.com";
$result='ok1';
//error_log($time."\t".$re."\t".$result."\n",3,$filename);//3表示消息被发送到后面的文件
//$content=$time."\t".$re."\t".$result;
//writelog($content);
$xmldate='<?xml version="1.0" encoding="ISO-8859-1"?>';
$xmldate.='<note>';
$xmldate.='<to>Tove</to>';
$xmldate.='<from>Jani</from>';
$xmldate.='<heading>Reminder</heading>';
$xmldate.="<body>Don't forget me this weekend!</body>";
$xmldate.='</note>';
 echo getXmlData($xmldate);
?>
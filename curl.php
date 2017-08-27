<?php
//初始化
$ch = curl_init();
//设置抓取的url
curl_setopt($ch, CURLOPT_URL, 'https://www.baidu.com');
//设置头文件的信息作为数据流输出
curl_setopt($ch, CURLOPT_HEADER, 1);
//设置获取的信息以文件流的形式返回，而不是直接输出。
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//执行命令
$data = curl_exec($ch);
echo curl_error($ch);
//关闭URL请求
curl_close($ch);
//显示获得的数据
//var_dump($data);
echo 1111;
echo json_decode($data,true);
//echo str_replace('百度','唐波',$data);
?>
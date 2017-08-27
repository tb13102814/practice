<?php
/*写日志*/
function writelog($loginfo){
    $file='log/tongbu_'.date('y-m-d').'.log';
    if(!is_file($file)){
        file_put_contents($file,'',FILE_APPEND);//如果文件不存在，则创建一个新文件。
    }
    $contents=$loginfo."\r\n";
    file_put_contents($file, $contents,FILE_APPEND);
}
/*xml转array*/
function getXmlData($strxml)
{
    $pos = strpos($strxml, 'xml');
    if($pos){
        $xmlCode=simplexml_load_string($strxml,'SimpleXMLElement',LIBXML_NOCDATA);
        $arrayCode=get_object_vars_final($xmlCode);
        return $arrayCode ;
    }else {
        return '';
    }
}
/*将对象转成数组*/
function get_object_vars_final($obj)
{
    if(is_object($obj)){
        $obj=get_object_vars($obj);
    }
    if(is_array($obj)){
        foreach ($obj as $key=>$value){
            $obj[$key]=get_object_vars_final($value);
        }
    }
    return $obj;
}
?>
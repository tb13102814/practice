<?php
$arr=array(200,50,300,500,10,900);
$target=500;
$len=count($arr);
for ($i=0; $i <$len ; $i++) { 
    if(in_array($target-$arr[$i], $arr)){
        echo $arr[$i].'<br>';
    }
    continue;
}
$arr1=array(100,200,500,100,300);
print_r(array_unique($arr1));
$a=100;
$b=200;
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo '<br>';
echo $a;
echo '<br>';
echo $b;
echo '<br>';
?>
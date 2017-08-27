<?php
function digui($arr,$pid=0){
    $new=$res=array();
    foreach ($arr as $key => $value) {
        if($value['pid']==$pid){
           $new['child']=$value;
           $res=array_merge($new,digui($arr,$value['id']));
        }
    }
    return $res;
}
$arr=array(
        0=>array(
                'id'=>1,
                'title'=>'首页',
                'pid'=>0,
            ),
        1=>array(
                'id'=>2,
                'title'=>'学习',
                'pid'=>0,
            ),
        2=>array(
                'id'=>3,
                'title'=>'php',
                'pid'=>2,
            ),
        3=>array(
                'id'=>4,
                'title'=>'Linux',
                'pid'=>'2'
            ),
    );
print_r(digui($arr));
?>
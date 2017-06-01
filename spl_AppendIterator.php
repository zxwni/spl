<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 17:10
 */
$arr_a = new ArrayIterator(array(1,2,3));
$arr_b = new ArrayIterator(array(4,5,6));
$it = new AppendIterator();
$it->append($arr_a); //将多个ArrayIterator拼接在一起
$it->append($arr_b);
foreach($it as $k=>$v){
    echo $k.":".$v."\n";
}

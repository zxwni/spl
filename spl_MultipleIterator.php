<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 17:14
 */
$arrId = new ArrayIterator(array(1,2,3,4,5));
$arrName = new ArrayIterator(array("Jim",'Lucy','Tom'));
$arrAge = new ArrayIterator(array('11',22,33,44));
$mit = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$mit->attachIterator($arrId,"Id");
$mit->attachIterator($arrName,"Name");
$mit->attachIterator($arrAge,"Age");
foreach ($mit as $k=>$v) {
    print_r($v);
}
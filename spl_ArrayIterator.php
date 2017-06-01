<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 16:28
 */

$fruits = array(
    "apple" => "apple value",
    "orange" => "orange value",
    "banana" => "banana value",
);
print_r($fruits);
foreach($fruits as $k=>$v){
    echo $k.':'.$v."\n";
}
echo "/***** use ArrayIterator\n";
$its = new ArrayIterator($fruits);
echo "/*** use foreach \n";
foreach($its as $k=>$v){
    echo $k.":".$v."\n";
}
echo "/*** use while \n";
$its->rewind();
while($its->valid()){
    echo $its->key().":".$its->current()."\n";
    $its->next();
}
echo "/*** seek while \n";
$its->rewind();
if($its->valid()){
    $its->seek(1); //跳过 该位置的节点
    while($its->valid()){
        echo $its->key().":".$its->current()."\n";
        $its->next();
    }
}



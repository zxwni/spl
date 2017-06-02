<?php
/**
 * spl 堆栈
 */

$stackObj = new SplStack();
$stackObj->push('a');//将新的节点添加到堆栈的顶部(top)
$stackObj->push('b');
$stackObj->push('c');
print_r($stackObj);
echo "Top is ".$stackObj->top()."\n";
echo "Buttom is ".$stackObj->bottom()."\n";
$stackObj->offsetSet(0,"C"); //offset=0是Top位置
print_r($stackObj);
echo "Current is ".$stackObj->current()."\n";
$stackObj->rewind(); //堆栈的rewind指向的是Top位置，双向列表相反
$stackObj->next(); //指针指向靠近Bottom的位置的下一个节点，双向列表相反
echo "Current is ".$stackObj->current()."\n";
$stackObj->prev(); //指针指向靠近Top的位置的下一个节点，双向列表相反
echo "Current is ".$stackObj->current()."\n";

//遍历堆栈
$stackObj->rewind();
while($stackObj->valid()){
    echo $stackObj->key()."=>".$stackObj->current()."\n";
    $stackObj->next();
}

//从堆栈中删除节点
echo "PopValue : ".$stackObj->pop()."\n"; //pop将堆栈中top位置的节点删除
print_r($stackObj);


<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 16:02
 */
$queueObj = new SplQueue();
$queueObj->enqueue("1");//将新的节点添加到队列的顶部(top)
$queueObj->enqueue(2);
$queueObj->enqueue(3);
print_r($queueObj);
echo "Current ".$queueObj->current()."\n";
echo "top is ".$queueObj->top()."\n";
echo "bottom is ".$queueObj->bottom()."\n";
$queueObj->rewind();
echo "Current ".$queueObj->current()."\n";
$queueObj->offsetSet(0,"C");
print_r($queueObj);
//遍历队列
$queueObj->rewind();  //rewind指向队列bottom的节点
while($queueObj->valid()){
    echo $queueObj->key()."=>".$queueObj->valid()."\n";
    $queueObj->next();
}
//删除队列节点
echo "dequeue value :".$queueObj->dequeue()."\n"; //把Buttom位置的节点从队列中删除，并返回,如果Current 指向top时，current 会失效
print_r($queueObj);



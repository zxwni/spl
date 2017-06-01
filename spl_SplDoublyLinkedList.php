<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 14:36
 */
$splObj = new SplDoublyLinkedList();
$splObj->push(1); //将新的节点添加到链表的顶部(top)
$splObj->push(2);
$splObj->push(3);
$splObj->unshift(10); // 将新的节点添加到链表的底部(Bottom)
$splObj->rewind(); // rewind操作作用于把节点指针指向Bottom所在节点
print_r($splObj);
echo 'current=>'.$splObj->current()."\n";  //获取节点指针指向的节点
$splObj->next(); //将当前指针移到下一个节点(靠近Top)
$splObj->prev(); // 将当前指针移到上一个节点(靠近Bottom)
echo 'nextNode=>'.$splObj->current()."\n";
$splObj->prev();
if($splObj->current()){
    echo "Current is valid\n";
}else{
    echo "Current is invalid\n";
}
$splObj->rewind();
if($splObj->valid()){
    //判断当前指针是否是有效节点
    echo "is validlist\n";
}else{
    echo "is not validlist\n";
}
echo "pop value:".$splObj->pop()."\n";  //把Top位置的节点从链表中删除，并返回,如果Current 指向top时，current 会失效
$splObj->next();
$splObj->next();
echo "pop value:".$splObj->pop()."\n";
print_r($splObj);
echo 'current=>'.$splObj->current()."\n";  //获取节点指针指向的节点
$splObj->shift(); // 把Button位置的节点从链表中删除，并返回,如果Current 指向top时，current 会失效
print_r($splObj);

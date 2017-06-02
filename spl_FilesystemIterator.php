<?php
/**
 * spl 迭代器
 */

$fit = new FilesystemIterator('F:\wamp64\www\smarty-3.1');
foreach($fit as $k=>$finfo){
    printf("%s\t%s\t%8s\t%s\n",
        date('Y-m-d H:i:s',$finfo->getMTime()),
        $finfo->isDir()?"<DIR>":"",
        number_format($finfo->getSize()),
        $finfo->getFileName()
    );
}
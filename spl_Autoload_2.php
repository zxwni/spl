<?php
/**
 * spl 自动加载类
 */
function __autoload($className){
    echo "__autoload :".$className."\n";
    require_once("libs/".$className.".php");
}
function loadfunction($className){
    echo "loadfunction :".$className."\n";
    require_once("libs/".$className.".php");
}
spl_autoload_register("  ");
new Test();
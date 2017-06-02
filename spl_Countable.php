<?php
/**
 * spl 接口
 */

class Countme implements Countable
{
    private $mycout = 5;
    public function count()
    {
        // TODO: Implement count() method.
        return $this->mycout;
    }
}
$obj = new Countme();
echo count($obj);

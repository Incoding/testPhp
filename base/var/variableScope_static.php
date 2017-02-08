<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午5:51
 */
function myTest() {
    static $x=0;
    echo $x;
    $x++;
}

myTest();
echo '</br>';
myTest();
echo '</br>';
myTest();
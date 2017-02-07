<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午5:51
 */
$x=5;
$y=10;

function myTest() {
    global $x,$y;
    $y=$x+$y;
}

myTest();
echo $y; // 输出 15

echo '---------------------';

$x=5;
$y=10;

function myTest2() {
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest2();
echo $y; // 输出 15
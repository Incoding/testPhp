<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午6:05
 */


$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo '</br>----------</br>';
function addition2() {
    $GLOBALS['sss'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition2();
echo $sss;
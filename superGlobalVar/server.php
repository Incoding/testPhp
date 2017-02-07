<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午6:08
 */

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];   // 这个会报找不到. 所以暂时先注释掉
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
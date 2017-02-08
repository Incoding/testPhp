<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午8:56
 */

if(!file_exists("welcome.txt"))
{
    die("File not found");
    echo '不会输出';
}
else
{
    $file=fopen("welcome.txt","r");
}
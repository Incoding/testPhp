<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午8:58
 */

//error handler function
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error
echo($test);
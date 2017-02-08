<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/2/7
 * Time: 下午4:37
 */
echo "</br>----创建索引数组---</br>";

$cars2=array("Volvo2222","BMW222","SAAB222");
echo "I like " . $cars2[0] . ", " . $cars2[1] . " and " . $cars2[2] . ".";



echo "</br>----创建索引数组2---</br>";
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="SAAB";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "</br>----遍历索引数组---</br>";
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "</br>----创建关联数组---</br>";



$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "</br>----创建关联数组2---</br>";

$age2['Peter']="77777";
$age2['Ben']="88888";
$age2['Joe']="9999";
echo "Peter is " . $age2['Peter'] . " years old.";
echo "</br>----遍历关联数组---</br>";

foreach($age2 as $x=>$x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


echo "</br>---获取数组长度----</br>";
echo count($cars);



echo "</br>---数组排序----</br>";

#下面的例子按照字母升序对数组 $cars 中的元素进行排序：
$cars=array("Volvo","BMW","SAAB");
sort($cars);
foreach($cars as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

#下面的例子按照数字升序对数组 $numbers 中的元素进行排序：
$numbers=array(3,5,1,22,11);
sort($numbers);
foreach($numbers as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

#根据值对数组进行升序排序 - asort()
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
asort($age);
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

#根据键对数组进行升序排序 - ksort()
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
ksort($age);
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

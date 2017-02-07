<html>
<body>
<!-- localhost:xxx/request.php?fname=kkself-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
$name = $_REQUEST['fname'] == NULL?"kk default":$_REQUEST['fname'];

echo $name;
?>

</body>
</html>
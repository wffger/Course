<?php

echo "测试信息，调试程序比较常用";
echo "<pre>  \$_REQUEST 信息";
print_r($_REQUEST);
echo "</pre>";

echo "<pre>  \$_POST 信息---此时$_GET 信息为空  ";
print_r($_POST);
echo "</pre><HR>";
/**
 * $n1=$_REQUEST["n1"];
 * $pwd=$_REQUEST["pwd"];
 */

$n1 = $_POST["n1"];
$pwd = $_POST["pwd"];

if (($n1 == "abc") && ($pwd == "123"))
	echo "用户名和密码正确！！！";
else
	echo "对不起，用户名或密码错！";

?>

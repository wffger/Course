<?php

echo "������Ϣ�����Գ���Ƚϳ���";
echo "<pre>  \$_REQUEST��Ϣ ";
print_r($_REQUEST);
echo "</pre>";

echo "<pre>  \$_GET ��Ϣ ";
print_r($_GET);
echo "</pre><HR>";

/**
 * $n1=$_REQUEST["n1"];
 * $pwd=$_REQUEST["pwd"];
 */

$n1 = $_GET["n1"];
$pwd = $_GET["pwd"];

if (($n1 == "abc") && ($pwd == "123"))
	echo "�û�����������ȷ������";
else
	echo "�Բ����û����������";

?>

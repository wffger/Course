<?php

echo "������Ϣ�����Գ���Ƚϳ���";
echo "<pre>  \$_REQUEST ��Ϣ";
print_r($_REQUEST);
echo "</pre>";

echo "<pre>  \$_POST ��Ϣ---��ʱ$_GET ��ϢΪ��  ";
print_r($_POST);
echo "</pre><HR>";
/**
 * $n1=$_REQUEST["n1"];
 * $pwd=$_REQUEST["pwd"];
 */

$n1 = $_POST["n1"];
$pwd = $_POST["pwd"];

if (($n1 == "abc") && ($pwd == "123"))
	echo "�û�����������ȷ������";
else
	echo "�Բ����û����������";

?>

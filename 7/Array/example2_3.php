<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<HTML>
<HEAD>

  <TITLE>�û������</TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="style.css">


</HEAD>

<BODY>
<?php
$zh = $_POST['login']; //�������Ա��ϵı�������ֵ��PHP����$zh��
$xm = $_POST['yourname'];
echo("����ʺ���:" . $zh); //����ʺ�
echo("<br>"); //����
echo("��������ǣ�" . $xm); //�������

echo("<br>");
echo("��������ǣ�" . $_POST['passwd']);
echo("<br>");
echo("��Ĳ�ѯ���������ǣ�" . $_POST['question']);
echo("<br>");
echo("����Ա��ǣ�" . $_POST['gender']);
echo("<br>");

echo("��İ����ǣ�<br>");
foreach($_POST['hobby'] as $hobby)
echo($hobby . "<br>");

?>

</BODY>
</HTML>

<html>
<head>
<title>�鿴����2</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<BODY>
<h1>�鿴����2--mysql_fetch_array</h1>
<TABLE>
    <TR>
        <Th align=center>ѧ��</Th>
        <Th align=center>����</Th>
        <Th align=center>ѧԺ</Th>
        <Th align=center>����</Th>
    </TR>
<?
   require_once "config.inc.php";
   
   $query_st="select num,name,college from student  ";
   $result_st=mysql_query($query_st);

	while ($re=mysql_fetch_array($result_st))           //��mysql_fetch_array()�Ѳ�ѯ������浽����$re�У�ÿ��ȡһ����¼
	{
     echo "\n<tr>";
     echo "\n<td> ",$re['num'],"</td>";
     echo "\n<td> ",$re['name'],"</td>";
     echo "\n<td> ",$re['college'],"</td>";

	 echo "\n<td> <pre>re=mysql_fetch_array�������鼰�±� ";
     print_r ($re);
     echo "\n </pre></td>";

	 echo "\n</tr>";
   }
   mysql_close($hd);
?>
  </TABLE>
</BODY>
</html>
<html>
<head>
<title>�鿴����3</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<BODY>
<h1>�鿴����3---$re=mysql_fetch_row</h1>
<TABLE>
	<TR>
		<Th align=center>ѧ��</Th>
		<Th align=center>����</Th>
		<Th align=center>ѧԺ</Th>
		<Th align=center>����</Th>
    </TR>
<?
require_once "config.inc.php";

$query_st="select num,name,college from student ";
$result_st=mysql_query($query_st);
while ($re=mysql_fetch_row($result_st))
{
echo "\n<tr>";
echo "\n<td> ",$re[0],"</td>";
echo "\n<td> ",$re[1],"</td>";
echo "\n<td> ",$re[2],"</td>";
     
	 echo "\n<td><pre>re=mysql_fetch_row ";
     print_r ($re);
     echo "\n </pre></td>";

echo "\n</tr>";
}
mysql_close($hd);
?>

  </TABLE>
</BODY>
</html>
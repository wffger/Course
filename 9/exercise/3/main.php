<html>
<head>
<title>����student����</title>
 <META   HTTP-EQUIV="pragma"     CONTENT="no-cache">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<BODY>
<h1>network���ݿ�student���������</h1>
<TABLE>
    <TR>
        <Th align=center>id</Th>
        <Th align=center>ѧ��</Th>
        <Th align=center>����</Th>
        <Th align=center>ѧԺ</Th>
        <Th align=center colspan='2'>����</Th>
    </TR>
<?
   require_once "config.inc.php";
   
   $query_st="select * from student ";
   $result_st=mysql_query($query_st);

	while ($re=mysql_fetch_array($result_st))         {
     echo "\n<tr>";
     echo "\n<td> ",$re['id'],"</td>";
     echo "\n<td> ",$re['num'],"</td>";
     echo "\n<td> ",$re['name'],"</td>";
     echo "\n<td> ",$re['college'],"</td>";
	 echo "\n<td> <A HREF='delete.php?id=",$re['id'],"'>ɾ��</A> </td>";
	 echo "\n<td> <A HREF='update.php'>����</A> </td>";
	 echo "\n</tr>";
   }
   mysql_close($hd);
?>
  </TABLE>
  <A HREF="reg.htm">���</A>
</BODY>
</html>
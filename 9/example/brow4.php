<html>
<head>
<title>�鿴����4</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<BODY>
<h1>�鿴����4--mysql_fetch_object</h1>
<TABLE  >
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
	  while ($obj=mysql_fetch_object($result_st))
	 {   echo "\n<tr>";
		 echo "\n<td> ",$obj->num,"</td>";
		 echo "\n<td> ",$obj->name,"</td>";
		 echo "\n<td> ",$obj->college,"</td>";
		 echo "\n<td><pre>obj=mysql_fetch_object ���� ";
		 print_r ($obj);
		 echo "\n </pre></td>";
		 
		 echo "\n</tr>";
	}
	 mysql_close($hd);
	?>
  </TABLE>
</BODY>
</html>
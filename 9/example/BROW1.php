<html>
<head>
<title>�鿴����1</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<BODY>
<h1>�鿴����1---mysql_num_rows ��mysql_result </h1>
<TABLE>
	<TR>
		<th align=center>ѧ��</th>
		<th align=center>����</th>
		<th align=center>ѧԺ</th>
    </TR>
<?
   $hd=mysql_connect("localhost","root","") or die("����ʧ��");      
   //  ����mysql�����������  ��������localhost �û�����webdb   ���룺123
   //һ�����die()����������ʧ��ʱ�����������൱��exit

   $dbname=mysql_select_db("network",$hd);    
   //  ѡ��Ҫ���������ݿ�  network
   mysql_query('SET CHARACTER SET gbk');

   $query_st="select num,name,college from student "; 
   //  ����Ҫ���Ĳ�ѯ��䣬���浽����$query_  st�У����ں���Ĳ���
   $result_st=mysql_query($query_st,$hd);         
   //  ִ�в�ѯ���Ѳ�ѯ�����¼�� $result_st��

   $num_st=mysql_num_rows($result_st);              
   //  ȡ����ѯ������ж����У����浽����$num_st��

   for ($i=0;$i<$num_st;$i++) 
   // ��ѭ����� ��ʾ�����еĲ�ѯ��� ѭ������$num_st����0�п�ʼ����
   {                                                                      
	  // ��mysql_result��������ȡ����ѯ�����

	 $numb=mysql_result($result_st,$i,"num");
	 //  �Ӳ�ѯ����ȡ����i�У�num�ֶε�����

	 $name=mysql_result($result_st,$i,"name");
	 //    ...    name

	 $college=mysql_result($result_st,$i,"college");
	 //   ...    college

	 echo "\n<tr>";
	 echo "\n<td> ",$numb,"</td>";
     echo "\n<td> ",$name,"</td>";
	 echo "\n<td> ",$college,"</td>";
	 echo "\n</tr>";
   }

   mysql_close($hd); 
   //  �ر���mysql������
?>
  </TABLE>
</BODY>
</html>
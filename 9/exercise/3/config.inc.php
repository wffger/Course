<?
 $server="localhost";  //mysql��������ַ
 $user="root";         //��½mysql���û���
 $pass="";          //��½mysql������
 $db_name="network";   //mysql��Ҫ���������ݿ���
 $hd=mysql_connect($server,$user,$pass) or die("��Ǹ���޷�����");
 $db=mysql_select_db($db_name,$hd);
 mysql_query('SET names gbk');   

?>
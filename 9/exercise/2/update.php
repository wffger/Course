<link href="style.css" rel="stylesheet" type="text/css">

<?
echo "<pre>post:";
print_r($_POST);
echo "</pre>";
$num=$_POST['num'];
$name=$_POST['name'];
$college=$_POST['college'];

if (($num!="")&&($name!="")&&($college!=""))
{
   $hd=mysql_connect("localhost","root","") ;
   //  ����mysql�����������  ��������localhost �û�����root  ���룺
   //  �����$hdΪһ�����������Ϊ��������ʧ��

   $dbname=mysql_select_db("network",$hd);
    //  ѡ��Ҫ���������ݿ�  network
   mysql_query('SET names gbk');   
   // ���ò�ѯ�ַ���Ϊgbk��ʽ

   $query="insert into student set num='$num',name='$name',college='$college'";
   //  ����Ҫ���Ĳ�ѯ���insert into student ...�����浽����$query�У����ں���Ĳ���
   //  ��һ�п��Բ��ã�ֱ�Ӱ��������д����һ���$query������
   echo "<P>",$query;

   $result=mysql_query($query,$hd);
   //  ִ�в�ѯ���Ѳ�ѯ�����¼�� $result��

   mysql_close($hd);
   //  �ر���mysql������

   echo "<p>ע����ȷ��";
}
else
{  echo "<p>�û���Ϣ����Ϊ�գ�";
}
?><P>
<A HREF="brow1.php">�鿴student����1</A><P>
<A HREF="brow2.php">�鿴student����2</A><P>
<A HREF="brow3.php">�鿴student����3</A><P>
<A HREF="brow4.php">�鿴student����4</A><P>
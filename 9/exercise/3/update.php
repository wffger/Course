<link href="style.css" rel="stylesheet" type="text/css">
<pre>
<?
print_r($_GET);
print_r($_REQUEST);

require_once "config.inc.php";
if (isset($_POST['sub']))
{ //��������
___________________;

___________________;


}




$query="select * from student where id=".$_REQUEST['id'];
$result=mysql_query($query);
$re=mysql_fetch_array($result);
mysql_close($hd);


?>

</pre>

<h1>��������</h1>

<FORM METHOD=POST ACTION="upload.php">
��ţ�<INPUT TYPE="text" NAME="id"       size=11 maxlength=11 value='<? echo $re['id'];?>' readonly><P>
ѧ�ţ�<INPUT TYPE="text" NAME="num"       size=11 maxlength=11 value='<? echo $re['num'];?>' ><P>

������<INPUT TYPE="text" NAME="name"        size=8 maxlength=8  value='<? echo $re['name'];?>' ><P>
ѧԺ��<INPUT TYPE="text" NAME="college"  size=16 maxlength=16 value='<? echo $re['college'];?>' ><P>
<INPUT TYPE="submit" value="����" name="sub">
</FORM>
<p></p>
<a href="main.php">���</a>
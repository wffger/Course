<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo"<script>alert('�Ƿ����������ȵ�½��');location.href='index.html';</script>";
}

?>
<link href="style.css" rel="stylesheet" type="text/css">
<?php
//ɾ��ָ����ŵļ�¼

//print_r($_GET);

if (isset($_POST['sub_delete']))
{ if ($_POST['sub_delete']=="ȷ��")
	{
		 require_once "config.inc.php";
		$query="delete  from student where id=".$_POST['id'];
		$result=mysql_query($query);
		mysql_close($hd);
	}

}
?>
<P>


<FORM METHOD=POST ACTION="">
ȷ��ɾ����¼<?php echo $_GET['id']; ?>��<P>
<input type="hidden" name="id" value="<?php echo $_GET['id']  ?>">
<INPUT TYPE="submit" value="ȷ��" name="sub_delete">
<INPUT TYPE="submit" value="ȡ��" name="sub_delete">
</FORM>

<a href="main.php">����</a>

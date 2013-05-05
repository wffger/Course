<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> 网页计数器 </TITLE>
<style type="text/css">
<!--
* {
	font-size: 20pt;
	color: #0000CC;
	padding: 50px;
}
-->
</style>

</HEAD>


<?
function counttxt()
{
	$fp=fopen("countdat.txt","r");
	$str1=fgets($fp,10);
	fclose($fp);

	$str1++;
	$fp=fopen("countdat.txt","w");
	fputs($fp,$str1);
	fclose($fp);
	print $str1;
}
?>

<BODY BGCOLOR="#FFFFFF">

	<CENTER>
	
		你是第
		<? counttxt(); ?>
		个访问者
		
	</CENTER>
	
</BODY>
</HTML>

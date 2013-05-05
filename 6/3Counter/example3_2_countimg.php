<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> 网页计数器 </TITLE>
<style type="text/css">
<!--
* {
	font-size: 16pt;
	color: #0000CC;
	padding: 10pt;
}
img{	padding: 0pt;
}
-->
</style>
</HEAD>

<?
function counttxt()
{
	$fp=fopen("countdat.txt","r");
	$str=fgets($fp,10);
	fclose($fp);

	$str++;
	$fp=fopen("countdat.txt","w");
	fputs($fp,$str);
	fclose($fp);
//	print $str;

	$max=100000;
	while ($max>=1)
	{
		$digtal=floor($str/$max);
		echo "<img src='img/".$digtal.".gif'>\n";
		$str=$str-$digtal*$max;
		$max=$max/10;
	}

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

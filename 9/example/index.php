<?php
session_start();
?>
<html>
<head>
<title>��¼����</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<BODY>
<?php
   require_once "config.inc.php";
   
   $num=$_POST['num'];
   $name=$_POST['name'];
   $query_st="select * from student  where num='$num'  and name='$name'";
//   echo   $query_st;
   $result_st=mysql_query($query_st);
   $count=mysql_num_rows($result_st);
   if($count==0) {
	   echo "ѧ�Ż�������,����3��󷵻�������" ;
	   echo " <meta http-equiv=\"refresh\" content=\"3; url=index.html\" />";

   }
   else
   {  
	   $_SESSION['name']=$name;
	   echo " <meta http-equiv=\"refresh\" content=\"0; url=main.php\" />";
   }

	mysql_close($hd);
?>
</BODY>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> ��ά����--��� </title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">

 </head>

 <body>
 <?php
 $result=array();

   $result[0]['num'] = "2001";
   $result[0]['name']= "����";
   $result[0]['college']= "��ϢѧԺ";
   $result[1]['num']= "2002";
   $result[1]['name']= "����";
   $result[1]['college']= "����ѧԺ";
   $result[2]['num']= "3001";
   $result[2]['name']= "����";
   $result[2]['college']= "Ӣ��ѧԺ";
 
//print_r($result);
//$resultΪ2ά����  $reΪ1ά����
 echo "<table>";
 foreach ($result as $re) {
     echo "\n<tr>";
     echo "\n<td> ",$re['num'],"</td>";
     echo "\n<td> ",$re['name'],"</td>";
     echo "\n<td> ",$re['college'],"</td>";
	 echo "\n</tr>";

    }
echo "</table>";
?>
 </body>
</html>

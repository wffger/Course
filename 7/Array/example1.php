<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> ���� </title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">

 </head>

 <body>
 <pre>
�������±������
<?php

$firstquarter = array('January', 'February', 'March');
print_r($firstquarter);
?> 


<?php
$firstquarter = array(1=>'January', 'February', 'March');
print_r($firstquarter);
?>

<?php
$firstquarter = array('month1'=>'January','month2'=> 'February', 'March');
print_r($firstquarter);
?>


<?php
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 15, 19, 3 => 13);
print_r($array);
?> 



<?php
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
print_r($fruits)
?> 

</pre>

 </body>
</html>


 <?php
 $hd=mysql_connect("localhost","root","") ;
   //  连结mysql服务器的语句  服务器：localhost 用户名：root  密码：
   //  连结号$hd为一个整数，如果为空则连结失败

   $dbname=mysql_select_db("network",$hd);
    //  选择要操作的数据库  network
   mysql_query('SET names gbk');   
   // 设置查询字符串为gbk格式
   ?>
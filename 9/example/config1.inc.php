
 <?php
 $hd=mysql_connect("localhost","root","") ;
   //  ����mysql�����������  ��������localhost �û�����root  ���룺
   //  �����$hdΪһ�����������Ϊ��������ʧ��

   $dbname=mysql_select_db("network",$hd);
    //  ѡ��Ҫ���������ݿ�  network
   mysql_query('SET names gbk');   
   // ���ò�ѯ�ַ���Ϊgbk��ʽ
   ?>
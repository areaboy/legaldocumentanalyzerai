<?php


$openshift_mysql_db_servername = "172.30.148.211:3306";
$openshift_mysql_db_username = "";
$openshift_mysql_db_password = "";
$openshift_mysql_db_port = 3306;
$openshift_mysql_db_name ="sampledb";
$tidb_options = array(
	//PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	PDO::MYSQL_ATTR_SSL_CA => 'cacert-2023-05-30.pem',
	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => 'VERIFY_IDENTITY',
);
try {

$db = new PDO("mysql:host=$openshift_mysql_db_servername;dbname=$openshift_mysql_db_name;charset=utf8", $openshift_mysql_db_username, $openshift_mysql_db_password);

    // set the PDO error mode to exception
   // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //echo "Openshift Mysql Database Connected successfully...."; 
}
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
echo "<div style='color:white;background:red;padding:10px;border:none;'>Connection to Openshift Mysql Cloud Database Failed...Check your Mysql Database Credentials and Internet as well</div>";
}


  









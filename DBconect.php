<?php
$db_host="sql111.epizy.com"; //localhost server 
$db_user="epiz_32038291";	//database username
$db_password="sfEVceQvoX";	//database password   
$db_name="epiz_32038291_serrcall2";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>




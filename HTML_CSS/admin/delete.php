<?php
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin']==true)
{
$ref=$_GET['ref'];
require 'bin/params.php';
mysql_connect($host,$user,$password) or die('Connection Error.');
mysql_select_db($base) or die('wrong database');
$query="delete from LISTE_SKI where ref='$ref'";
mysql_query($query);
mysql_close();
header('location:tool.php');
}
?>

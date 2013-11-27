<?php
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin']==true)
{
$ref=$_POST['ref'];
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$taille=$_POST['taille'];
$desc=$_POST['desc'];
require 'bin/params.php';
mysql_connect($host,$user,$password) or die('connexion error.');
mysql_select_db($base) or die('wrong database');
$query="insert into LISTE_SKI(nom,prix,taille,desc) VALUES('$nom','$prix','$taille','desc')";
mysql_query($query);
mysql_close();
header('location:tool.php');
}
?>

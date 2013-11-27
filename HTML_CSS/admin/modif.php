<?php
session_start();
if(!isset($_SESSION['admin'])|| $_SESSION['admin']==false)header('location:index.php');
?>
<!DOCTYPE html PUBLIC>
<html>

<?php
$REF=$_GET['ref'];
require 'bin/params.php';
mysql_connect($host,$user,$password) or die('Connexion error');
mysql_select_db($base) or die('wrong database');
$query="SELECT * from LISTE_SKI WHERE $REF=REF";
$r=mysql_query($query);
if($a=mysql_fetch_object($r))
    {
    $REF=$a->REF;
    $NOM=$a->NOM;
    $PRIX=$a->PRIX;
    $TAILLE=$a->TAILLE;
    $DESC=$a->DESC;
	}
mysql_close();
?>
  <body>
  <h2>Modification</h2>
      <form action="update.php" method="post">
          ref : <input name="ref" type="number" value="<?php echo $REF; ?>"/><br/>
          nom: <input name="nom" type="text" value="<?php echo $NOM; ?> "/><br/>
          prix: <input name="prix" type="number" value="<?php echo $PRIX; ?>"/><br/>
          taille: <input name="taille" type="number" value="<?php echo $TAILLE; ?>"/><br/>
          desc : <input name="desc" type="text" value="<?php echo $DESC; ?>"/><br/>
     <input type="submit" value="Modifier" /><br/>
<input type="hidden" name="ref" value="<?php echo $ref; ?>" />
    </form>
   </body>
</html>
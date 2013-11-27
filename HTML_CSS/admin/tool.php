<?php
session_start();
if(!isset($_SESSION['admin'])|| $_SESSION['admin']==false)header('location:adminindex.php');
?>
<!DOCTYPE html>
<html>

  <body>

<h1>Administration</h1>
<a href="disconnect.php">SE DECONNECTER</a><p/>
<h2>Ajout</h2>
    <form action="add.php" method="post">
        Reference : <input name="nom" type="number" /><br/>
        Nom: <input name="prenom" type="text" /><br/>
        Prix: <input name="salaire" type="number" /><br/>
        Taille : <input name="taille" type="number" /><br/>    
        Description : <input name="description" type="text" /><br/>
   <input type="submit" value="Ajouter" /><br/>

    </form>

<br/><br/>
<?php

require 'bin/params.php';
  mysql_connect($host,$user,$password) or die('connexion error');
  mysql_select_db($base) or die('unexisting database');
  $query='SELECT * FROM LISTE_SKI';
  $r=mysql_query($query);
  mysql_close();
  echo'<table><tr><td>Ref</td><td>Nom</td><td>Prix</td><td>Taille</td><td>Desc</td></tr>';
  while($a=mysql_fetch_object($r))
    {
            $ref=$a->REF;
            $nom=$a->NOM;
            $prix=$a->PRIX;
            $taille=$a->TAILLE;
            $desc=$a->DESC;
    echo"<tr><td>$ref</td><td>$nom</td><td>$prix</td><td>$taille</td><td>$desc</td><td><a href=\"delete.php?REF=$ref\">SUPPRIMER</a></td>";
    echo"<td><a href=\"modif.php?ref=$ref\">MODIFIER</a></td>";
    echo"</tr>";
    }
  echo '</table>';
  ?>
  </body>
</html>

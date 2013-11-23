
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SnowRidersSSX</title>		
		<link rel="stylesheet" type="text/css" href="style.css"/>	
    </head>

    <body>
		<header>
				
				<a id="logo" href="index.html">
					<img style="height: 41px; width: 400px;" src="../images/logo.png" alt="retour accueil" />
				</a>
				
				<a id="connexion" href="connexion.php">
					<img style="height: 10px; width: 150px;" src="../images/connexion.png" alt="accès compte"
						onmouseover="this.src='../images/connexion_over.png';" onmouseout="this.src='../images/connexion.png';"
					/>
				</a>				

			<nav id="navigateur">
				<ul>
					<li id="lien_accueil">
						<a class="lien" href="index.html"> 
							<img src="../images/accueil.png"  alt="retour accueil_over" 
								onmouseover="this.src='../images/accueil_over.png';" onmouseout="this.src='../images/accueil.png';"
							/>							
						</a>
					</li>
					
					<li id="lien_produits" >
						<a class="lien" href="produit.php">
							<img src="../images/produits_over.png"  alt="vers produits" />								 
						</a>
					</li>
					
					<li id="lien_promotions">
						<a class="lien" href="promotions.html">
							<img src="../images/promotions.png" onmouseover="this.src='../images/promotions_over.png';" onmouseout="this.src='../images/promotions.png';" alt="vers promotions" />
						</a>
					</li>
					
					<li id="lien_contact">
						<a class="lien" href="contact.html">
							<img src="../images/contact.png" onmouseover="this.src='../images/contact_over.png';" onmouseout="this.src='../images/contact.png';" alt="vers contact" />						
						</a>
					</li>
				</ul>
			</nav>
		</header>
			
			<img id="mountains" src="../images/background_mountains.png" 	width="1366px"	height="527px">

			<div id="contenu">
			</div>
		
		

        <section id="tableau">
            
        <!--<?php
			require 'params.php';
			mysql_connect($host,$user,$password) or die('Erreur le connexion à la base de données.');
			mysql_select_db($base) or die('La base de données n\'existe pas');
			$query='SELECT *
					FROM `LISTE_SKI`
					ORDER BY `REF` ASC ';
			$r=mysql_query($query);
			mysql_close();
			echo '<table border><tr><td>REFERENCE</td><td>NOM</td><td>PRIX</td><td>TAILLE</td><td>DESCRIPTION</td></tr>';
			while($a=mysql_fetch_object($r))
			{
				$REF=$a->REF;
				$NOM=$a->NOM;
				$PRIX=$a->PRIX;
				$TAILLE=$a->TAILLE;
				$DESC=$a->DESC;
				echo"<tr><td>$REF</td><td>$NOM</td><td>$PRIX</td><td>$TAILLE</td><td>$DESC</td></tr>";
			}
			echo '</table>';
		?>-->
        
        
        
        </section>
        
   </body>
</html>			


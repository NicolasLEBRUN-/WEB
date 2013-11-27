<?php
session_start();
?>
<!DOCTYPE html>
<html>

     <head>
        <meta charset="utf-8" />
        <title>SnowRidersSSX</title>		
		<link rel="stylesheet" type="text/css" href="./style.css"/>	
    </head>
    
    <header>
				<a id="logo" href="../index.html">
					<img src="../images/accueil.png" alt="retour accueil" />
				</a>
				
				<a id="lien_connection" href="./connection.php">
					<img src="../images/connection.png" alt="accès compte" />
				</a>				

			<nav>
				<ul>
					<li id="lien_accueil">
						<a class="lien" href="../index.html"> 
							<img src="../images/accueil.png" alt="retour accueil"  width="156px" height="43px"/>							
						</a>
					</li>
					
					<li id="lien_produits" >
						<a class="lien" href="../produit.php">
							<img src="../images/produits.png" alt="vers produits" width="156px" height="43px"/>								 
						</a>
					</li>
					
					<li id="lien_promotions">
						<a class="lien" href="../promotions.html">
							<img src="../images/promotions.png" alt="vers promotions" width="156px" height="43px"/>
						</a>
					</li>
					
					<li id="lien_contact">
						<a class="lien" href="../contact.html">
							<img src="../images/contact.png" alt="vers contact" width="156px" height="43px"/>						
						</a>
					</li>
				</ul>
			</nav>
		
		</header>
    
    
    
    
  <body>
<H1>Connexion</h1>
    <form action="connect.php" method="post">
    Pseudo : <input name="pseudo" type="text" /><br/>
    Password : <input name="password" type="password" /><br/>
   <input type="submit" value="Se connecter"/><br/>

    </form>

  </body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html>

  <body>
<H1>Connexion</h1>
    <form action="connect.php" method="post">
    Pseudo : <input name="pseudo" type="text" /><br/>
    Password : <input name="password" type="password" /><br/>
   <input type="submit" value="Se connecter"/><br/>

    </form>

  </body>
</html>

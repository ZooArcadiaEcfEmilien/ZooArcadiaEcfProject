<?php
    // Code PHP
    require_once("ProjetEcfZoo/Commun/init.php");
    require_once("ProjetEcfZoo/Commun/haut_de_page.php");
    require_once("ProjetEcfZoo/Commun/menu_general.php");
?>

<h1></h1>
    </div> 
        <h2></h2>
    <div class="login-container">
        <form class="login-form" action="/login" method="post">
          <h2>Connexion</h2>
          <div class="form-group">
            <label for="username">Nom de compte :</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit">Se connecter</button>
          <div class="forgot-password">
            <a href="#">Mot de passe oublié ?</a>
          </div>
        </form>
      </div>
      
<?php
  require_once("ProjetEcfZoo/Commun/bas_de_page.php");
?>
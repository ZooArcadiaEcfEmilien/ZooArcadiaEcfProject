<!--<?php
    // Code PHP
   // require_once("ProjetEcfZoo/Commun/init.php");
    //require_once("ProjetEcfZoo/Commun/haut_de_page.php");
    //require_once("ProjetEcfZoo/Commun/menu_general.php");
?>

<h1></h1></div>  
<h2></h2>  
    <form action="#" method="post">
        
        <div class="label1">
            <div class="label2">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class ="label2">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
        </div>
      
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="mail" required>
      
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" required>
      
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="4" required></textarea>
      
        <button type="submit" id="envoyerContact">Envoyer</button>
      </form>



      <?php
   // require_once("ProjetEcfZoo/Commun/bas_de_page.php");
?>
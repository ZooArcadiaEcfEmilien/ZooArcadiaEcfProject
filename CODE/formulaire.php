<?php
    // Code PHP
    require_once("ProjetEcfZoo/Commun/init.php");
    // Si le formulaire est en methode post ->
    if($_POST){
        $count = $pdo->exec("INSERT INTO formulaire (nom, prenom, adresse_mail, sujet, description)
            VALUES (
            '$_POST[nom]',
            '$_POST[prenom]',
            '$_POST[adresse_mail]',
            '$_POST[sujet]',
            '$_POST[description]'
        )");

        if ($count > 0){
            echo"Envoie a la bdd reussi";
        }
    }
    require_once("ProjetEcfZoo/Commun/haut_de_page.php");
    require_once("ProjetEcfZoo/Commun/menu_general.php");
?>

<h2></h2>  
    <form action="#" method="POST">
        <div class="label1">
            <div class="label2">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            </div>

            <div class ="label2">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
            </div>
        </div>
      
        <label for="email">E-mail :</label>
        <input type="mail" id="adresse_mail" name="adresse_mail" placeholder="Entrez votre adresse mail" required>
      
        <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet" placeholder="Insérez un titre" required>
      
        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" placeholder="Message ... 500 charactères maximum" required></textarea>

        <button type="submit" id="envoyerContact">Envoyer</button>
    </form>

<?php
    require_once("ProjetEcfZoo/Commun/bas_de_page.php");
?>
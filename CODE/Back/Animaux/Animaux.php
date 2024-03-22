<?php
                                                    //------------------------CLASS ANIMAL------------------------//
class Animal {
    public $name;
    public $race;
    public $habitat;
    public $suiviAnimal;

    function __construct($name, $race, $habitat) {
        $this->name = $name;
        $this->race = $race;
        $this->habitat = in_array($habitat, ['Savane Africaine', 'Forêt Tropicale', 'Aquarium Marin', 'Toundra Arctique']) ? $habitat : "Inconnu";
    }

    // -----AJOUT ANIMAL-----//
    public static function createAndAddToListAnimal($name, $race, $habitat, &$animalList) {
        $animal = new Animal($name, $race, $habitat);
        $animalList[] = $animal;
        echo 'animal ajouté avec succès';
        return $animal;
    }

    // -----SUPPRIMER ANIMAL -----//
    public static function deleteAnimal($name, &$animalList) {
        foreach ($animalList as $key => $animal) {
            if ($animal->name === $name) {
                unset($animalList[$key]);
                echo 'Animal supprimé avec succès';
                return true; 
            }
        }
        echo 'Animal non trouvé dans la liste';
        return false; 
    }
}
                                                    //------------------------CLASS SUI ANIMAL------------------------//

class SuiviAnimal {
    public $etatSante;
    public $nourritureFavorite;
    public $nourritureQuantite;
    public $datePassage;
    public $commentaireAnimal;
    public $compteurLike;

    function __construct($etatSante, $nourritureFavorite, $nourritureQuantite, $datePassage, $commentaireAnimal, $compteurLike) {
        $this->etatSante = in_array($etatSante, ['Très bon', 'Correct', 'Se rétablit', 'Mauvais', 'Critique']) ? $etatSante : "Autre";
        $this->nourritureFavorite = $nourritureFavorite;
        $this->nourritureQuantite = $nourritureQuantite;
        $this->datePassage = $datePassage;
        $this->commentaireAnimal = $commentaireAnimal;
        $this->compteurLike = $compteurLike;
    }
}

// Initialisation de la liste d'animaux
$animalList = [];

// Création d'animal et ajout à la liste d'animaux
$simba = Animal::createAndAddToListAnimal("Simba", "Lion", "Savane Africaine", $animalList);
$perroquet = Animal::createAndAddToListAnimal("Perroquet", "Oiseaux", "Forêt Tropicale", $animalList);

// Création d'un SuiviAnimal pour Simba
$suiviSimba = new SuiviAnimal("Correct", "viande", "2Kg", "10/10/24 10h10", "en bonne santé générale", 10);
$simba->suiviAnimal = $suiviSimba;

$suiviPerroquet = new SuiviAnimal("Critique", "Graine", "10G", "10/10/24 10h10", "A du mal à s'alimenter", 3);
$perroquet->suiviAnimal = $suiviPerroquet;        

// Affichage de l'état de santé et de la nourriture favorite de Simba
echo "Etat de santé de Simba : " . $simba->suiviAnimal->etatSante . "<br>";
echo "Nourriture favorite de Simba : " . $simba->suiviAnimal->nourritureFavorite . "<br>";

// Affichage de la liste d'animaux (pour le test)
print_r($animalList);



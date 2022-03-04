<?php
/**
 * While no information is furbish, classes are in /Classes
 * exo 1:
 * @todo Créer une classe Personnage, pas d'attribut ni de méthode
 *
 * exo 2:
 * @todo Instancier Personnage dans index.php
 *
 * exo3:
 * @todo ajouter à Personnage les attributs nom (=Francis) et age(=53), puis afficher les valeurs des attributs
 *
 * exo4:
 * @todo ajouter les méthodes bonjour($nom) et auRevoir(). Les appeler
 *
 * exo5:
 * @todo créer une classe Voiture, y ajouter une constante WHEELS initialisée à 4 et l'afficher
 *
 * exo6:
 * @todo ajouter à Personnage une méthode afficheNom retournant la valeur de l'attribut nom. L'afficher
 */

require_once 'Classes/Personnage.php';
require_once 'Classes/Voiture.php';
// exo 2:
$personnage = new Character();
// exo 3, part 2:
?>

<p><?= $personnage->nom ?></p>
<p><?= $personnage->age ?></p>

<?php // exo 4, part 2: ?>

<p><?= $personnage->bonjour('Claire') ?></p>
<p><?= $personnage->bonjour('Doug') ?></p>
<p><?= $personnage->auRevoir() ?></p>

<?php // exo5, part 2?>
<p><?= Voiture::WHEELS ?></p>

<?php // exo6, part 2 ?>
<p><?= $personnage->afficheNom() ?></p>



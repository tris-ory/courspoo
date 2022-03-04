<?php
require_once "Character.php";

$batman = new Character('Batman', Character::MEDIUM );
$superman = new Character('Superman');


?>

<ol>
    <li><?= Character::score($batman,  $superman, $batman->greet($superman)) ?></li>
    <li><?= Character::score($batman,  $superman, $superman->greet($batman)) ?></li>
    <li><?= Character::score($batman,  $superman, $batman->attack($superman)) ?></li>
    <li><?= Character::score($batman,  $superman, $superman->attack($batman)) ?><br />
    <?= Character::score($batman,  $superman, $superman->superAttack($batman)) ?></li>
    <li><?= Character::score($batman,  $superman, $batman->superAttack($superman)) ?></li>
    <li><?= Character::score($batman,  $superman, $superman->heal()) ?></li>
    <li><?= Character::score($batman,  $superman, $batman->secretAttack($superman)) ?></li>
    <li><?= Character::score($batman,  $superman, $superman->attack($batman)) ?><br />
        <?= Character::score($batman,  $superman, $superman->attack($batman)) ?></li>
    <li><?= Character::score($batman,  $superman, $batman->attack($superman)) ?><br />
        <?= Character::score($batman,  $superman, $batman->secretAttack($superman)) ?></li>
    <?php $batman->setXP($batman->getXP() + 1); ?>
    <li>Batman a gagné un niveau. Maintenant, le niveau de Batman est : <?= $batman->getXP() ?></li>
</ol>
<p><?= $batman->getState() ?>, <?= $superman->getState() ?></p>

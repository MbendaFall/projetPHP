<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_9</title>
    <link rel="stylesheet" href="LESTYLE.css">
</head>
<body>
    <ul class="Menu">
        <li> <a href="index.php">ACCUEIL</a>
        <h1>Les Exercices !</h1>
            <ul class="exos">
                <li><a href="exo1.php"> EXERCICE1</a></li>
                <li><a href="exo2.php"> EXERCICE2</a></li>
                <li><a href="exo3.php"> EXERCICE3</a></li>
                <li><a href="exo4.php"> EXERCICE4</a></li>
                <li><a href="exo5.php"> EXERCICE5</a></li>
                <li><a href="exo6.php"> EXERCICE6</a></li>
                <li><a href="exo7.php"> EXERCICE7</a></li>
                <li><a href="exo8.php"> EXERCICE8</a></li>
                <li><a href="exo9.php"> EXERCICE9</a></li>
                <li><a href="exo10.php"> EXERCICE10</a></li>
                <li><a href="exo11.php"> EXERCICE11</a></li>
                <li><a href="exo12.php"> EXERCICE12</a></li>
                <li><a href="exo13.php"> EXERCICE13</a></li>
                <li><a href="exo14.php"> EXERCICE14</a></li>
                <li><a href="exo15.php"> EXERCICE15</a></li>
                <li><a href="exo16.php"> EXERCICE16</a></li>
                <li><a href="exo17.php"> EXERCICE17</a></li>
                <li><a href="exo18.php"> EXERCICE18</a></li>

            </ul>
        </li>

    </ul>
    <h1>Exercice 9: Tableau associatif</h1>
    
</body>
</html>
<?php

$personnes = array(
    'Mbenda' => array(
        'prenom' => 'Mbenda',
        'ville_residence' => 'Mermoz',
        'age' => 30
    ),
    'Salima' => array(
        'prenom' => 'Salima',
        'ville_residence' => 'Dakar',
        'age' => 25
    ),
    'Bineta' => array(
        'prenom' => 'Bineta',
        'ville_residence' => 'Rufisque',
        'age' => 35
    ),
);

// Accès aux informations d'une personne
$nom = 'Mbenda';

echo "Informations sur $nom :\n  <br> <br>";
echo "Prénom : " . $personnes[$nom]['prenom'] . "\n  <br>";
echo "Ville de résidence : " . $personnes[$nom]['ville_residence'] . "\n <br>";
echo "Âge : " . $personnes[$nom]['age'] . " ans\n";

?>
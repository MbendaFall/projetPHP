<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_11</title>
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
    <h1>Exercice 11: Boucle While</h1>
    <?php

$personnes_exercice_8 = array(
    'FALL' => array(
        'prenom' => 'Mbenda',
        'ville' => 'DAKAR',
        'age' => 22
    ),
    'NDIAYE' => array(
        'prenom' => 'SALIMA',
        'ville' => 'Mermoz',
        'age' => 22
    ),
    'SAMB' => array(
        'prenom' => 'Fatou',
        'ville' => 'Paris',
        'age' => 28
    ),
);

// Utilisation de la boucle while pour l'exercice 8
echo "<h2>Tableau 8</h2>";
reset($personnes_exercice_8); // Réinitialise le pointeur au début du tableau
while ($infos = current($personnes_exercice_8)) {
    $nom = key($personnes_exercice_8);
    echo "<p> Nom : $nom, Prénom : " . $infos['prenom'] . ", Ville : " . $infos['ville'] . ", Âge : " . $infos['age'] . " ans<br> </p>";
    next($personnes_exercice_8);
}

// EXERCICE 9
$personnes_exercice_9 = array(
    'FALL' => array(
        'prenom' => 'Mbenda',
        'ville' => 'DAKAR',
        'age' => 9
    ),
    'NDIAYE' => array(
        'prenom' => 'Salima',
        'ville' => 'Mermoz',
        'age' => 18
    ),
    'SAMB' => array(
        'prenom' => 'FATOU',
        'ville' => 'THIES',
        'age' => 30
    ),
);

// Utilisation de la boucle while pour l'exercice 9
echo "<h2>Tableau 9</h2>";
reset($personnes_exercice_9); // Réinitialise le pointeur au début du tableau
while ($infos = current($personnes_exercice_9)) {
    $nom = key($personnes_exercice_9);
    echo "<p> Nom : $nom, Prénom : " . $infos['prenom'] . ", Ville : " . $infos['ville'] . ", Âge : " . $infos['age'] . " ans<br> </p>";
    next($personnes_exercice_9); 
}
?>
    
</body>
</html>
<?php

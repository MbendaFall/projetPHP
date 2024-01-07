<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_10</title>
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
    <h1>Exercice 10: Boucle Foreach</h1>
    
</body>
</html>
<?php
echo " <h1> Tableau 8 </h1> ";
$personnes = array(
    'FALL' => array(
         'Mbenda',
        'st Louis',
        '30'
    ),
    'Ndiaye' => array(
        'Salima',
        'Dakar',
        '25'
    ),
    'SAMB' => array(
        'Bineta',
         'Rufisque',
        '35'
    ),
);

// Utilisation de foreach pour parcourir le tableau indicé 
foreach ($personnes as $nom => $val) {
    echo "Informations sur $nom :\n <br> <br>";
    echo "Prénom : " . $val[0] . "\n <br>";
    echo "Ville de résidence : " . $val[1] . "\n <br>";
    echo "Âge : " . $val[2] . " ans\n <br>";
    echo "-----------------------------\n <br>";
}

echo " <h1> Tableau 9 </h1> ";
$personnes = array(
    'FALL' => array(
        'prenom' => 'Mbenda',
        'ville_residence' => 'st Louis',
        'age' => 30
    ),
    'Ndiaye' => array(
        'prenom' => 'Salima',
        'ville_residence' => 'Dakar',
        'age' => 25
    ),
    'SAMB' => array(
        'prenom' => 'Mamefa',
        'ville_residence' => 'Rufisque',
        'age' => 35
    ),
);

// Utilisation d'une boucle foreach pour lire le tableau de valeurs 
foreach ($personnes as $nom => $val) {
    echo "Informations sur $nom :\n <br>";
    echo "Prénom : " . $val['prenom'] . "\n <br>";
    echo "Ville de résidence : " . $val['ville_residence'] . "\n <br> ";
    echo "Âge : " . $val['age'] . " ans\n <br> ";
    echo "-----------------------------\n";
}
?>


<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERXICE_3</title>
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
    <h1>Exercice 3: Tirages aleatoires</h1>
</body>
</html>
<?php
// Tirage avec la boucle WHILE 
// Choix d'un nombre de trois chiffres
$nombreInitial = rand(100, 999);

// Initialisation du compteur de tirages
$nombreDeTirages = 0;

// Réalisez des tirages aléatoires jusqu'à ce que le nombre initial soit obtenu
while (true) {
    $nombretire = rand(100, 999);
    $nombreDeTirages++;

    // Vérifiez si le tirage est égal au nombre initial
    if ($nombretire === $nombreInitial) {
        break;
    }
}
echo "Avec la boucle WHILE ! <br> Le nombre initial était $nombreInitial et il a été obtenu en $nombreDeTirages tirages. <br>  ";
echo " <br> ";



// Tirage avec la boucle FOR

// Réalisez des tirages aléatoires jusqu'à ce que le nombre initial soit obtenu
for (; ; $nombreDeTirages++) {
     $nombretire = rand(100, 999);

    // Vérifiez si le tirage est égal au nombre initial
    if ( $nombretire === $nombreInitial) {
        break;
    }
}
echo "Avec la boucle FOR ! <br> Le nombre initial était $nombreInitial et il a été obtenu en $nombreDeTirages tirages. <br> ";

?>
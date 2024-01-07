<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_7</title>
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
    <h1>Exercice 7: Nombre Parfait</h1>
    <form action="" method="post">
        <label for=""> Entrer un nombre : </label>
        <input type="number" name="nombre">
        <button type="submit"> Entrer</button> <br>
        <br>
    </form>
</body>
</html>
<?php
   if (isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    
    // Initialisation de la somme des diviseurs
    $sommeDiviseurs = 0;
     //Boucle pour chercher les diviseurs du nombre saisi et faire leur somme 
     for ($i = 1; $i <= $nombre / 2; $i++ ){
        if($nombre % $i == 0){
            $sommeDiviseurs += $i; 
        }
     }
     if ( $sommeDiviseurs == $nombre ){
        echo " Le nombre $nombre est parfait !";
    }
     else {
        echo" Le nombre $nombre nest pas parfait !";
     } 
    }
    ?>
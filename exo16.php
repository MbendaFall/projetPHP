<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_16</title>
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
    <h1>Exercice16: Calcul du Sinus d'un angle</h1>
    <form method="post" action="">
        <label for="angle">Veuillez renseignez la valeur de l'angle :</label>
        <input type="text" name="angle" id="angle" required>
        <br><br>
        <label for="unite">Veuillez choisissez une unité de mesure :</label>
        <select name="unite" id="unite">
            <option value="radian">Degre</option>
            <option value="degre">Radian</option>
            <option value="grade">Grade</option>
        </select>
        <br><br>
        <input type="submit" value="Calculer">
    </form>
</body>
    <?php
        function sinusAngle($mesure,$unite = 'radian') {
            switch ($unite) {
                case 'degre':
                    $mesure = deg2rad($mesure);
                    break;
                case 'grade':
                    $mesure = deg2rad($mesure * 9 / 10);
                    break;
            }
            return sin($mesure);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angle = $_POST["angle"];
            $unite = $_POST["unite"];
            $resultat = sinusAngle($angle, $unite);
            echo "<p>Le sinus de $angle $unite est: $resultat</p>";
        }
        ?>
</body>
</html>
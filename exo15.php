<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_15</title>
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
    <h1>Exercice15: Transformation des chaînes de caractères</h1>
    <form method="post">
        <label for="inputString">Entrer la chaine de caractere</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Transformer</button>
    </form>
</body>
    <?php
    function Maj_Min(&$tab_Chaine) {
        foreach ($tab_Chaine as &$chaine) {
            $chaine = ucfirst(strtolower($chaine));
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chaine = $_POST["inputString"];
        $mesChaines = array($chaine);
        Maj_Min($mesChaines);
    }
    ?>
    <?php if (isset($mesChaines)): ?>
        <table>
            <thead>
                <tr>
                    <th>Chaine </th>
                    <th>Resultat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $chaine; ?></td>
                    <td><?php echo implode(", ", $mesChaines); ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
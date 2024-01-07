<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_13</title>
    <link rel="stylesheet" href="LESTYLE.css">
    <script>
        function calculerTVA() {
            var prixHT = parseFloat(document.getElementById('prixHT').value);
            var tauxTVA = parseFloat(document.getElementById('tauxTVA').value);

            if (isNaN(prixHT) || isNaN(tauxTVA)) {
                alert('Veuillez saisir des valeurs numériques valides.');
                return;
            }

            var montantTVA = prixHT * (tauxTVA / 100);
            var prixTTC = prixHT + montantTVA;

            document.getElementById('montantTVA').value = montantTVA.toFixed(2);
            document.getElementById('prixTTC').value = prixTTC.toFixed(2);
        }
    </script>
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

    <h1>Exercice 13: Calcul du TVA</h1>
    </body>
   
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prixHT = isset($_POST['prixHT']) ? floatval($_POST['prixHT']) : 0;
        $tauxTVA = isset($_POST['tauxTVA']) ? floatval($_POST['tauxTVA']) : 0;
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    }
    ?>
    <form method="post" action="">
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo isset($prixHT) ? $prixHT : ''; ?>" required>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo isset($tauxTVA) ? $tauxTVA : ''; ?>" required>
        <br><br>
        <button type="button" onclick="calculerTVA()">Calculer</button>
        <br><br>
        <label for="montantTVA">Montant TVA :</label>
        <input type="text" id="montantTVA" name="montantTVA" value="<?php echo isset($montantTVA) ? number_format($montantTVA, 2) : ''; ?>" readonly>

        <label for="prixTTC">Prix TTC :</label>
        <input type="text" id="prixTTC" name="prixTTC" value="<?php echo isset($prixTTC) ? number_format($prixTTC, 2) : ''; ?>" readonly>
        
    </form>
</body>
</html>
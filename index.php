<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Calcule ton IMC</title>
</head>
<body>


    <div id="entete">
        <h1>Bienvenu sur calcule ton IMC</h1>
        <p id="paragraphe_explication">L' indice de masse corporelle ou IMC ( BMI en anglais pour Body Mass Index) permet de déterminer la corpulence d'une personne. Cet indice de masse corporelle se calcule en fonction de la taille (en mètres) et du poids (en kilogrammes). Il n'est correctement interprétable que pour un adulte de 18 à 65 ans. L'IMC est le rapport du poids (en kg) sur la taille (en mètre) élevée au carré. Par exemple, une personne qui mesure 1,70 m et pèse 60 kg a un IMC de 60/1,70x1,70 = 20,76 kg/m2. Chez l'adulte, un IMC compris entre 18,5 et 24,9 est considéré comme normal. En dessous d'un IMC de 18,5, on parle de maigreur. Au-dessus de 24,9, on parle de surcharge pondérale. Quant à l'obésité, son seuil est fixé à 30 et trois stades sont distingués : l' obésité modérée, sévère et très sévère (encore appelée massive ou morbide).</p>
    </div>

    <div id="formulaire">
<?php
    if (isset($_POST['poid']) && isset($_POST['taille'])) {

            $resultat = $_POST['poid'] / ($_POST['taille'] * $_POST['taille']);
            $resultat = round($resultat, 2);

            if ($resultat <= 18.50) {
                echo '<p>Votre indice de masse corporelle est de : '. $resultat .'<br> donc vous êtes en insufisance pondérale.</p>';
            }
            elseif ($resultat > 18.50 && $resultat <= 25) {
                echo '<p>Votre indice de masse corporelle est de : '. $resultat .'<br> donc vous êtes de corpulance normale.</p>';
            }
            elseif ($resultat > 25 && $resultat <= 30) {
                echo '<p>Votre indice de masse corporelle est de : '. $resultat .'<br>donc vous êtes en surpoids.</p>';
            }
            elseif ($resultat > 30 && $resultat <= 35) {
                echo '<p>Votre indice de masse corporelle est de : '. $resultat .'<br>donc vous êtes en obésitée modéré.</p>';
            }
            elseif ($resultat > 35 && $resultat <= 40) {
                echo '<p>Votre indice de masse corporelle est de : '. $resultat .'<br>donc vous êtes en obésité sévère.</p>';
            }
            elseif ($resultat > 40) {
                echo '<p>Votre indice de masse corporelle est de : '. $resultat .'<br>donc vous êtes en obésité massive</p>';
            }
            echo '<a href="index.php">Recommencer</a>';
    }
    else {
        ?>

                <h2>Calcule de l'imc</h2>

                <div id="form_imc">
                    <form action="" method="post">
                        <input type="text" name="poid" id="poid" placeholder="Entrez votre poids en Kg"><br>
                        <input type="text" name="taille" id="taille" placeholder="Entrez votre taille en m"><br>
                        <input type="submit" value="Calculer" id="valid_btn">
                    </form>
                </div>
                

            </div>
        <?php
    }
?>
    
</body>
</html>
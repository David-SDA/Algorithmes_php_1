<h1>Exercice 5</h1>
<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>
<h2>Résultat</h2>

<?php
$franc=100;
$ratio=0.1524;
$convertion_euro=round(($franc*$ratio), 2);
echo "Montant en francs : $franc <br>";
echo "$franc francs = $convertion_euro €";
?>
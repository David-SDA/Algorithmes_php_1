<h1>Exercice 6</h1>
<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>
<h2>Résultat</h2>

<?php
$prix_article=9.99;
$quantite=5;
$taux_tva=0.2;
$calcul=($prix_article*($taux_tva+1))*$quantite;
echo "Prix unitaire de l'article : $prix_article €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $taux_tva<br>";
echo "Le montant de la facture à régler est de : $calcul €"
?>
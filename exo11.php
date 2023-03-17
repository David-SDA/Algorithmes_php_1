<h1>Exercice 11</h1>
<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et 
    d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé d'afficher le nombre 
    de marques de voitures présentes dans le tableau.<br>
    Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>
<h2>Résultat</h2>

<?php
function parcourir_tableau(array $tab){
    $nb_element_tab=count($tab);
    $affichage="Il y a $nb_element_tab marques de voitures dans le tableau :<br>";
    foreach($tab as $marque)
    {
        $affichage.="$marque<br>";
    }
    return $affichage;
}
$tableau_voiture= array("Peugeot", "Renault", "BMW", "Mercedes", "Audi");
echo parcourir_tableau($tableau_voiture);
?>
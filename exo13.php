<h1>Exercice 13</h1>
<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). 
    Elle devra être affichée avec 2 décimales.
</p>
<h2>Résultat</h2>

<?php
$tableau_note=array(10, 12, 8, 19, 3, 16, 11, 13, 9);
function moyenne($tab){
    $affichage="Les notes obtenues par l'élève sont : ";
    for($i=0; $i<count($tab); $i++){
        $affichage.="$tab[$i] ";
    }
    $affichage.="<br>Sa moyenne générale est donc de : ";
    $moyenne=round(array_sum($tab)/count($tab), 2);
    $affichage.="$moyenne<br>";
    return $affichage;
}
echo moyenne($tableau_note);
?>
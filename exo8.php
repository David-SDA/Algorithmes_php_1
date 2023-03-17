<h1>Exercice 8</h1>
<p>
    Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme :<br>
    Table de 8 :<br>
    1 x 8 = 8<br>
    2 x 8 = 16<br>
    3 x 8 = 24 ...<br>
    Remarque : proposer 2 solutions avec 2 types de boucles.
</p>
<h2>Résultat</h2>

<?php
echo "Solution avec boucle for :<br>";
function table_for(int $nombre){
    $affichage="";
    $affichage.="Table de $nombre :<br>";
    for($i=1; $i<=10; $i++){
        $multiplication=$i*$nombre;
        $affichage.= "$i x $nombre = $multiplication <br>";
    }
    return $affichage;
}
echo table_for(8);

echo "<br>";
echo "Solution avec boucle while :<br>";
function table_while(int $nombre){
    $affichage="";
    $affichage.="Table de $nombre :<br>";
    $i=1;
    while($i<=10){
        $multiplication=$i*$nombre;
        $affichage.="$i x $nombre = $multiplication <br>";
        $i++;
    }
    return $affichage;
}
echo table_while(5);
?>
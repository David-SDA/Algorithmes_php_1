<h1>Exercice 9</h1>
<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
    Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, « non imposable »).
</p>
<h2>Résultat</h2>

<?php
function imposable(int $age, string $sexe){
    $affichage="";
    $affichage.="Age : $age<br>";
    $affichage.="Sexe : $sexe<br>";
    if((strcmp($sexe, "F")==0 && $age>=18 && $age<=35) || (strcmp($sexe, "H")==0 && $age>=20)){
        $affichage.="La personne est imposable.<br>";
    }
    else{
        $affichage.="La personne n'est pas imposable.<br>";
    }
    return $affichage;
}
echo imposable(32,"F");
?>
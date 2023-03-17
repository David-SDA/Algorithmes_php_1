<h1>Exercice 14</h1>
<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>
<h2>Résultat</h2>

<?php

function age_exact(string $date_naissance){
    $aujourdhui=new DateTime();
    $date=new DateTime ($date_naissance);
    $diff=$aujourdhui->diff($date);
    echo $diff->format("Age de la personne : %Y ans %m mois %d jours");
}
age_exact("08/01/2001");
?>
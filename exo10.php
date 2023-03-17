<h1>Exercice 10</h1>
<p>
    A partir d'un montant à payer et d'une somme versée pour régler un achat, 
    écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, 
    de pièces de 2 € et 1 €.
</p>
<h2>Résultat</h2>

<?php
function achat(int $montant_a_payer, int $somme_versée){
    if($montant_a_payer > $somme_versée){
        trigger_error("Pas assez d'argent !");
    }
    $affichage="Montant à payer : $montant_a_payer €<br>";
    $affichage.="Montant versé : $somme_versée €<br>";
    $reste_a_rendre=$somme_versée - $montant_a_payer;
    $affichage.="Reste à payer : $reste_a_rendre €<br>";
    $affichage.="***************************************************<br>";
    $affichage.="Rendue de monnaie :<br>";
    
    $nb_billet_dix=0;
    $nb_billet_cinq=0;
    $nb_piece_deux=0;
    $nb_piece_un=0;
    while($reste_a_rendre!=0)
    {
        if($reste_a_rendre>=10){
            $nb_billet_dix++;
            $reste_a_rendre-=10;
        }
        elseif($reste_a_rendre>=5){
            $nb_billet_cinq++;
            $reste_a_rendre-=5;
        }
        elseif($reste_a_rendre>=2){
            $nb_piece_deux++;
            $reste_a_rendre-=2;
        }
        else{
            $nb_piece_un++;
            $reste_a_rendre-=1;
        }
    }

    $affichage.="$nb_billet_dix billets de 10 € - $nb_billet_cinq billets de 5 € - $nb_piece_deux pièce de 2 € - $nb_piece_un pièce de 1 €<br>";
    return $affichage;
}
echo achat(152, 200);
?>
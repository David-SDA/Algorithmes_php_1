<h1>Exercice 7</h1>
<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
    Si la catégorie n'est pas gérée, merci de le préciser.
</p>
<h2>Résultat</h2>

<?php
function categorie_enfant(int $age){
    if($age>=6 && $age<8){
        echo "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
        return "Poussin";
    }
    elseif($age>=8 && $age<10){
        echo "L'enfant qui a $age ans appartient à la catégorie « Pupille »";
        return "Pupille";
    }
    elseif($age>=10 && $age<12){
        echo "L'enfant qui a $age ans appartient à la catégorie « Minime »";
        return "Minime";
    }
    elseif($age>=12){
        echo "L'enfant qui a $age ans appartient à la catégorie « Cadet »";
        return "Cadet";
    }
    else{
        echo "L'enfant qui a $age ans n'appartient à aucune catégorie.";
        return "";
    }
}
categorie_enfant(10);
?>
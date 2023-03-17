<h1>Exercice 4</h1>
<p>
    Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>
<h2>Résultat</h2>

<?php
$phrase_palindrome="Engage le jeu que je le gagne";
$phrase_inverse=strrev($phrase_palindrome);
if(strcmp(str_replace(" ","",(strtolower($phrase_palindrome))),str_replace(" ","",trim(strtolower($phrase_inverse)))) == 0){
    echo "La phrase « $phrase_palindrome » est palindrome";
}
else{
    echo "La phrase « $phrase_palindrome » n'est pas un palindrome";
}
?>
<h1>Exercice 3</h1>
<p>
    A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot « aujourd'hui » par le mot « demain ». Afficher l'ancienne et la nouvelle phrase.
</p>
<h2>Résultat</h2>

<?php
$phrase="Notre formation DL commence aujourd'hui ";
$nouvelle_phrase=str_replace("aujourd'hui", "demain", $phrase);
echo "Voici l'ancienne phrase : $phrase <br>";
echo "Voici la nouvelle phrase : $nouvelle_phrase";
?>
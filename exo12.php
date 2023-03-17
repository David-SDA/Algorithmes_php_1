<h1>Exercice 12</h1>
<p>
    A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée 
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective 
    (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>
<h2>Résultat</h2>

<?php
$tableau_prenom_langue=[
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

function affichage_bonjour_lang($tab){
    $affichage="";
    ksort($tab);
    foreach($tab as $prenom => $langue){
        switch($langue){
            case "FRA":
                $affichage.="Salut ".$prenom ."<br>";
                break;
            case "ESP":
                $affichage.="Hola ".$prenom ."<br>";
                break;
            case "ENG":
                $affichage.="Hello ".$prenom ."<br>";
                break;
        }
    }
   
    return $affichage;
}
echo affichage_bonjour_lang($tableau_prenom_langue);
?>
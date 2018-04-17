<?php
   $ligne = 1; // compteur de ligne
$file = fopen("bdd.csv", "r");
while(!feof(file))
{
$tab=fgetcsv($file);
$champs = count($tab);//nombre de champ dans la ligne en question	
echo " Les " . $champs . " champs de la ligne " . $ligne . " sont :
";
$ligne ++;
//affichage de chaque champ de la ligne en question
for($i=0; $i<$champs; $i ++)
{
echo $tab[$i] . "
";
}
}
?>
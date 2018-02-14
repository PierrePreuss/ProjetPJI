<?php
    $file=fopen("test.csv","r"); //lit le fichier csv
    while(!feof($file)) //lit le fichier jusqu'a la fin
    {
    	$contenu=fgetcsv($file); 
		$count=count($contenu);
			for($i=0;$i<$count;$i++)
			{
				echo $contenu[$i]."\t";
			}
	 
echo "<br/>";
	}
?>
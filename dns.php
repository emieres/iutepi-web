<?php
	$file = fopen("dns.txt", "r") or exit("No puede abrir el archivo");
	//Imprima una línea del archivo hasta que se llegue al final
	while(!feof($file))
	{		
		$dns = fgets($file);	
	}
	fclose($file);
?>

<?php

require_once("../class/Upin.class.php");

$Upin = new Upin;

#vars

if(isset($_POST["go"]) AND $_POST["go"] == "1"){

	$Upin->get(
	  "perfil/", //Pasta de uploads
	  $_FILES["file"]["name"], //Nome do arquivo
	  10, //Tamanho máximo
	  "jpeg,jpg,mp3,html",	//Extenções permitidas
	  "file", //Atributo name do input file
	  1 //Mudar o nome?
	);
	$Upin->run();

	if($Upin->res == TRUE){
		foreach($Upin->json as $arr){
			echo "<img width=200 height=180 src='perfil/".$arr."' />";
		}
	}
}

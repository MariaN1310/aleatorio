<?php
$resultados = $_POST['cantidad_resultados'];
$separacion = $_POST['separacion'];
$text = $_POST['text'];
$final = "";

if ($separacion == "espacio") {
	$array = explode(" ", $text);

	$claves = array_rand($array, $resultados);

	if ($resultados == 1) {
		$final .= "<b>Resultado</b>: ". $array[$claves]."<br>";
	} else {
		for ($i = 0; $i <= $resultados; $i++) {
			if ($array[$claves[$i]] != "") {
				$final .= "<b>Resultado ". $i+1 ."</b>: ". $array[$claves[$i]]."<br>";
			}
		}
	}
	
} elseif ($separacion == "coma") {
	$array = explode(",", $text);

	$claves = array_rand($array, $resultados);

	if ($resultados == 1) {
		$final .= "<b>Resultado</b>: ". $array[$claves]."<br>";
	} else {
		for ($i = 0; $i <= $resultados; $i++) {
			if ($array[$claves[$i]] != "") {
				$final .= "<b>Resultado ". $i+1 ."</b>: ". $array[$claves[$i]]."<br>";
			}
		}
	}
} elseif ($separacion == "enter") {
	$array = explode("\n", $text);

	$claves = array_rand($array, $resultados);
	
	if ($resultados == 1) {
		$final .= "<b>Resultado</b>: ". $array[$claves]."<br>";
	} else {
		for ($i = 0; $i <= $resultados; $i++) {
			if ($array[$claves[$i]] != "") {
				$final .= "<b>Resultado ". $i+1 ."</b>: ". $array[$claves[$i]]."<br>";
			}
		}
	}
}

echo $final;
?>
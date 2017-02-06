<?php 
$content = "content/";

if(!isset($_GET['page']) ){
	$page = "home";
}else{
	$page = $_GET['page'];
}

if($page == "home") {
	$content .= "home.php";
	$title = "Startseite";
	$description = "Obst, Waldfrüchte &amp; Gemüse Schützenhofer in Grafenschachen bieten Ihnen frisches Obst aus der Region und zum Verkauf am Großgrünmarkt in Wien.";
}elseif($page == "produkte"){
    $content .= "produkte.php";
    $title = "Produkte";
    $description = "Das Obst, die Waldfrüchte und das Gemüse von Schützenhofer GmbH können Sie direkt bei uns in 7423 Grafenschachen oder am Großgrünmarkt in 1230 Wien kaufen.";
}elseif($page == "team"){
    $content .= "team.php";
    $title = "Team";
    $description = "Das angagierte Team von Obst &amp; Gemüsehandel Schützenhofer kümmert sich bestens um unsere Produkte und um Sie.";
}elseif($page == "ueber uns"){
    $content .= "ueber-uns.php";
    $title = "Über uns";
    $description = "Die Geschichte des Unternehmens Schützenhofer reicht bis 1955 zurück, wo die Produkte am Wiener Naschmarkt verkauft wurden.";
}elseif($page == "kontakt"){
    $content .= "kontakt.php";
    $title = "Kontakt";
    $description = "Für Fragen und Anregungen steht Ihne das Team von Schützenhofer GmbH gerne per E-Mail oder Telefon zu Verfügung.";
}else{
    $content .= "404.php";
    $title = "Upps, die Seite kann nicht gefunden werden!";
}

include('header.php');
include($content);
include('footer.php');

?>
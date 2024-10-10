<?php
require_once __DIR__ . '/classes/Movie.php';
$Smile = new Movie('Smile', 2022); 
$Smile->setGenre('Horror');
$Smile->setAuthor('Parker Finn');
$Smile->setTime('1h 55m');
$Smile->setDescription(`In un reparto psichiatrico, la psichiatra Rose Cotter incontra una paziente ricoverata di recente, Laura Weaver, una studentessa di dottorato che ha assistito al suicidio del suo professore, e che afferma di essere l'unica a vedere un'entità che finge di essere altre persone che le sorridono.`);

$TheRing= new Movie('The Ring', 2005); 
$TheRing->setGenre('Horror');
$TheRing->setAuthor('Hideo Nakata');
$TheRing->setTime('1h 50m');
$TheRing->setDescription(`Sei mesi dopo l'ultimo assassinio causato dalla videocassetta misteriosa, la giornalista Rachel Keller e suo figlio Aidan abbandonano la città di Seattle. Allo scopo di dimenticare l'incubo vissuto, la donna porta il bambino a vivere in una comunità nei pressi di Astoria, nell'Oregon. Ma la vendicativa Samara non ha messo da parte il proprio piano.`);

echo "<pre>";
var_dump($Smile);
var_dump($TheRing);
echo "</pre>";

?>
/**
 *
 *  bot de web scraping en php - bibliotheque Guzzle
 *
*/




<?php
require __DIR__ . '/vendor/autoload.php';
require('index.html');
session_start();
if($_SESSION){

}
$uri='https://exemple.fr';

// Utilisation d'une dépendance installée via Composer
use GuzzleHttp\Client;

$client = new Client();
$response = $client->get($uri);
echo $response->getBody();

?>
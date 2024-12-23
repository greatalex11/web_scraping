/*
 *  bot de web scraping en php - bibliotheque Guzzle 
 *
*/




<?php
require __DIR__ . '/vendor/autoload.php';
require('index.html');

use GuzzleHttp\Client;  // Utilisation d'une dépendance installée via Composer
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;


session_start();

/* Récupération de la Request dans le flux entrant */

        //phpinfo(); visualisation état de la config, curl enable?



$data = file_get_contents('php://input'); 
var_dump($data);
$uri= json_decode($data, true);

echo $uri;
if ($uri) {
    echo "data serveur:" + " " + $uri;
} else {
    echo "Aucune URI reçue.";
}

/* Gestion flux sortant avec CURL
   curl_setopt($ch, CURLOPT_POST,true);
  $http=curl_getinfo($ch,CURLINFO_HTTP_CODE);
echo $data;

$uri = $_POST['uri'] ?? null;

if ($uri) {
    echo "URI reçue via \$_POST : " . $uri;
} else {
    echo "zero.";
}
*/

// Gestion flux sortant avec GUZZLE //

?>
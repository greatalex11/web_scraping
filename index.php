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


//session_start();

/* Récupération de la Request dans le flux entrant */

        //phpinfo(); visualisation état de la config, curl enable?


        $data = file_get_contents('php://input'); // Récupération des données brutes
var_dump($data);
var_dump($_POST);
        //CONTROLES
        if (empty($data)) {
            echo 'Body reçu est vide';
            exit;
        }

        $decodedData = json_decode($data, true);

        if ($decodedData === null) {
            echo 'JSON invalide ou non décodé';
            exit;
        }

        echo 'Body reçu : ' . print_r($decodedData, true);



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo 'Requête POST reçue';
        } else {
            echo 'Méthode : ' . $_SERVER['REQUEST_METHOD'];
        }

        /* guzzle
        session_start();
        if($_SESSION){
        }
        $uri=$data;
        // Utilisation d'une dépendance installée via Composer

        $client = new Client();
        $response = $client->get($uri);
        echo $response->getBody();
        */


/*

       /* Décodage JSON
        $decodedData = json_decode($data, true); // true pour obtenir un tableau associatif
        
        if ($decodedData === null) {
            echo 'Erreur : données JSON invalides ou inexistantes';
            exit;
        }*/
        
        // Affichage pour diagnostic
        echo '<pre>'; // Formatage pour une meilleure lisibilité dans la console
        print_r($decodedData);
        echo '</pre>';

/*


$data = file_get_contents('php://input');
if ($data === false || empty($data)) {
    var_dump('pas de data transmise');
} else {
    echo "Données brutes reçues : " . $data;
}



$uri= json_decode($data, true);

if ($uri) {
    echo "data serveur:" . " " . $uri;
} else {
    echo "Aucune URI reçue.";
}*/

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


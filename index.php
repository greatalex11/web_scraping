<?php
require __DIR__ . '/vendor/autoload.php';
require('index.html');

/*
use GuzzleHttp\Client;  // Utilisation d'une dépendance installée via Composer
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
*/

//session_start();

        //phpinfo(); visualisation état de la config, curl enable?
       
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
        $content = trim(file_get_contents("php://input"));

        $data = json_decode($content, true);
        $data['success'] = true;
        
        echo json_encode($data);
        var_dump($content);
/*
        // Lire le corps de la requête
        $data = file_get_contents('php://input');
        var_dump($data); // Vérifiez ce qui est reçu
        
        // Décoder le JSON
        $json = json_decode($data, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo json_last_error_msg(); // Affiche l'erreur si le JSON n'est pas valide
            exit; // Arrête l'exécution si une erreur est détectée
        }
        
        // Vérifiez si les données sont présentes
        if (isset($json['uri'])) {
            $a = $json['uri']; // Accédez à la valeur 'uri'
        } else {
            $a = "Aucune donnée reçue";
        }
        
        // Préparer la réponse
        $result = array(
            "success" => true,
            "message" => $a,
            "bookingCode" => '1234567'
        );
        
        // Encoder la réponse en JSON et l'envoyer
        $output = json_encode($result);
        echo $output;
        var_dump($output);
        /* flux entrant par la méthode cURL */
       





      /*
       $data = file_get_contents('php://input');
       var_dump($data); // Cela doit afficher la chaîne JSON reçue
       

        
        $json = json_decode($data, true);
        var_dump($json);
       
        echo json_last_error_msg();
        */
      
        /* flux entrant par la méthode cURL */
        /*
        function curl_get_file_contents($url) {
            $c = curl_init();
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($c, CURLOPT_URL, $url);
            $contents = curl_exec($c);
            curl_close($c);
            
            return $contents ? $contents : false;
         }
        
        // Utilisation
        $data = json_decode(curl_get_file_contents('php://input'));
        var_dump($data);

        */

?>


<?php

//  $_SERVER = est une 'superkey' qui permet de récupérer les informations de 'POST' 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // 2 on récupère les données

                $name = $_POST["name"] ?? '';
                $age = $_POST["age"] ?? '';

                // 3 On valide les données
            $errors =[];
                if(empty($pseudo)){
                    $errors[] = "Votre Nom n'est pas renseigné";
                }
                if(empty($sujet)){
                    $errors[] = "Votre Âge n'est pas renseigné";

            }
            var_dump($errors);

            //  NETTOYER LES DONNÉES
            
              if (empty($errors)) {
            $name = htmlspecialchars(trim($name));
            $age = htmlspecialchars(trim($age));

            if (empty($errors)) {

                }else{
                    // j'affiche un message d'erreur
                    foreach($errors as $error) {                  
 
              }

        }
    }
}
?>
<?php

// var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    $errors = [];
    if (empty($name)) {
        $errors[] = "Veuillez remplir le champ nom";
    }
    if (empty($age)) {
        $errors [] = "Veuilez remplir le champ âge";
    }elseif($age < 18){
        $errors[] = "trop jeune mon coco!";
    }
    // var_dump($errors);

    if (empty($errors)){
            $name = htmlspecialchars(trim($name));
            $age = htmlspecialchars(trim($age));

            echo "super, tout est bon";
    }else{
        foreach ($errors as $error) {
            echo "$error <br>";
        }
        
    }




    }
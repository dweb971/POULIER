<?php 
print_r($_POST);
ini_set('display_errors',1);


$path = "https://".$_SERVER["HTTP_HOST"]."/";

spl_autoload_register(function ($name){
    echo "tentative de chargement de $name.\n";
    throw new Exception (" impossible de charger $name.");
});

try {
    //chargement des fichiers classe
    include "backend/InscriptionPersonne.php";

    // instanciation des classes 
$inscription = new InscriptionPersonne($_POST);
}

catch (Exception $e){
    echo $e->getMessage(),"\n";
}

$action = $_POST['action'];

if($action === 'rdv'){


    $patient = new Patient($_POST);
}

print_r($patient);

?>
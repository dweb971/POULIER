<?php
print_r($_POST);
ini_set('display_errors',1);


$path = "https://".$_SERVER["HTTP_HOST"]."/";
 //stock chemin nom domaine
spl_autoload_register(function ($name) {

    // role de autoloader charge class
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});
/*try {

     // chargement fichier classes
    include "backend/InscriptionPersonne.php";

    // instanciation des classes
     $inscription = new InscriptionPersonne($_POST);

    } 
    catch (Exception $e) {
        echo $e->getMessage(), "\n";
    }

 

*/

?>
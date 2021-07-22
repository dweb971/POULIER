<?php 
ini_set('display_errors', 1);

// autoloader
spl_autoload_register(function ($name) {
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});

try {
   // instanciation des classes
   include("../scripts/Connect.php");
   include("../scripts/Patient.php");
   include("classes/Backend.php");
   
   
   // creation obj PDO
   $db = new Connect();

   # classe Patient
   $patient = new Patient($db);
   $back = new Backend($db);

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

#recup name for login(connexion)
$form = isset($_POST["form"]) ? $_POST["form"] : "";

switch ($form) {
    case 'login':
        # verif email
        $back->login($_POST);
        break;
    
    default:
        # code...
        break;
}
<?php
 session_start();

if(!isset($_SESSION["nom"], $_SESSION["prenom"]))
{
    # redirection login
    // redirection
    /* Ceci produira une erreur. Notez la sortie ci-dessus,
    * qui se trouve avant l'appel à la fonction header() */
    header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/login.php');
    exit;


} else {

    # dashboard

 include("includes/header.php");  

 include("includes/sidebar.php"); 

 include("includes/main.php");  
 include("includes/footer.php"); 


} // end if

?>
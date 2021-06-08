<?php
/*


*/
class Connect{
    // proprietes
    public $host;
    public $user;
    public $password;
    public $db;
    public $DBConnect;
    public $pdo;

 //methodes 
 public function __construct()
{

//indiquer information fin de connection db
$this->host= 'localhost';
$this->user='karuconsult';
$this->password='karuconsult';
$this->db='karuconsult';
$this->DBConnect='karuconsult';

$this->instance_db($this->host, $this->db, $this->user, $this->password);

    }// fin construct

    public function instance_db($host, $db, $user, $pass)
    {
//instance PDO
/** 
 * dsn=Data Source Name
 * username=nom utilisayeur db 
 * password= mot de passe utilisateur db 
*/

try {
    //creation objet PDO avec propriete en parametre
    $this->pdo=new PDO('mysql:host='.$host.';dbname='.$db,$user, $pass); 
$this->pdo->exec('SET CHARACTER SET utf8');
$this->pdo->exec('SET NAMES utf8');
return$this->pdo; // retourner objet PDO

} catch (PDOExeption $event) {
    //lever une exception =  attraper une erreur et l'afficher 
    echo'ERREUR DE CONNEXION'.$event->getMessage(),$event->getCode();
}//fermeture pdo exception

    }//fin instance 4 parametre 

public function db_connexion()
{
// renvoie ou affiche le nom de la db 
return $this ->db;

}// fin db connexion 
}// fin class connect

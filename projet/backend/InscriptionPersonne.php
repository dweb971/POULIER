<?php 
 require 'vendor/autoload.php';
use \Mailjet\Resources;
class InscriptionPersonne{

    // déclaration d'une propriété 
    public $nom;
    public $prenom;
    public $telephone;
    public $email;
    public $adresse;
    public $complementadresse;
    public $codePostal;
    public $ville;
    public $pays;
    private $_password;

    public $message;





    // déclaration des méthodes 
    function __construct(array $datasForms){

        // test affichage 
        print_r($datasForms);  
    
        $this->nom = trim(htmlentities(strtoupper($datasForms["Nom"])));
        $this->prenom = trim(htmlentities(ucfirst($datasForms["Prenom"])));
        $this->telephone  = trim(htmlentities($datasForms["Telephone"]));
        $this->email = trim(htmlentities($datasForms["Email"]));
        $this->adresse  = trim(htmlentities($datasForms["Adresse"]));
        $this->complementadresse = trim(htmlentities($datasForms["ComplementAdresse"]));
        $this->codepostal = trim(htmlentities($datasForms["CodePostal"]));
        $this->ville = trim(htmlentities(ucfirst($datasForms["Ville"])));
        $this->pays = trim(htmlentities(strtoupper($datasForms["Pays"])));
        $this->password = trim(htmlentities($datasForms["Password"]));

        //$this->password = trim(htmlentities($datasForm["motDePasse"]));
        $this->email = trim(htmlentities($datasForms["Email"]));

        // appel setter password
        $this->set_password(trim(htmlentities($datasForms["Password"])));

        // afficher mot de passe
        $this->get_password();

        // executer envoyer_mail()
        $this->envoyer_mail();
    }


public function envoyer_mail(){
     /*
            - adresse expedition       (moi == le serveur)
            - adresse destination      $this->email
            - message                  $this->message 
            - titre message
            - nom                      $this->nom
            - prenom                   $this->prenom
        */
          // Le message
          $this->message = "Bonjour $this->nom $this->prenom, \r\n merci pour votre inscription.";

          // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
          $this->message = wordwrap($this->message, 70, "\r\n");
  
          // Envoi du mail
      /*    if( mail($this->email, 'Mon Sujet', $this->message) === true ){
              echo "Email envoyé à $this->email" ;
  
          } else {
              echo "Echec envoi email à $this->email";
  
          }*/
          $mj = new \Mailjet\Client('43a0e903af851f7c1707c6b4d63176dc','ab173ac7503d96d437ce708d45ea072f',true,['version' => 'v3.1']);
          $body = [
            'Messages' => [
              [
                'From' => [
                  'Email' => "webcontact@opti-web.fr",
                  'Name' => "Melanie POULIER"
                ],
                'To' => [
                  [
                    'Email' => "$this->email",
                    'Name' => "$this->nom $this->prenom"
                  ]
                ],
                'Subject' => "Bienvenue $this->nom $this->prenom.",
                'TextPart' => "$this->message",
                'HTMLPart' => "<p>$this->message</p>",
                'CustomID' => "AppGettingStartedTest"
              ]
            ]
          ];

          $response = $mj->post(Resources::$Email, ['body' => $body]);
          if( $response->success() === true ){
            echo "Email envoyé à $this->email avec Mailjet." ;

        } else {
            echo "Echec envoi email à $this->email";

        }

        }
// GETTER / SETTER

    /**
     * Get the value of _password
     */ 
    public function get_password()
    {
        return $this->_password;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */ 
    public function set_password($_password)
    {

        // crypter mot de passe
        $this->_password = password_hash($_password, PASSWORD_DEFAULT);

        return $this;
    }
} // fin classe



?>
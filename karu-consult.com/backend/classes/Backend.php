<?php 

#classe gestion admin medecin
class Backend
{
    # propriété variable 
    private $_email;
    private $_pass; 
    private $_DBConnect;




    # methode fonction 
    public function __construct($connectOBJ){

        
        // instance PDO
        $this->set_DBConnect($connectOBJ->pdo);
         
     }

    public function login(array $data){

        print_r($this->get_DBConnect());
        # test login
        //print_r($data);

        # securite data 
        $this->set_email($this->nettoyer(strtolower($data["email"])));
        $e= $this->get_email();
        
        $this->set_pass($this->nettoyer($data["password"]));
        $p = $this->get_pass();

       # find email on table user

       $reqS ="SELECT * FROM user WHERE email = '".$e."'";
       $req = $this->get_DBConnect()->prepare($reqS);
       $req->execute();

       # return PDOSTATEMENT 
       //print_r($req);
       $result = $req->fetch(PDO::FETCH_ASSOC);

       # TEST RESULT
       print_r($result);
    }

    public function genrate_pass(){
        $p = "abcdefghjklmnopqrstuvwxyzABCDEFGJKLMNOPQRSTUVWXYZ23456789@&=#";
        $p = str_shuffle($p);
        $pP = str_split($p, 11);
        $index = rand(0, 4);

        $password = $pP
    }


    public function nettoyer($chaine){

        // securite
        $chaine = trim(strip_tags($chaine));
        return $chaine;

    }

  



    # getter/setter
    
    
    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get the value of _pass
     */ 
    public function get_pass()
    {
        return $this->_pass;
    }

    /**
     * Set the value of _pass
     *
     * @return  self
     */ 
    public function set_pass($_pass)
    {
        $this->_pass = $_pass;

        return $this;
    }

    /**
     * Get the value of _DBConnect
     */ 
    public function get_DBConnect()
    {
        return $this->_DBConnect;
    }

    /**
     * Set the value of _DBConnect
     *
     * @return  self
     */ 
    public function set_DBConnect($_DBConnect)
    {
        $this->_DBConnect = $_DBConnect;

        return $this;
    }
}
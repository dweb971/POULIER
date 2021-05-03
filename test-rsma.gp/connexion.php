<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
    <title>RSMA</title>
  </head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="img/LogoRmsa.png" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>PAGE DE CONNEXION</h1>
        </div>
    </div>
</div>

    <div class="container formul">
        <div class="row">
            <div class="col-12">
                <form method="POST" action='<?php echo "https://".$_SERVER["HTTP_HOST"]."/traitement.php";?>' novalidate>
                    
                    <div class="col-sm-3">                      
                      <input type="email" class="form-control" id="iden" aria-describedby="emailHelp" name="" value="" placeholder="Identifiant"  required>
                      <div class="valid-feedback">
                Merci!
            </div>
            <div class="invalid-feedback">
                Merci d'indiquer votre Identifiant !!!
            </div>       
                    </div>

                    <div class="col-sm-3">
                    <input type="password" id=mdpFrm name="mdpconfirm" class="form-control" placeholder="Password" aria-describedby="pwdHelpBlock"/>
                    </div>
                    
                    <div class="form-group form-check mdp">
                     <a href="http://">Mot de passe oublié ?</a>
                    </div>

                  </form>
            </div>
        </div>
    </div>

    <div class="container bout">
        <div class="row">
            <div class="col-12">
                
                 <button type="submit" class="btn btn-primary" ><a href="exercice.php">Se connecter</a> </button>
                
            </div>
        </div>
    </div>

   <footer>
       <img class="sen" src="img/sengager.png" alt="">
       <img class="dra" src="img/drapeaueurope.png" alt="">
   </footer>
   <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

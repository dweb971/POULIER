<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
       <div class="row">
           <div class="col-3">

           </div>
           <div class="col-3">
           <form method="POST" action="traitement.php" class="needs-validation" novalidate >
           <form id="inscription">     
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                            </label>
                        <div class="col-sm-10">
                            <input type="text" name="Nom" class="form-control border" id="nomFrm" 
                                value="" placeholder="Nom" required >
                                <div class="valid-feedback">
        Looks good!
      </div>   
      <div class="invalid-feedback">
        Indiquez votre nom.
      </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="Prenom" class="form-control border" id="prmFrm" 
                                value="" placeholder="Prenom" required>
                                <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Indiquez votre prénom.
      </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                            </label>
                        <div class="col-sm-10">
                            <input type="text" name="Telephone" class="form-control border" id="telFrm" 
                                value="" placeholder="Telephone"  >
                               
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2
                            col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="email" name="Email" class="form-control border"
                                id="mailFrm" value="" 
                                placeholder=" Email" required>
                                <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Indiquez votre email.
      </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                            </label>
                        <div class="col-sm-10">
                            <input type="text" name="Adresse" class="form-control border" id="adresseFrm" 
                                value="" placeholder="Adresse" required >
                                <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
       Indiquez votre adresse.
      </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                            </label>
                        <div class="col-sm-10">
                            <input type="text" name="ComplementaireAdresse" class="form-control border" id="compleFrm" 
                                value="" placeholder="Complementaire Adresse"  >
                               
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="CodePostal" class="form-control border" id="cpFrm" 
                                value="" placeholder="Code Postal" required >
                                <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Indiquez votre code postal.
      </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="Ville" class="form-control border" id="villeFrm" 
                                value="" placeholder="Ville" required >
                                <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Indiquez votre ville
      </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="Pays" class="form-control border" id="paysFrm" 
                                value="" placeholder="Pays" required>
                                <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Indiquez votre pays.
      </div>
                        </div>
                    </div>
                      <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">
                        </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control border" id="mdpFrm" placeholder="Password" value="" required>
                            <input type="password" id="mdpconfirm" name="mdpconfirm" class="form-control" placeholder="Password" aria-describedby="pwdHelpBlock"/>
<button type="button" class="eye" style="color:#FFF;background-color:#556b2f" onclick="togglePwd('mdpconfirm');"><i class="far fa-eye"></i></button>
                            <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
       Indiquez votre mot de passe.
      </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Submit form</button>
                      </form>  
                  </form>

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

  "use strict";
function togglePwd(id)
{
  var x = document.getElementById(id);
  x.type = (x.type === "password")? "text" : "password";
}
</script>
           </div>
           <div class="col-3">

           </div>
       </div>
   </div>

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

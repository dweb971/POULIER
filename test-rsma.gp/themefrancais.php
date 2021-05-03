<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice de Français</title>
</head>

<body>
    <h1>FRANÇAIS</h1>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/LogoRmsa.png" alt="">
            </div>
            <div class="col-4">
                <p>FRANC</p>
                <HTML>

<HEAD>
 <META HTTP-EQUIV="Content-Language" CONTENT="fr">
 <META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=iso-8859-1">
 <TITLE>Exemples de texte à trous</TITLE>
 <SCRIPT LANGUAGE="JavaScript">
  function erreurl(numliste) {
   laliste=eval("form1.liste"+numliste);
   return laliste[laliste.selectedIndex].value; 
  }
  
  function message(erreurs) {
   if (erreurs==0) alert('Bravo, aucune erreur !');
   else if (erreurs==1) alert('Tu as fait une erreur !');
   else alert('Tu as fait '+erreurs+' erreurs !');
  }
  
  function verif1() {
   erreurs=0;
   for (i=1; i<=2; i++) {
    erreurs+=eval(erreurl(i));
   }
   message(erreurs);
  } 
  
  function verif2() {
   erreurs=0;
   if (form2.rep1.value!="rectangle") erreurs++;
   if (form2.rep2.value!="180") erreurs++;
   message(erreurs);
  }
 </SCRIPT>
</HEAD>

<BODY>
<H1>Exemples de textes à trous</H1>
<P><BR></P>

<H2>Compléter en choisissant un mot dans une liste</H2>
<FORM NAME="form1">
<BLOCKQUOTE><OL>
<LI>
On appelle triangle
<SELECT NAME="liste1" SIZE=1>
<OPTION VALUE=1>équilatéral</OPTION>
<OPTION VALUE=0>isocèle</OPTION>
<OPTION VALUE=1>rectangle</OPTION>
<OPTION VALUE=1>scalène</OPTION>
</SELECT>
un triangle qui a deux côtés de même longueur.
<BR><BR>
</LI>
<LI>
On appelle 
<SELECT NAME="liste2" SIZE=1>
<OPTION VALUE=1>bissectrice</OPTION>
<OPTION VALUE=1>hauteur</OPTION>
<OPTION VALUE=0>médiane</OPTION>
<OPTION VALUE=1>médiatrice</OPTION>
</SELECT>
d'un triangle une droite qui passe par un sommet et le
milieu du côté opposé.
</LI>
</OL></BLOCKQUOTE>
<BR>
<DIV ALIGN=right>
<INPUT TYPE=button VALUE="Vérifier" ONCLICK="verif1()"></INPUT> 
</DIV>
</FORM>
<P><BR></P>

<H2>Compléter en écrivant un mot</H2>
<FORM NAME="form2">
<BLOCKQUOTE><OL>
<LI>
On appelle triangle 
<INPUT NAME="rep1" TYPE=text SIZE=12 MAXLENGTH=12></INPUT>
, un triangle qui a un angle droit.
</LI>
<LI>
La somme des 3 angles d'un triangle est égale à
<INPUT NAME="rep2" TYPE=text SIZE=5 MAXLENGTH=5></INPUT>
degrés.
</LI>
</OL></BLOCKQUOTE>
<BR>
<DIV ALIGN=right>
<INPUT TYPE=button VALUE="Vérifier" ONCLICK="verif2()"></INPUT> 
</DIV>
</FORM>

</BODY>
</HTML>
            </div>
            <div class="col-4">
                sidebar
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                tableau
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="sen" src="img/sengager.png" alt="">
            </div>
            <div class="col-6">
                <img class="dra" src="img/drapeaueurope.png" alt="">
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
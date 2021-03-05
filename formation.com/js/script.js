/* ecouteur */

let bouton = document.getElementById("signIn");
bouton.addEventListener("click", function (e) {
    console.log(e);

    // Récupération text HTML
    
    let nom = document.getElementById('nomFrm');
    let email = document.getElementById('mailFrm');
    let count = document.getElementById('countryFrm');
    let stat = document.getElementById('stateFrm');
    let code = document.getElementById('mdpFrm');

    if (nom.value == "") {
        nom.classList.add('errorBG');
        nom.parentNode.children[1].classList.add('on');
        nom.parentNode.children[1].classList.remove('off');
    }
    else {
        nom.classList.remove('errorBG');
        nom.parentNode.children[1].classList.remove('on');
        nom.parentNode.children[1].classList.add('off');
    }

    if (email.value == "") {
        email.classList.add('errorBG');
        email.parentNode.children[1].classList.add('on');
        email.parentNode.children[1].classList.remove('off');
    }
    else {
        email.classList.remove('errorBG');
        email.parentNode.children[1].classList.remove('on');
        email.parentNode.children[1].classList.add('off');
    }

    if (count.value == "") {
        count.classList.add('errorBG');
        count.parentNode.children[1].classList.add('on');
        count.parentNode.children[1].classList.remove('off');
    }
    else {
        count.classList.remove('errorBG');
        count.parentNode.children[1].classList.remove('on');
        count.parentNode.children[1].classList.add('off');
    }

    if (stat.value == "") {
        stat.classList.add('errorBG');
        stat.parentNode.children[1].classList.add('on');
        stat.parentNode.children[1].classList.remove('off');
    }
    else {
        stat.classList.remove('errorBG');
        stat.parentNode.children[1].classList.remove('on');
        stat.parentNode.children[1].classList.add('off');
    }

    if (code.value == "") {
        code.classList.add('errorBG');
        code.parentNode.children[1].classList.add('on');
        code.parentNode.children[1].classList.remove('off');
    }
    else {
       code.classList.remove('errorBG');
       code.parentNode.children[1].classList.remove('on');
       code.parentNode.children[1].classList.add('off');
    }


});



let clavier = document.getElementById("inscription");
clavier.addEventListener('keydown', function (j) {
console.log(j);
    // Récupération text HTML


    let erreurNom = document.getElementById('erreurNom')
    
    let nom = document.getElementById('nomFrm');
    let email = document.getElementById('mailFrm');
    let count = document.getElementById('countryFrm');
    let stat = document.getElementById('stateFrm');
    let code = document.getElementById('mdpFrm');


    if(nom.value!=""){
        
        erreurNom.classList.add('off');

     }
    
});
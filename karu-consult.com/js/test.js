 /* let tableau=[11,12,13,14,15,16,17];
    let ligne=document.getElementById('cell');
    let nbrTab=ligne.cells.length;
    console.log(tableau);
    /*let cels = ligne.cells;
    console.log(cels);
    let nbrcels =cell.cels.length;*/
   /*for(let i=0; i<nbrTab ;i++){
    //ligne.cells[i].innerHTML= i;
      for(let n =0; n<nbrTab;n++){
          ligne.cells[n].innerHTML=tableau[n];

          const date= new Date ();
      const jour= date.getDate ();
      console.log(jour);

      if (jour== tableau[n]) {
            ligne.cells[n].className= "date_jour";
          } 
          else {
            ligne.cells[n].className= "";
          }
          
      }
      
        } 
         

      

    
   /* 
    console.log(date);
    const jour= date.getDate ();
    console.log(jour);*/

   /*let mois=['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'];
     console.table(mois);
    let jourmois=[31,28,31,30,31,30,31,31,30,31,30,31];
    let joursemaine=['lun','mar','mer','jeu','ven','sam','dim'];

   let selectedM=document.getElementById('selectedM');
   console.log(selectedM);
      
    let nbrOption=selectedM.length;
    for(let i=0;i<nbrOption; i++){
  console.log(selectedM[i].innerHTML);
    }  


    function AfficherIndex() {
     let titreH1 = document.getElementById("titreH1");
     
     let selectedM = document.getElementById("selectedM");
     let index = selectedM.selectedIndex;

     titreH1.innerHTML = selectedM[index].innerHTML;
    
    }
    let nom = document.getElementById('nm');
    let prenom = document.getElementById('prm');

    let valFrm=document.getElementById('valFrm');
    valFrm.addEventListener("click", function(event) {
     console.log(event);

     let civ = document.getElementById('civFrm');
     let tel = document.getElementById('telFrm');
     let visite = document.getElementById('visiteFrm');
     rdv(civ, nom, prenom, tel, visite);

     
} );
    
    
    function rdv(civ, nom, prenom, tel, visite){
        let civM = civ.value;
        let nomM = nom.value;
        let prenomM = prenom.value;
        let telM = tel.value;
        let visiteM = visite.value;
      
        /*test d'affichage*/
       /*alert("voici mes coordonnées : "+nomM+" "+prenomM);*/
       
    /*   if (civM=="Sélectionner"){
      civ.classList.add('errorBG');
     }
     else {
      civ.classList.remove('errorBG');
     }
     if (nomM=='') {
       nom.classList.add('errorBG');
       nom.parentNode.children[1].classList.add('on');
       nom.parentNode.children[1].classList.remove('off');
    }
    else{
        nom.classList.remove('errorBG');
        nom.parentNode.children[1].classList.remove('on');
        nom.parentNode.children[1].classList.add('off');
    }
    if (prenomM=='') {
       prenom.classList.add('errorBG');
       prenom.parentNode.children[1].classList.add('on');
       prenom.parentNode.children[1].classList.remove('off');
    }
    else{
        prenom.classList.remove('errorBG')
        prenom.parentNode.children[1].classList.remove('on');
        prenom.parentNode.children[1].classList.add('off');
    }
    if (telM=='') {
        tel.classList.add('errorBG');
        tel.parentNode.children[1].classList.add('on');
        tel.parentNode.children[1].classList.remove('off');
    }
    else{
        tel.classList.remove('errorBG')
        tel.parentNode.children[1].classList.remove('on');
        tel.parentNode.children[1].classList.add('off');
    }
    if (visiteM=='Motif') {
        visite.classList.add('errorBG');
        visite.parentNode.children[1].classList.add('on');
        visite.parentNode.children[1].classList.remove('off');
    }
    else{
        visite.classList.remove('errorBG')
        visite.parentNode.children[1].classList.remove('on');
        visite.parentNode.children[1].classList.add('off');
    }
    }
    */
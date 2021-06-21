document.addEventListener('DOMContentLoaded', function() {
    
    // mois en cours
    let dateA = new Date();
    let moisA = dateA.getMonth();

    // tout les mois pour recuperer index
    let fullMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    for(let m=0; m < fullMois.length; m++){
        if( m === moisA){
            calendrier(fullMois[m], dateA.getFullYear());
            document.getElementById("selectedM").selectedIndex = moisA;

            // date du jour
            let jourA = dateA.getDate();

        }

    }

});


// ecouteur
const selectedM = document.getElementById("selectedM");
selectedM.addEventListener("change", function () {

    // index mois selectionne
    let indexMoisSelect = selectedM.selectedIndex;
    let mois = selectedM[indexMoisSelect].innerHTML;

    // cree une date et obtenir l'annee en cours
    let annee = new Date();

    // exexuter function calendrier
    calendrier(mois, annee.getFullYear());

});



// my calendar
function calendrier(mois, annee) {

    /* comment calculer annee bissextille
    tt les 4 ans à partir de 2020
    
    */
   //let bissextille = [2020, 2024, 2028, 2032, 2036, 2040, 2044, 2048, 2052];
   let bissextille = [2020];
   let lastYears = "";

   //console.log(agenda.rows[1].cells.length);

   /* console.log(bissextille);
    bissextille.push(2020);
    console.log(bissextille);
    bissextille.push(2024);
    console.log(bissextille);*/

   for (let b = 0; b < bissextille.length; b++) {

       if (b != 20) {
           bissextille.push(bissextille[b] + 4);
           //console.log(bissextille);
       }
   }

    let nbrJourMois;
    let agenda = document.getElementById("agenda");
    let nbrRows = agenda.rows.length;

    //console.log(agenda.rows[1].cells.length);

    let firtDay = "";


    switch (mois) {
        case "Janvier":
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 0, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Février":
            //console.log(lastYears);

            if (lastYears == annee) {
                nbrJourMois = 29;
            } else {
                nbrJourMois = 28;
            }
            //nbrJourMois = 28;
            firtDay = new Date(Date.UTC(annee, 1, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Mars":
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 2, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Avril":
            nbrJourMois = 30;
            firtDay = new Date(Date.UTC(annee, 3, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Mai":
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 4, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Juin":
            nbrJourMois = 30;
            firtDay = new Date(Date.UTC(annee, 5, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Juillet":
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 6, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Août":
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 7, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Septembre":
            nbrJourMois = 30;
            firtDay = new Date(Date.UTC(annee, 8, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Octobre":
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 9, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        case "Novembre":
            nbrJourMois = 30;
            firtDay = new Date(Date.UTC(annee, 10, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

        default:
            nbrJourMois = 31;
            firtDay = new Date(Date.UTC(annee, 11, 1, 4, 0, 0, 0));
            tableauHTML(nbrRows, agenda, nbrJourMois, firtDay);
            break;

    }



}

//  changer nom varaible tableauHTML
function tableauHTML(rowS, tableauHTML, nbrJourMois, firtDay) {
    // boucle sur tableau html pour avoir trs et th et tds

    // compteur de jour
    let j=0;

    for (let i = 0; i < rowS; i++) {

        let nbrCells = tableauHTML.rows[i].cells.length;

        for (let t = 0; t < nbrCells; t++) {

            if (i != 0) {

                if (firtDay.getDay() === 0) {  // dimanche

                    // tr 1
                    if (i == 1) {

                        j++;  // laisser obligatoirement
                        if(t <= 5){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");  // condition pour case vide
                        }

                        if (t == 6) {
                            // increment j=1 pour depart
                            j=1;
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                    }
                }

                if (firtDay.getDay() === 1) {  // lundi
                    // tr 1
                    if (i == 1) {

                        j++;
                        ecritureTableau(t, j, tableauHTML.rows[i].cells[t], nbrJourMois);
                    }
                }

                if (firtDay.getDay() === 2) {  // mardi
                    // tr 1
                    if (i == 1) {

                        j++;
                        if (t == 0) {

                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");
                        }

                        if (t == 1) {
                            j=1;
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                        if( t > 1){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois); // condition pour case pleine
                        }

                        /*
                        if (t == 2) {
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                        if (t == 3) {
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                        if (t == 4) {
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                        if (t == 5) {
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                        if (t == 6) {
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                        */

                    }
                }

                if (firtDay.getDay() === 3) {  // mercredi
                    // tr 1
                    if (i == 1) {

                        j++;
                        if (t == 0) {

                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");
                        }

                        if (t == 1) {

                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");
                        }
                        
                        
                        if (t == 2) {
                            j=1;
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                        if( t > 2){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                     

                    }

                }

                if (firtDay.getDay() === 4) {  // jeudi
                    // tr 1
                    if (i == 1) {

                        j++;
                        if(t <= 2){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");
                        }

                        if (t == 3) {
                            j=1;
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }
                        if( t > 3){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }


                    }

                }

                if (firtDay.getDay() === 5) {  // vendredi
                    // tr 1
                    if (i == 1) {

                        j++;
                        if(t <= 3){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");
                        }

                        if (t == 4) {
                            j=1;
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                        if( t > 4){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                    }
                }

                if (firtDay.getDay() === 6) {  // samedi
                    // tr 1
                    if (i == 1) {

                        j++;
                        if(t <= 4){
                            ecritureJour(j, tableauHTML.rows[i].cells[t], "");
                        }
                        
                        if (t == 5) {
                            j=1;
                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                        if (t == 6) {

                            ecritureJour(j, tableauHTML.rows[i].cells[t], nbrJourMois);
                        }

                    }
                }

                // tr 2
                if (i == 2) {

                    j++;
                    ecritureTableau(t, j, tableauHTML.rows[i].cells[t], nbrJourMois);  // ecriture toutes les cases tableauHTML

                }

                // tr 3
                if (i == 3) {

                    j++;
                    ecritureTableau(t, j, tableauHTML.rows[i].cells[t], nbrJourMois);

                }

                // tr 4
                if (i == 4) {

                    j++;
                    ecritureTableau(t, j, tableauHTML.rows[i].cells[t], nbrJourMois);

                }

                // tr 5
                if (i == 5) {

                    j++;
                    ecritureTableau(t, j, tableauHTML.rows[i].cells[t], nbrJourMois);

                }

            }

        }

    }
}


function ecritureJour(jour, cellule, jourMois) {
    //cellule.innerHTML = jour;

    if (jour > jourMois) {
        cellule.innerHTML = "";
    } else {
        cellule.innerHTML = jour;
    }

}




function ecritureTableau(t, j, tableauHTML, nbrJourMois){
    
    // toutes les colonnes du lundi au dimanche inclus
    if (t == 0) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }

    if (t == 1) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }

    if (t == 2) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }

    if (t == 3) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }

    if (t == 4) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }

    if (t == 5) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }

    if (t == 6) {

        ecritureJour(j, tableauHTML, nbrJourMois);
    }
}


function selectJourSemaine(day) {
    var options = { weekday: 'long' };
    //console.log(new Intl.DateTimeFormat('fr-FR', options).format(day));

    // console.log(day.getDay());
}
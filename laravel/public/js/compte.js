// selectionner l'espace ou mettre la section togglé
let register_business = document.getElementById('register_business');

// selectionner la section qu'on toggle
let business_section = document.getElementById('business_section')

// selectionner les 2 boutons
let radioBusiness = document.getElementById('business');
let radioPersonnel = document.getElementById('personnel');

// selectionner la liste des boutons radio
const radioButtons = document.querySelectorAll(".input_check_account")

// mettre personnel par defaut
// radioPersonnel.checked = "true";
// register_business.removeChild(business_section);
if (typeof radioButtons[0] !== 'undefined') {
    radioButtons[0].checked="true";
    register_business.removeChild(business_section);
}

// selectionner les 2 inputs
let entreprise_name = document.getElementById('entreprise_name');
let tva_number = document.getElementById('tva_number');

// si bouton business selectionné, enlever class hidden et ajouter attribut required aux inputs
radioBusiness.addEventListener("change", () => {
    if(radioBusiness.checked) {
       // toggle hidden
       register_business.appendChild(business_section);
    }
});

//  si bouton business selectionné, ajouter class hidden et enlever attribut required aux inputs
radioPersonnel.addEventListener("change", () => {
    if(radioPersonnel.checked) {
       // toggle hidden
       register_business.removeChild(business_section);
    }
});




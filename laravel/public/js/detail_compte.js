function changeClassB1() { 
    document.getElementById('button_option_info').className = "button_account_option button_account_select"; 
    document.getElementById('button_option_paiement').className = "button_account_option"
    document.getElementById('button_option_commandes').className = "button_account_option"

    document.getElementById('display_account_section').className = "display_flex_row"
    document.getElementById('display_commandes').className = "hidden"
    document.getElementById('display_mode_paiement').className = "hidden"
    
}
function changeClassB2() { 
    document.getElementById('button_option_info').className = "button_account_option"; 
    document.getElementById('button_option_paiement').className = "button_account_option"
    document.getElementById('button_option_commandes').className = "button_account_option button_account_select"

    document.getElementById('display_account_section').className = "display_flex_row hidden"
    document.getElementById('display_commandes').className = ""
    document.getElementById('display_mode_paiement').className = "hidden"
}
function changeClassB3() { 
    document.getElementById('button_option_info').className = "button_account_option"; 
    document.getElementById('button_option_paiement').className = "button_account_option button_account_select"
    document.getElementById('button_option_commandes').className = "button_account_option"

    document.getElementById('display_account_section').className = "display_flex_row hidden"
    document.getElementById('display_commandes').className = "hidden"
    document.getElementById('display_mode_paiement').className = ""
}

let table_commande = document.querySelector(("#table_commande"));

if(table_commande){
    let liste_btn = document.querySelectorAll(".btn_detail_commande");
    let liste_div = document.querySelectorAll(".display_detail_commande")
    let list_cross = document.querySelectorAll(".cross_out_detail")
    for(let btn of liste_btn){
        btn.addEventListener('click', function() {
            let commande = "commande_" + String(btn.id)

            liste_div.forEach(function(element){
                element.classList.add('visible')
            })
            document.getElementById(commande).classList.remove('visible')            
        });
    }
    for(let cross of list_cross){
        cross.addEventListener('click', function() {
            liste_div.forEach(function(element){
                element.classList.add('visible')
            })
        })
    }
}

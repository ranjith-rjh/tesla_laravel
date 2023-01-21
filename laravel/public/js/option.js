let choix_option = document.querySelectorAll(".configuration_choix_cercle")
let nom_option = document.querySelector(".nom_option")
let cout_option = document.querySelector(".cout_option")
let description_option = document.querySelector(".description_option")
let lien = document.querySelector(".lien_suivant")

// choix_option[0].classList.toggle('configuration_choix_cercle_select')

choix_option.forEach(function(button){
    button.addEventListener("click", function(){
        var option_libelle = button.id.split('_')[1]
        var option_cout = button.id.split('_')[2]
        var option_description = button.id.split('_')[3]
        // console.log(option_libelle)
        // console.log(option_cout)
        // console.log(option_description)
        
        lien.href = "./"+button.id.split('_')[5]+"/"+button.id.split('_')[4]+"/"
        //console.log(lien.href)


        nom_option.textContent = option_libelle

        if (option_cout == "0"){
            cout_option.textContent = "De série"
        }else{
            cout_option.textContent = option_cout+" €"
        }

        description_option.textContent = option_description

        choix_option.forEach(function(cercle){
            cercle.classList.remove('configuration_choix_cercle_select')
        })
        button.classList.toggle('configuration_choix_cercle_select')
    })
})
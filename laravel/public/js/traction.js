let btnTraction = document.querySelector("#btn_config_prendre_traction")
let btnNextNull = document.querySelector("#btn_config_suivant_no_traction")
let btnNext = document.querySelector("#btn_config_suivant_traction")



if (btnTraction){
    btnNext.classList.add("hidden");
    btnTraction.innerHTML="Ajouter à la configuration"
    
    btnTraction.addEventListener("click",function(){
        btnTraction.classList.toggle("isSuppr")
        if (btnTraction.classList.value=="isSuppr")
        {
            btnTraction.innerHTML="Supprimer de la configuration"
            btnNext.classList.remove("hidden");
            btnNextNull.classList.add("hidden");
        }
        else
        {
            btnTraction.innerHTML="Ajouter à la configuration"
            btnNextNull.classList.remove("hidden");
            btnNext.classList.add("hidden");
        }
        //console.log(btnTraction.classList.value)
    })
}
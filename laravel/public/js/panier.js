console.log("aa")

let grosseDiv = document.getElementById("grosse_div_margined_panier");
let labPrix = document.querySelectorAll(".label_prix_panier");

//get infos
// let panier = "<?php echo $_SESSION['infosPanier'] ?>"
// console.log(panier)

//mes quantités
let inputs = document.querySelectorAll("input");
inputs.forEach(function(input){
    input.addEventListener("input",function(e){
        let newVal =e.target.value 
        

        labPrix.forEach(function(p){
            if (p.id==input.id){
                p.innerHTML="Prix : "+newVal
            }
        })
    })
})

//boutons suppr
let boutons = grosseDiv.querySelectorAll('button')
boutons.forEach(function(bouton){
    bouton.addEventListener("click",function(){
        console.log("click")
    })
})




let bouton = document.querySelectorAll(".slider_display_button button")
let images = document.querySelectorAll(".slider_display_info_image img")
let caracteristiques = document.querySelectorAll(".slider_display_info_cara")


images[0].classList.toggle("visible")
caracteristiques[0].classList.toggle("visible")
bouton[0].classList.toggle("button_config_clique")
//console.log(libjoli)

bouton.forEach(function(button){
    button.addEventListener("click", function(){
        
        bouton.forEach(function(element){
            element.classList.remove('button_config_clique')
        })
        button.classList.toggle('button_config_clique')
        
        model = button.id.split('_')[1]

        images.forEach(function(element){
            element.classList.add('visible')
        })
        caracteristiques.forEach(function(element){
            element.classList.add('visible')
        })
        
        document.getElementById('image_'+model).classList.remove('visible')

        document.getElementById('caracteristique_'+model).classList.remove('visible')

    })
})



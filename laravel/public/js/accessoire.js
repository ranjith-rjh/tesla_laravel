
let choix_style = document.querySelectorAll(".style_option")
let container_images = document.querySelector(".styles_images_slide")
let commande_accessoire = document.querySelector('.commande_accessoire')

let index_debut = choix_style[0].id.split('_')[2]


// console.log(choix_style[0].id.split('_')[2])
// console.log("testtt")

choix_style[0].classList.toggle('style_option_selected')


// console.log(document.cookie)
document.cookie = 'style_selected=; expires=Thu, 01 Jan 1970 00:00:00 UTC'
// console.log("suppr")
// console.log(document.cookie)
setCookie("style_selected", choix_style[0].id.split('_')[2])
// console.log("added")
// console.log(document.cookie)
container_images.children[0].classList.remove('visible')


// console.log(getCookieStock())
// console.log("aa")
// console.log(choix_style[0])

if( getCookieStock() == 0){
    let message = document.createElement('p')
    message.innerText = "Ce produit n'est plus disponible"
    message.id = "message_stock_vide"
    commande_accessoire.appendChild(message)
    document.getElementById('button_commander_accessoire').classList.add('visible')
}


//max val
let maxVal = getCookieStock()
let monInput = document.getElementById('input_commander_accessoire')
monInput.setAttribute("max",maxVal)

choix_style.forEach(function(choix){
    
    choix.addEventListener('click',function(){
        if( document.getElementById('message_stock_vide') != null ){
            document.getElementById('message_stock_vide').remove()
            document.getElementById('button_commander_accessoire').classList.remove('visible')
        }
        document.cookie = 'style_selected=; expires=Thu, 01 Jan 1970 00:00:00 UTC'
        setCookie("style_selected", choix.id.split('_')[2])
        // console.log("test",choix.id.split('_')[2])
        choix_style.forEach(function(__choix){
            __choix.classList.remove('style_option_selected')
        })
        choix.classList.add('style_option_selected')

        for(const child of container_images.children){
            child.classList.add('visible')
        }

        // console.log(choix.id.split('_')[2]-index_debut)

        container_images.children[choix.id.split('_')[2]-index_debut].classList.remove('visible')
        
    
        if( getCookieStock() == 0){
            let message = document.createElement('p')
            message.innerText = "Ce produit n'est plus disponible"
            message.id = "message_stock_vide"
            commande_accessoire.appendChild(message)
            document.getElementById('button_commander_accessoire').classList.add('visible')
        }

        //max val
        let maxVal = getCookieStock()
        let monInput = document.getElementById('input_commander_accessoire')
        monInput.setAttribute("max",maxVal)
    })
})



let input_commande = document.getElementById('input_commander_accessoire')
input_commande.addEventListener('focusout', function(){
    let stock = getCookieStock()
    // console.log(stock)
    if (stock < input_commande.value){
        let message = document.createElement('p')
        message.innerText = "Cette quantité n'est pas disponible"
        commande_accessoire.appendChild(message)
        setTimeout(() => {
            message.remove()
        }, 1000);
    }
})





function getCookieStock(){
    let cookie = {}
    document.cookie.split(';').forEach(function(element){
        let [key,value] = element.split('=');
        cookie[key.trim()] = value;
    })
    
    let style = cookie['style_selected']
    // console.log(style)
    
    return cookie['stock'+style]
}

function setCookie(name, value){
    // console.log(name)
    // console.log(value)
    // console.log(name + "=" + value +";path=/")
    document.cookie = name + "=" + value +";path=/"
}

document.getElementById('button_commander_accessoire').addEventListener("click",function(){
    let value = document.getElementById('input_commander_accessoire').value
    setCookie("amount_selected",value)
})
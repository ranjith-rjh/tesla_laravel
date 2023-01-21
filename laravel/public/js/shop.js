let categories = document.querySelectorAll(".select_type")
//let sub_categorie = categories.childNodes

categories.forEach(function(categorie){
    categorie.firstElementChild.addEventListener('click', function(){
        categorie.lastElementChild.classList.toggle("visible")
    })

})


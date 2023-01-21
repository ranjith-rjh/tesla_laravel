//console.log ("hello");

var requestUrl='https://api-adresse.data.gouv.fr/search/?q=';
var address;


let search = document.getElementById("input");

// search.onkeydown = print();

// function print(){
//     address = document.getElementById("rue").value;
//     show();
// }




search.addEventListener("input",function(){
    address = document.getElementById("input").value;
    if (verify(address))
        show();
})

function verify(address){
    if (address.length >= 4)
        return true;
}

function show(){
    fetch (setQuery(address))
        .then(function (response){
            response.json().then(function (datas){
                let parent = document.getElementById("toWriteAddresses");
                parent.innerHTML = ""
                let id=0;

                datas.features.forEach(function (data){
                    id++;

                    let myDiv = document.createElement("div");
                    myDiv.innerHTML= data.properties.label
                    parent.appendChild(myDiv);

                    myDiv.addEventListener("click",function(){
                        document.getElementById("rue").value = data.properties.name;
                        document.getElementById("ville").value =  data.properties.city;
                        document.getElementById("codePostal").value =  data.properties.postcode;
                        document.getElementById("pays").value = 'France';
                        parent.innerHTML = "";
                    })
                });
                
                
    
            })
        })
}


function setQuery(value)
{
    return requestUrl+value;
}

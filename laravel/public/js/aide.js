let helpBtn = document.querySelector(".div_petit_bandeau_aide");
let helpDiv=document.querySelector(".div_bandeau_aide")
let petiteHelpDiv = document.querySelector(".div_bandeau_aide_content")

// console.log("actual",getActualPage());
// console.log("old",getOldPage());
// console.log(getCookieHelp())
// console.log(getCookieTest())
// let actual = getActualPage();
// let old = getOldPage();

let titles = document.querySelectorAll(".div_groupe_text_aide")
titles.forEach(function(title){
    title.children[0].addEventListener("click",function(){
        title.children[1].classList.toggle("displayedNone")
    })

})


//check if help already opened
// if (getCookieHelp()=='true' && actual===old){
if (getCookieHelp()=='true'){
    // console.log("grand")
    helpDiv.classList.add("agrandi")
    petiteHelpDiv.classList.remove("displayedNone")
}else{
    // console.log("petit")
    helpDiv.classList.remove("agrandi")
    petiteHelpDiv.classList.add("displayedNone")

}

// console.log("helpBtn")
helpBtn.addEventListener("click",function(){
    //test
    // document.cookie = 'test=ddddd;path=/'
    // console.log("caca")


    helpDiv.classList.toggle("agrandi")
    petiteHelpDiv.classList.toggle("displayedNone")

    //check if opened
    let isFound=false;
    helpDiv.classList.forEach(function(element){
        if (element=='agrandi'){
            isFound=true;
        }
    })
    if (isFound){
        // console.log("oui")
        document.cookie = 'helpOpened=true;path=/'
        // document.cookie = 'helpOpened=; expires=Thu, 01 Jan 1970 00:00:00 UTC'
        // document.cookie = 'helpOpened' + "=" + true
    }else{
        // console.log("non")
        document.cookie = 'helpOpened=false;path=/'
        // document.cookie = 'helpOpened=; expires=Thu, 01 Jan 1970 00:00:00 UTC'
        // document.cookie = 'helpOpened' + "=" + false
    }
    
})






function getCookieHelp(){
    let cookie = {}
    document.cookie.split(';').forEach(function(element){
        let [key,value] = element.split('=');
        cookie[key.trim()] = value;
    })
    
    let style = cookie['helpOpened']
    
    return style
}

// function getCookieTest(){
//     let cookie = {}
//     document.cookie.split(';').forEach(function(element){
//         let [key,value] = element.split('=');
//         cookie[key.trim()] = value;
//     })
    
//     let style = cookie['test']
    
//     return style
// }

// function getActualPage(){
//     let cookie = {}
//     document.cookie.split(';').forEach(function(element){
//         let [key,value] = element.split('=');
//         cookie[key.trim()] = value;
//     })
//     let style = cookie['pageThemeActuel']
//     return style
// }
// function getOldPage(){
//     let cookie = {}
//     document.cookie.split(';').forEach(function(element){
//         let [key,value] = element.split('=');
//         cookie[key.trim()] = value;
//     })
//     let style = cookie['pageThemePrecedent']
//     return style
// }
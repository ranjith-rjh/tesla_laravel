let addForm = document.querySelector("#addForm")
let page_aide = document.querySelector(".div_aide_homepage")




if (getCookieHelp()=='true'){
    page_aide.classList.add("visibleAide")
}else{
    page_aide.classList.remove("visibleAide")

}

addForm.addEventListener("click", function() {
	page_aide.classList.toggle("visibleAide")


	//check if opened
    let isFound=false;
    page_aide.classList.forEach(function(element){
        if (element=='visibleAide'){
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


// for(let input of document.querySelectorAll("input")) {
// 	input.addEventListener("click", function(event) {
// 		event.stopPropagation()
// 	})
// }

function getCookieHelp(){
    let cookie = {}
    document.cookie.split(';').forEach(function(element){
        let [key,value] = element.split('=');
        cookie[key.trim()] = value;
    })
    
    let style = cookie['helpOpened']
    
    return style
}
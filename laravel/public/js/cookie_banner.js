function setCookie(name, value, days) {
    // Expires in a specified time in days
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days*24*60*60*1000));
      expires = "; expires=" + date.toUTCString();
    }

    // Definition of the cookie
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
// Click on button cookie description
var coll = document.getElementsByClassName("cookie_btn_collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("cookie_btn_collapsible_active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            this.textContent = "+";
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            this.textContent = "-";
        }
    });
}

let cookie_banner = document.querySelector("#cookie_banner_id")
// console.log("cc");
if(cookie_banner){
    document.getElementById('accept_cookie').onclick = function() {
        // Save user preferences by using cookies
        setCookie('cookieConsent', 'true', 182);

        // Hide the cookie banner
        document.getElementById('cookie_banner_id').style.display = 'none';
    };

    document.getElementById('decline_cookie').onclick = function() {
        // Save user preferences by using cookies
        setCookie('cookieConsent', 'false', 182);
        setCookie('cookieRequired', 'true', 182);
        setCookie('cookiePreferences', 'false', 182);
        setCookie('cookieStats', 'false', 182);
        setCookie('cookieMarketing', 'false', 182);
        // Hide the cookie banner
        document.getElementById('cookie_banner_id').style.display = 'none';
    };

    document.getElementById('gerer_cookie').onclick = function() {
        document.getElementById('cookie_management').style.display = 'block';
        document.querySelector('#gerer_cookie').classList.add('mask');
        document.getElementById('page').className = "blur";
        // console.log("clicker");
    };

    document.getElementById('cookie_management_close').onclick = function() {
        document.getElementById('cookie_management').style.display = 'none';
        document.querySelector('#gerer_cookie').classList.remove('mask');
        document.getElementById('page').className = "";
    };

    document.getElementById('cookie_management_validate').onclick = function() {
        document.getElementById('cookie_management').style.display = 'none';
        document.querySelector('#gerer_cookie').classList.remove('mask');
        document.getElementById('page').className = "";
        let checkboxes = Array.from(document.querySelectorAll(".input_cookie[type=checkbox]"));
        let checkedCheckboxes = checkboxes.filter(checkbox => checkbox.checked);

        if(checkedCheckboxes.length==checkboxes.length){
            setCookie('cookieConsent', 'true', 182);
            document.cookie = "cookieRequired=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "cookiePreferences=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "cookieStats=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "cookieMarketing=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.getElementById('cookie_banner_id').style.display = 'none';
        }
        else {
            for(let checkbox of checkedCheckboxes){
                if(checkbox.id=="cookie_required"){
                    setCookie('cookieRequired', 'true', 182);

                    setCookie('cookiePreferences', 'false', 182);
                    setCookie('cookieStats', 'false', 182);
                    setCookie('cookieMarketing', 'false', 182);
                }
                if(checkbox.id=="cookie_preferences"){
                    setCookie('cookiePreferences', 'true', 182);
                }
                if(checkbox.id=="cookie_stats"){
                    setCookie('cookieStats', 'true', 182);
                }
                if(checkbox.id=="cookie_marketing"){
                    setCookie('cookieMarketing', 'true', 182);
                }
            }
            setCookie('cookieConsent', 'false', 182);
            document.getElementById('cookie_banner_id').style.display = 'none';
        }
    };
}
document.getElementById('gerer_cookie_footer').onclick = function() {
    document.getElementById('cookie_management').style.display = "block";
    document.getElementById('page').className = "blur"; 
    // console.log("clikeddddd");
}

document.getElementById('cookie_management_close').onclick = function() {
    document.getElementById('cookie_management').style.display = 'none';
    document.getElementById('page').className = "";
};

document.getElementById('cookie_management_validate').onclick = function() {
    document.getElementById('cookie_management').style.display = 'none';
    document.getElementById('page').className = "";
    let checkboxes = Array.from(document.querySelectorAll(".input_cookie[type=checkbox]"));
    let checkedCheckboxes = checkboxes.filter(checkbox => checkbox.checked);

    if(checkedCheckboxes.length==checkboxes.length){
        setCookie('cookieConsent', 'true', 182);
        document.cookie = "cookieRequired=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "cookiePreferences=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "cookieStats=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "cookieMarketing=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }
    else {
        for(let checkbox of checkedCheckboxes){
            if(checkbox.id=="cookie_required"){
                setCookie('cookieRequired', 'true', 182);

                setCookie('cookiePreferences', 'false', 182);
                setCookie('cookieStats', 'false', 182);
                setCookie('cookieMarketing', 'false', 182);
            }
            if(checkbox.id=="cookie_preferences"){
                setCookie('cookiePreferences', 'true', 182);
            }
            if(checkbox.id=="cookie_stats"){
                setCookie('cookieStats', 'true', 182);
            }
            if(checkbox.id=="cookie_marketing"){
                setCookie('cookieMarketing', 'true', 182);
            }
        }
        setCookie('cookieConsent', 'false', 182);
    }
};

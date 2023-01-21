var coll = document.getElementsByClassName("faq_btn_collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("faq_btn_collapsible_active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

function toggleArrow(element) {
    element.classList.toggle("active");
}

function scrollToSection(id) {
    var section = document.getElementById(id);
    var offset = section.offsetTop - 50;
    window.scrollTo({ top: offset, behavior: "smooth" });
}

document.getElementById("return_up_button").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
let menu_deroulant = document.getElementById("deroulant");

// document.querySelector("#deroulant").
document.getElementsByClassName("menu_deroulant_card")[0].style.display = "none";

menu_deroulant.addEventListener("click", function(e) {
    if(document.getElementsByClassName("menu_deroulant_card")[0].style.display == "none") {
    document.getElementsByClassName("menu_deroulant_card")[0].style.display = "block";
    document.getElementsByClassName("menu_deroulant_card")[0].style.display = "flex";

    } else {
    document.getElementsByClassName("menu_deroulant_card")[0].style.display = "none";
    }
});

function closeFocus() {
    document.getElementsByClassName("menu_deroulant_card")[0].style.display = "none";
}

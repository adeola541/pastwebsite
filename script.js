

var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")

sideNav.style.right = "-250px";

menuBtn.onclick = function(){
    if (sideNav.style.right ==  "-250px"){
        sideNav.style.right = "0";
        menu.src = "image/close.png";
    }
    else{
        sideNav.style.right = "-250px";
        menu.src = "image/menu.png";
    }
}
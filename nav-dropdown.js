function openNav() {
    document.getElementById("myNav").style.left = "0%";
    document.getElementById("closeNav").style.opacity ="1";
    document.getElementById("toggle").style.display ="none";
}

function closeNav() {
    document.getElementById("myNav").style.left = "100%";
    document.getElementById("closeNav").style.opacity ="0";
    document.getElementById("toggle").style.display ="block";
}

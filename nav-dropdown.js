function openNav() {
    document.getElementById("myNav").style.height = "100%";
    document.getElementById("myNav").style.top = "0";
    document.getElementById("closeNav").style.opacity ="1";
    document.getElementById("toggle").style.display ="none";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
    document.getElementById("myNav").style.top = "100%";
    document.getElementById("closeNav").style.opacity ="0";
    document.getElementById("toggle").style.display ="block";
}

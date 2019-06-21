window.onscroll = function () {scrollFunction();};

function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("topBtn").style.opacity = "1";
        document.getElementById("sidebar-1").style.opacity = "1";
        document.getElementById("sidebar-2").style.opacity = "1";
        document.getElementById("sidebar-3").style.opacity = "1";
        document.getElementById("sidebar-4").style.opacity = "1";
        document.getElementById("sidebar-5").style.opacity = "1";
        document.getElementById("sidebar-6").style.opacity = "1";
    }else {
        document.getElementById("topBtn").style.opacity = "0";
        document.getElementById("sidebar-1").style.opacity = "0";
        document.getElementById("sidebar-2").style.opacity = "0";
        document.getElementById("sidebar-3").style.opacity = "0";
        document.getElementById("sidebar-4").style.opacity = "0";
        document.getElementById("sidebar-5").style.opacity = "0";
        document.getElementById("sidebar-6").style.opacity = "0";
    }
}



// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

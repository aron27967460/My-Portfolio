window.onscroll = function () {scrollFunction();};


function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("topBtn").style.display = "block";
        document.getElementById("sidebar-1").style.display = "block";
        document.getElementById("sidebar-2").style.display = "block";
        document.getElementById("sidebar-3").style.display = "block";
        document.getElementById("sidebar-4").style.display = "block";
        document.getElementById("sidebar-5").style.display = "block";
        document.getElementById("sidebar-6").style.display = "block";
    }else {
        document.getElementById("topBtn").style.display = "none";
        document.getElementById("sidebar-1").style.display = "none";
        document.getElementById("sidebar-2").style.display = "none";
        document.getElementById("sidebar-3").style.display = "none";
        document.getElementById("sidebar-4").style.display = "none";
        document.getElementById("sidebar-5").style.display = "none";
        document.getElementById("sidebar-6").style.display = "none";
    }
}



// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function ocultaMenu() {

    if (document.getElementById("menuCelular").style.display == "none") {
        document.getElementById("menuCelular").style.display = "block";
    } else {
        document.getElementById("menuCelular").style.display = "none";
    }
}
document.body.onresize = function () {
    if ($(window).width() > 768) {
        window.alert("vamos ver")
    }
}

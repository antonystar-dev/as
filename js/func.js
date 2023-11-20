function Mudarestado(sistema1) {

    var display = document.getElementById(sistema1).style.display;
    if (display == "none")
        document.getElementById(sistema1).style.display = 'block';
    else
        document.getElementById(sistema1).style.display = 'none';
}
onload = basico();
function basico() {
    document.getElementById("basic").style.display="block";
    document.getElementById("intermediario").style.display = "none";
    document.getElementById("avancado").style.display = "none";
}

function intermediario() {
    document.getElementById("basic").style.display="none";
    document.getElementById("intermediario").style.display = "block";
    document.getElementById("avancado").style.display = "none";
}

function avancado() {
    document.getElementById("basic").style.display="none";
    document.getElementById("intermediario").style.display = "none";
    document.getElementById("avancado").style.display = "block";
}
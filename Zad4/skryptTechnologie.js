document.getElementById("dodaj").onclick = dodaj;
document.getElementById("usun").onclick = usun;
document.getElementById("usunall").onclick = usunall;
function dodaj() {
    const eol = document.getElementById("eol");
    const elisty = document.createElement("li");

    elisty.innerHTML = document.getElementById("nazwa").value;

    eol.appendChild(elisty);
}
function usun() {
    const eol = document.getElementById("eol");
    const count = eol.children.length;
    if (count > 0) {
        eol.removeChild(eol.children[count - 1]);
    }
}
function usunall() {
    const eol = document.getElementById("eol");
    Array.from(eol.children).forEach(li => eol.removeChild(li));
}


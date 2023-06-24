let lp = 6;

function dodaj(){
    const tytul = document.getElementById("tytul");   
    const rezyser = document.getElementById("rezyser");
    const rok = document.getElementById("rok");
    const etbody = document.getElementById("tb");
    const wiersz = document.createElement("tr");

    const komorka1 = document.createElement("td");
    komorka1.innerHTML = lp;
    const komorka2 = document.createElement("td");
    komorka2.innerHTML = document.getElementById("tytul").value;
    const komorka3 = document.createElement("td");
    komorka3.innerHTML = document.getElementById("rezyser").value;
    const komorka4 = document.createElement("td");
    komorka4.innerHTML = document.getElementById("rok").value;
    
    wiersz.appendChild(komorka1);
    wiersz.appendChild(komorka2);
    wiersz.appendChild(komorka3);
    wiersz.appendChild(komorka4);
    etbody.appendChild(wiersz)
    lp++;

}
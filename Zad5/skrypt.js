let lp=1;
document.getElementById("dodaj").onclick=dodaj;

const zaba = document.getElementById('zaba');
document.getElementById('dodaj').addEventListener('click', () => {
    zaba.classList.remove('animacja');
    window.requestAnimationFrame(function() {
    if(document.getElementById("grupa").value=="przyjaciele"){
    zaba.classList.add('animacja');
    }
  });
});

const element =document.createElement("p");
element.id="index";
element.innerHTML="test";
document.getElementById("test").appendChild(element);
document.getElementById("index").innerHTML="234";

function dodaj(){
    
    const etbody=document.getElementById("etbody");
    const wiersz=document.createElement("tr");
    const komorka1=document.createElement("td");
    const komorka2=document.createElement("td");
    const komorka3=document.createElement("td");
    const komorka4=document.createElement("td");
    const komorka5=document.createElement("td");
    const komorka6=document.createElement("td");
    const komorka7=document.createElement("td");
    const komorka8=document.createElement("td");
    const komorka9=document.createElement("td");
    komorka1.innerHTML=document.getElementById("imie").value;
    komorka2.innerHTML=document.getElementById("nazwisko").value;
    komorka3.innerHTML=document.getElementById("email").value;
    komorka4.innerHTML=document.getElementById("wiek").value;
    komorka5.innerHTML=document.getElementById("email").value;
    komorka6.innerHTML=document.getElementById("data").value;
    if(document.getElementById("kobieta").checked){
        komorka7.innerHTML="kobieta";
    }else if(document.getElementById("mezczyzna").checked){
        komorka7.innerHTML="mężczyzna";
    }else{
        komorka7.innerHTML="?";
    }
    komorka8.innerHTML=document.getElementById("grupa").value;
    komorka9.innerHTML=lp;
    lp++;
    wiersz.appendChild(komorka9);
    wiersz.appendChild(komorka1);
    wiersz.appendChild(komorka2);
    wiersz.appendChild(komorka3);
    wiersz.appendChild(komorka4);
    wiersz.appendChild(komorka5);
    wiersz.appendChild(komorka6);
    wiersz.appendChild(komorka7);
    wiersz.appendChild(komorka8);
    wiersz.className=document.getElementById("grupa").value;
    etbody.append(wiersz);
}

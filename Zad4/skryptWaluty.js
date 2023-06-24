document.getElementById("przelicz").onclick = przelicz;

function przelicz(){
    let kwotapln= parseFloat(document.getElementById("kwotapln").value);
    const wybor= document.getElementById("waluta").value;
    if(wybor=="euro"){
        document.getElementById("wynik").innerHTML=(Math.round(kwotapln*4.43*100)/100)+" €";
    }else if(wybor=="dolar"){
        document.getElementById("wynik").innerHTML=(Math.round(kwotapln*4.03*100)/100)+" $";
    }
}
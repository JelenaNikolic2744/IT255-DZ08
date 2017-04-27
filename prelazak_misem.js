function s1(){
    alert("AKUD SPANAC - VLASKE IGRE !");
}
function s2(){
    alert("AKUD SPANAC - RUSKE IGRE!");
}
function s3(){
    alert("AKUD SPANAC - BUGARKA!");
}
function s4(){
    alert("AKUD SPANAC - BUNJEVACKE IGRE!");
}


function Unesi() {
    var pitanje = document.getElementById("unos");
    var tabela = document.getElementById("tabela");
    var red = "<tr> <td>" + pitanje.value + "</td> </tr>";
    if (pitanje.value==="") {
        alert("Greska, niste popunili textbox");
    }
    else {
        tabela.innerHTML+=red;
        
        red++;
    }
}



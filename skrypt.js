var ilosczn=8;
var iloscwolnychznakow=0;
var iloscduzel=0;
var iloscmalel=0;
function ustawwolne(){
    iloscwolnychznakow=ilosczn-(+iloscduzel+ +iloscmalel);
    document.getElementById("iloscduzel").max=+iloscwolnychznakow+ +iloscduzel;
    document.getElementById("iloscmalel").max=+iloscwolnychznakow+ +iloscmalel;

}


function wybieranieduzel(){
     iloscduzel=document.getElementById("iloscduzel").value;
    document.getElementById("wybduzel").value=iloscduzel;
    ustawwolne()
}
function wybieraniemalel(){
     iloscmalel=document.getElementById("iloscmalel").value;
    document.getElementById("wybmalel").value=iloscmalel;
    ustawwolne()
}
function iloscznakow(){
    ilosczn=document.getElementById("iloscznakow1").value;
    ustawwolne()

}
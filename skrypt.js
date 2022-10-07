function euklidesOblicz(){
    let liczbaA=parseInt(document.getElementById("liczbaA").value);
    let liczbaB=parseInt(document.getElementById("liczbaB").value);
    while(liczbaA!==liczbaB){
        if(liczbaA>liczbaB){
            liczbaA=liczbaA-liczbaB;
        }else{
           liczbaB=liczbaB-liczbaA; 
        }

    }
    document.getElementById("euklidesWynik").value=liczbaA;
}
function obliczNWW(){
    let liczbaNWWA=parseInt(document.getElementById("liczbaNWWA").value);
    let liczbaNWWB=parseInt(document.getElementById("liczbaNWWB").value);
    let x=liczbaNWWA*liczbaNWWB;
    
    while(liczbaNWWB!==0){
        c=liczbaNWWA%liczbaNWWB;
        liczbaNWWA=liczbaNWWB;
        liczbaNWWB=c;
    }
    let nww=x/liczbaNWWA;
    document.getElementById("nwwWynik").value=nww;

    
}
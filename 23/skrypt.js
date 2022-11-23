function oblicz(){
    let bramka1=document.getElementById("bramka1").value;
    let bramka2=document.getElementById("bramka2").value;
    let bramka3=document.getElementById("bramka3").value;
    let bramka4=document.getElementById("bramka4").value;
    //obliczanie punkktow argentyna
    let punktArg=punkty(bramka1,bramka2);
    //obliczanie punkktow arabia
    let punktArb=punkty(bramka2,bramka1);
    //obliczanie punkktow polska
    let punktPol=punkty(bramka3,bramka4);
    //obliczanie punkktow meksyk
    let punktMex=punkty(bramka4,bramka3);

    //przygotowanie wyniku
    document.getElementById("punktyArg").value=punktArg;
    document.getElementById("punktyArb").value=punktArb;
    document.getElementById("punktyPol").value=punktPol;
    document.getElementById("punktyMex").value=punktMex;
    
    

}
function punkty(bramkiZ, bramkiS){
    let punkt=0;
    if(bramkiZ>bramkiS){
        punkt=3;
    }else if(bramkiZ == bramkiS){
        punkt=1;
    }else{  
        punkt=0;

    }
    return punkt;
}
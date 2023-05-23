
var aktywne = 1;


function showActiveImage() {
  console.log("Wyswietlanie zdj aktywnego  " + activeImage);
  
 
}


function nastepnezdj() {
  activeImage++;
  if (activeImage > 7) {
    aktywne = 1;
  }
  showActiveImage();
}


function poprzednie() {
  activeImage--;
  if (aktywne < 1) {
    aktywne = 7;
  }
  showActiveImage();
}


function zmienionezdj(imageNumber) {
  aktywne = imageNumber;
  showActiveImage();
}

//skrypcik kolejny 

function generujplanete() {
    var wartosc = document.getElementById("hsl").value;
    var cel = document.getElementsByClassName("cel");
  
 
    for (var i = 0; i < cel.length; i++) {
      var sValue;
      if (i === 0) {
        sValue = 80;
      } else {
        sValue = 80 - (i * 10);
      }
      cel[i].style.backgroundColor = "hsl(" + wartosc + ", " + sValue + "%, 50%)";
    }
  }
  //skrypt ostatni
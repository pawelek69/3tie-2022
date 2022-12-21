const formularz=document.querySelector("form");
const marka=formularz.querySelector("input[name=wejscieA]");
const model=formularz.querySelector("input[name=wejscieB]");
const numerre=formularz.querySelector("input[name=wejscieC]");
const dane4=formularz.querySelector("paliwo");


formularz.addEventListener("submit", e => {
    e.preventDefault();
    alert("Marka: "+marka.value+" Model: "+model.value+" Numer rejestracyjny: "+numerre.value);
} );
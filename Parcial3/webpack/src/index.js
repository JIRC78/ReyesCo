const btnPeticion = document.getElementById('btnPeticion');
const btnshiny = document.getElementById('btnshiny');
const apiData = document.getElementById('apiData');
const exp = document.getElementById('exp');
const nombre = document.getElementById('nombre');
const id = document.getElementById('id');

var image = document.querySelector('img');

function random(){
   return Math.floor(Math.random() * (200 - 1) + 1);
}
var rand = random();
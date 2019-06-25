
// require('./bootstrap');

// window.Vue = require('vue');
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// const app = new Vue({
//     el: '#app',
// });

var $ = require('jquery');

// Add flat info

function showMoreFlatInfo() {
  $('.moreInfo').append('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' + '<span id="lessInfo">Nascondi <i class="fas fa-angle-up"></i></span>');

  $('#moreInfo').remove();
}

// Remove flat info

function removeMoreFlatInfo() {
  $('.moreInfo > p').remove();
  $('.moreInfo > span').remove();
  $('.moreInfo').append('<span id="moreInfo">Leggi altre informazioni sullo spazio <i class="fas fa-angle-down"></i></span>')
}

// function addMap() {
//   // Qui viene impostata una variabile che rappresenta un array. Rispettivamente ci sono la latitudine e la longitudine. Questi dati possono essere recuperati passando nell'url della show la query o in alternativa nascondendo i dati che ci servono da qualche parte e recuperandoli con jquery.
//   var myCoordinates = [41.988270,12.655388];
//   // Questo non è obbligatorio.
//   // tomtom.setProductInfo('boolbnb', '1.0');
//   // Instanzio la variabile map che corrisponde alla mappa che verrà visualizzata. Da notare la chiave center a cui viene dato il valore che corrisponde alle nostre coordinate.
//   var map= tomtom.L.map('map', {
//     key: '8eQS47oSQQm5DqeKWfu8BAPht9hWBFSB',
//     source: 'vector',
//     basePath: '/tomtom-sdk',
//     center: myCoordinates,
//     zoom: 16,
//     language: "it-IT"
//   });
//   // Qui inserisco anche un marker che viene posizionato esattamente sull'abitazione.
//   var marker = tomtom.L.marker(myCoordinates).addTo(map);
//   marker.bindPopup('Appartamento').openPopup();
// }

$(document).ready(init);

function init() {
  var doc = $(document);

  doc.on('click', '#moreInfo', showMoreFlatInfo);
  doc.on('click', '#lessInfo', removeMoreFlatInfo);

}

$(document).ready(init);

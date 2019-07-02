
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



function getGeoData(){

  var address = $('#addressData').text();
  var city = $('#cityData').text();

  $.ajax({

    url: "https://api.tomtom.com/search/2/geocode/" + address+','+city + ".json?countrySet=IT&key=8eQS47oSQQm5DqeKWfu8BAPht9hWBFSB",
    method: "GET",

    success: function(data){

      var coordinate = [];

      var results = data.results;

      var longitudine = results[0].position.lon;

      var latitudine = results[0].position.lat;

      coordinate.push(latitudine, longitudine);

      geolocate(coordinate)

    },
    error: function(){}
  });
}

function geolocate(arr){

  var mymap = L.map('map').setView( arr, 13);
  var marker = L.marker(arr).addTo(mymap);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
  		maxZoom: 18,

  		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
  			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
  			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  		id: 'mapbox.streets'
  	}).addTo(mymap);

}

function setRegistrationMinimumAge() {

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
          dd='0'+dd
      }
      if(mm<10){
          mm='0'+mm
      }

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("date_of_birth").setAttribute("max", today);

}



function init() {
  var doc = $(document);

  doc.on('click', '#moreInfo', showMoreFlatInfo);
  doc.on('click', '#lessInfo', removeMoreFlatInfo);

  getGeoData();
  setRegistrationMinimumAge();

}

$(document).ready(init);

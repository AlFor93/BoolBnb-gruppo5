
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

// Handlebars test

// function test() {
//   var template = $("#showMoreInfo-template").html();
//   var compiled = Handlebars.compile(template);
//   var finalHTML = compiled();
//   var container = $(".moreInfo");
//   container.append(finalHTML);
// }

function init() {
  var doc = $(document);

  doc.on('click', '#moreInfo', showMoreFlatInfo);
  doc.on('click', '#lessInfo', removeMoreFlatInfo);

}

$(document).ready(init);

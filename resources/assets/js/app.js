
// require('./bootstrap');

// window.Vue = require('vue');
// import Buefy from 'buefy';
// Vue.use(Buefy);

// // Vue.component('example-component', require('./components/ExampleComponent.vue'));
// var app = new Vue({
// 	el:'#app',
// 	data:{}
// });
// $(document).ready(function(){
// $('button.dropdown').hover(function(e) {
// 	$(this).toggleClass('is-open');
// });
// });


require('./bootstrap');

window.Vue = require('vue');
// window.Slug = require('slug');
// Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy'
Vue.use(Buefy);

// Vue.component('slug-widget', require('./components/slugWidget.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });

require('./manage')


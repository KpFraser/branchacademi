// require('./bootstrap');

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

import 'tw-elements';

import jQuery from 'jquery'
window.$ = window.jQuery = jQuery;
import '@popperjs/core';

import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect);

import Vue from 'vue/dist/vue.js'
window.Vue = Vue;

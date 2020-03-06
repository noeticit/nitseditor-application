import Vue from 'vue';

//Maps

Vue.component('nits-vector-map', () => import('./Vector/Vector.vue'));
Vue.component('nits-amcharts-india', () => import('./Amcharts/India.vue'));
Vue.component('nits-google-map', () => import('./Google/Map.vue'));

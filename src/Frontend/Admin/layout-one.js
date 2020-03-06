/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueRouter from 'vue-router';
import {router} from "./routes";
import authorization from "NitsModels/_auth";
import store from "./store/_store";
import adminLayout from './components/LayoutOne';
import { abilitiesPlugin } from '@casl/vue';
import ability from './models/_ability';
import VModal from 'vue-js-modal';
import session from 'NitsModels/_session';

const auth = new authorization();

window.Vue = require('vue');

const sessions = new session(process.env.MIX_STORAGE_PERSIST, process.env.MIX_INACTIVITY_SESSION);
sessions.start();

Vue.use(VModal);
Vue.use(VueRouter);

Vue.use(abilitiesPlugin, ability);
Vue.prototype.$auth = auth;
Vue.prototype.$session = sessions;

require('./components');

/**
 * Middleware to check authentication
 */

router.beforeEach((to, from, next) => {
    if(to.meta.requiresAuth && auth.isLoggedIn())
        next()
    if(!to.meta.requiresAuth && auth.isLoggedIn())
        next()
    if(to.meta.requiresAuth && !auth.isLoggedIn())
        next({path: '/'})
    if(!to.meta.requiresAuth && !auth.isLoggedIn())
        next()
})


import CKEditor from '@ckeditor/ckeditor5-vue';

Vue.use(CKEditor);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const layoutOne = new Vue({
    el: '#layout-one',
    router: router,
    store,
    render:h=>h(adminLayout)
});

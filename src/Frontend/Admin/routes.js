import Vue from 'vue';
import VueRouter from 'vue-router';
import {getAppRouting} from './apps/imports';
import {getPluginAppRouting} from './apps/plugin-app-imports';

Vue.use(VueRouter);

export const router = new VueRouter({
    mode: 'history',
    routes:
        [
            ...getAppRouting(),
            ...getPluginAppRouting(),
            {
                path: '/',
                component: Vue.component('welcome', () => import('./components/Pages/Login.vue')),
                name: 'login',
                meta: {
                    requiresAuth: false
                }
            },
            {
                path: '/dashboard',
                component: Vue.component('dashboard', () => import('ProjectComponents/admin/components/Dashboard.vue')),
                name: 'Dashboard',
                meta: {
                    requiresAuth: true
                }
            },
            {
                path: '/dashboard-biltrax-analytics',
                component: Vue.component('dashboard2', () => import('./components/Pages/Dashboard2.vue')),
                name: 'dashboard2',
                meta: {
                    requiresAuth: true
                }
            },
            {
                path: '/permission',
                component: Vue.component('permission', () => import('./components/Pages/Settings/permission.vue')),
                name: 'permission',
                meta: {
                    requiresAuth: true
                }
            },
            {
                path: '/overview',
                component: Vue.component('overview', () => import('./components/Pages/Settings/Overview.vue')),
                name: 'overview',
                meta: {
                    requiresAuth: true
                }
            },

        ],
    base: '/admin/',
});

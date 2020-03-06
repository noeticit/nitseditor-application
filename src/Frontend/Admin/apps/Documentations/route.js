import Vue from 'vue';

export default [
    {
        name: 'home',
        path: '',
        component: Vue.component('documentation-home', () => import('./Components/Documentation.vue')),
    },
    {
        name: 'portlets',
        path: 'portlets',
        component: Vue.component('documentation-portlets-samples', () => import('./Components/Portlets/Samples.vue')),
    },
    {
        name: 'advanced-portlets',
        path: 'advanced-portlets',
        component: Vue.component('documentation-portlets-advanced', () => import('./Components/Portlets/AdvancedPortlets.vue')),
    },
    {
        name: 'creative-portlets',
        path: 'creative-portlets',
        component: Vue.component('documentation-portlets-creative', () => import('./Components/Portlets/CreativePortlets.vue')),
    },
    {
        name: 'base-tables',
        path: 'base-tables',
        component: Vue.component('documentation-base-tables', () => import('./Components/Tables/BaseTables.vue')),
    },
    {
        name: 'Table-Head-States',
        path: 'Table-Head-States',
        component: Vue.component('documentation-Table-Head-States', () => import('./Components/Tables/TableHeadStates.vue')),
    },
    {
        name: 'Bootstrap-Tabs',
        path: 'Bootstrap-Tabs',
        component: Vue.component('documentation-Bootstrap-Tabs', () => import('./Components/Tabs/BootstrapTabs')),
    },
    {
        name: 'Line-Tabs',
        path: 'Line-Tabs',
        component: Vue.component('documentation-Line-Tabs', () => import('./Components/Tabs/LineTabs.vue')),
    },
    {
        name: 'general-forms',
        path: 'general-forms',
        component: Vue.component('documentation-general-forms', () => import('./Components/Forms/GeneralForms.vue'))
    }
];
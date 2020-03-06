import Vue from 'vue';

//Forms

Vue.component('nits-input', () => import('./_nits_input.js'))
Vue.component('nits-select', () => import('./_nits_select.js'))
Vue.component('nits-textarea', () => import('./_nits_textarea.js'))
Vue.component('nits-file-input', () => import('./_nits_file_input.js'))
Vue.component('nits-checkbox', () => import('./_nits_checkbox.js'))
Vue.component('static-type-1', () => import('./_static-type-1.vue'))
Vue.component('form-wizard-1', () => import('./_form_wizard_1.vue'))
Vue.component('form-wizard-2', () => import('./_form_wizard_2.vue'))
Vue.component('nits-date-picker', () => import('./_nits_date_picker.vue'))
Vue.component('nits-date-time-picker', () => import('./_nits_date_time_picker.vue'))
Vue.component('nits-time-picker', () => import('./_nits_timepicker.vue'))
Vue.component('nits-date-range-picker', () => import('./_nits_date_range_picker.vue'))
Vue.component('nits-dropzone', () => import('./_nits_dropzone.vue'))
Vue.component('nits-multiselect', () => import('./_nits_multiselect.vue'))
Vue.component('nits-multiselect-2', () => import('./_nits_multiselect_2.vue'))
Vue.component('nits-form-repeater', () => import('./_nits_form_repeater.vue'))
Vue.component('nits-basic-form-layout', () => import('./_nits_basic_form_layout.vue'))
Vue.component('nits-ckeditor', () => import('./CKEditor/_nits_ckeditor.vue'))



//Base components

Vue.component('nits-button', () => import('../Base/_nits_button.vue'))

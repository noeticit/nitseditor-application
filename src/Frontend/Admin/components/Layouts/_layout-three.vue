<template>
    <div style="height: 100%;">

        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <router-link to="/dashboard">
                    <img alt="Logo" :src="nitseditor.app_logo" />
                </router-link>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
            </div>
        </div>

        <!-- end:: Header Mobile -->

        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->
                <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

                <base-layout-three-aside></base-layout-three-aside>

                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" style="padding-top: 65px;">

                    <base-layout-three-header></base-layout-three-header>

                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

<!--                        <base-layout-three-subheader></base-layout-three-subheader>-->

                        <!-- begin:: Content -->

                        <!-- begin:: Content -->
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="padding: 10px;">

                            <!--Begin::Dashboard 6-->
<!--                            <div v-if="$can($route.name, 'view')">-->
                                <router-view></router-view>
<!--                            </div>-->
<!--                           <div v-else>-->
<!--                               <div class="text-center">-->
<!--                                   <strong>Don't have permission to view this section</strong>-->
<!--                               </div>-->
<!--                           </div>-->
                            <!--End::Dashboard 6-->
                        </div>

                        <!-- end:: Content -->

                        <!-- end:: Content -->
                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                        <div class="kt-footer__copyright" v-html="nitseditor.copyright">

                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://nitseditor.com" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                            <a href="http://nitseditor.com" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
                            <a href="http://nitseditor.com" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
                        </div>
                    </div>

                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        <!-- end::Scrolltop -->

    </div>
</template>

<script>
    require('perfect-scrollbar');
    import {KTUtil} from 'NitsTheme/framework/lib/util';
    import {KTHeader} from 'NitsTheme/framework/components/foundation/header/header';
    import {KTOffcanvas} from 'NitsTheme/framework/components/foundation/offcanvas/offcanvas';
    import {KTMenu} from 'NitsTheme/framework/components/foundation/menu/menu';
    import {KTToggle} from 'NitsTheme/framework/components/foundation/toggle/toggle';
    import {KTScrolltop} from 'NitsTheme/framework/components/foundation/scrolltop/scrolltop';

    export default {
        name: "layout-two",
        data() {
            return {
                title: '',
                pageData: [],
                nitseditor: JSON.parse(nitseditor)
            }
        },
        created() {
            console.log(this.$ability.rules);
            console.log(this.$route.name);

            if(this.$can(this.$route.name, 'view'))
                console.log('happening');
            else
                console.log('Not')
        }
    }
</script>

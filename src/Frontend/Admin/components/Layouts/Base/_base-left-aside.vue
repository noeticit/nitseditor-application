<template>
    <div>
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
            <!-- BEGIN: Brand -->
            <div class="m-brand  m-brand--skin-light ">
                <router-link to="/dashboard" class="m-brand__logo">
                    <img alt="" :src="logo"/>
                </router-link>
            </div>
            <!-- END: Brand -->
            <!-- BEGIN: Aside Menu -->
            <div
                    id="m_ver_menu"
                    class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
                    data-menu-vertical="true"
                    data-menu-scrollable="true" data-menu-dropdown-timeout="500"
            >
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-fullheight" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-dropdown-toggle-class="m-aside-menu-overlay--on">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-menu"></i>
                            <span class="m-menu__link-text">
                                    Application
                                </span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <div class="m-menu__wrapper">
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent m-menu__item--submenu-fullheight" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Application
                                                </span>
                                            </span>
                                    </li>
                                    <li class="m-menu__section">
                                        <h4 class="m-menu__section-text">
                                            Messages
                                        </h4>
                                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                                <span class="m-menu__link-text">
                                                    Contact Form
                                                </span>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu ">
                                            <span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
                                                            Forms
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-wrap">
                                                            <span class="m-menu__link-text">
                                                                Messages
                                                            </span>
                                                            <span class="m-menu__link-badge">
                                                                <span class="m-badge m-badge--focus">
                                                                    23
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Contact List
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Automations
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Emails
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__section">
                                        <h4 class="m-menu__section-text">
                                            Marketing
                                        </h4>
                                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Get found on Google
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Email Marketing
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                SMS Campaign
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Social Media
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__section">
                                        <h4 class="m-menu__section-text">
                                            Members
                                        </h4>
                                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <router-link  :to="{ name: 'members__home' }" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Members
                                            </span>
                                        </router-link>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <router-link  :to="{ name: 'members__roles' }" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Roles
                                            </span>
                                        </router-link>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <router-link  :to="{ name: 'members__permissions' }" class="m-menu__link ">
                                            <span class="m-menu__link-text">
                                                Permissions
                                            </span>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-fullheight" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-dropdown-toggle-class="m-aside-menu-overlay--on">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-paper-plane"></i>
                            <span class="m-menu__link-text">
										Apps
									</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  data-redirect="true">
                                    <span class="m-menu__link">
                                        <span class="m-menu__link-text">
                                            Apps
                                        </span>
                                    </span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion" v-for="item in app_menus">
                                    <a  href="#" class="m-menu__link m-menu__toggle" v-if="item.app_menu.length">
                                        <i class="m-menu__link-icon la " :class="item.icon"></i>
                                        <span class="m-menu__link-text">
                                            {{item.menu}}
                                        </span>
                                        <i class="m-menu__ver-arrow la la-angle-right" v-if="item.app_menu.length"></i>
                                    </a>
                                    <router-link :to="item.link" class="m-menu__link " v-else >
                                        <i class="m-menu__link-icon la " :class="item.icon"></i>
                                        <span class="m-menu__link-text">
                                            {{item.menu}}
                                        </span>
                                        <i class="m-menu__ver-arrow la la-angle-right" v-if="item.app_menu.length"></i>
                                    </router-link>
                                    <div class="m-menu__submenu " v-if="item.app_menu.length">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"  data-redirect="true" v-for="subMenu in item.app_menu">
                                                <router-link  :to="`plugins/${item.ns}/${subMenu.link}`" class="m-menu__link ">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-wrap" v-if="subMenu.badge">
                                                        <span class="m-menu__link-text">
                                                            {{ subMenu.title }}
                                                        </span>
                                                        <span class="m-menu__link-badge">
                                                            <span class="m-badge m-badge--focus">
                                                                {{ subMenu.badge }}
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="m-menu__link-text" v-else>
                                                        {{ subMenu.title }}
                                                    </span>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-3" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-user-settings"></i>
                            <span class="m-menu__link-text">
                                    Accounts
                                </span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true" >
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">
                                                Accounts
                                            </span>
                                        </span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Premium Plans
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Domains
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Mailboxes
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                SEO
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Social Marketing
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Tracking and analytics
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                SSL Certificates
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-settings"></i>
                            <span class="m-menu__link-text">
                                    Settings
                                </span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true" >
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">
                                                Settings
                                            </span>
                                        </span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            General
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Sites
                                        </span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                <a  href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                    <span class="m-menu__link-title">
                                                        <span class="m-menu__link-wrap">
                                                            <span class="m-menu__link-text">
                                                                Blogging
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                                Accept Payments
                                            </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Mailbox Settings
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            Invoice Settings
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                    <a  href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            App Settings
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-info"></i>
                            <span class="m-menu__link-text">
                                    Help
                                </span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1" aria-haspopup="true" >
                                        <span class="m-menu__link">
                                            <span class="m-menu__link-text">
                                                Help
                                            </span>
                                        </span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true" v-for="item in helpMenus">
                                    <router-link  :to="item.link" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
                                            {{ item.name }}
                                        </span>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <div class="m-aside-menu-overlay"></div>
        <!-- END: Left Aside -->
    </div>
</template>

<script>
    import {appMenu} from './../../../apps/plugin-app-imports'
    import {helpMenu} from './../../../apps/imports'

    export default {
        name: "base-left-aside",
        data() {
            return {
                logo: 'assets/demo/demo7/media/img/logo/logo.png',
                app_menus: appMenu,
                helpMenus: helpMenu
            }
        },
        created() {
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>

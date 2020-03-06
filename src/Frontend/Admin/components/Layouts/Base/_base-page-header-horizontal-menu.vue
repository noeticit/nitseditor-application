<template>
    <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true" v-for="item in headerMenu">
                <router-link  :to="{ name: item.link }" class="m-menu__link m-menu__toggle">
                    <span class="m-menu__item-here"></span>
                    <span class="m-menu__link-text">
                        {{ item.name }}
                    </span>
                    <i class="m-menu__hor-arrow la la-angle-down" v-if="item.subMenu && item.subMenu.length"></i>
                    <i class="m-menu__ver-arrow la la-angle-right" v-if="item.subMenu && item.subMenu.length"></i>
                </router-link>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left" v-if="item.subMenu && item.subMenu.length">
                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item m-menu__item--submenu"  data-redirect="true" data-menu-submenu-toggle="hover" aria-haspopup="true" v-for="element in item.subMenu">
                            <router-link :to="{ name: element.link }" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-icon" :class="element.icon"></i>
                                <span class="m-menu__link-text">
                                    {{ element.name }}
                                </span>
                                <i class="m-menu__hor-arrow la la-angle-right" v-if="element.subMenu && element.subMenu.length"></i>
                                <i class="m-menu__ver-arrow la la-angle-right" v-if="element.subMenu && element.subMenu.length"></i>
                            </router-link>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right" v-if="element.subMenu && element.subMenu.length">
                                <span class="m-menu__arrow "></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item "  data-redirect="true" aria-haspopup="true" v-for="child in element.subMenu">
                                        <router-link :to="{ name: child.link }" class="m-menu__link ">
                                            <i class="m-menu__link-icon" :class="child.icon"></i>
                                            <span class="m-menu__link-text">
                                                {{ child.name }}
                                            </span>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    import {appSubMenu} from "../../../apps/imports";

    export default {
        name: "base-page-header-horizontal-menu",
        data() {
            return {
                menu: [],
                pluginName: '',
            }
        },
        computed: {
            headerMenu() {
                if(this.menu)
                    return this.menu
            }
        },
        methods: {
            changeMenu() {
                if(this.$route.meta.appName)
                {
                    var app = _.filter(appSubMenu, { name: this.$route.meta.appName});
                    this.menu = app[0]['menu']
                    this.pluginName = app[0]['ns']
                }
                else {
                    this.menu = []
                    this.pluginName = ''
                }
            }
        },
        watch: {
            '$route': {
                handler: 'changeMenu',
                immediate: true
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

        <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
                <ul class="kt-menu__nav ">
                    <li v-for="item in menu" :class=" !item.link ? 'kt-menu__item  kt-menu__item--submenu' : 'kt-menu__item'" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                        <router-link v-if="item.link" :to="item.link" class="kt-menu__link ">
                            <i :class="'kt-menu__link-icon ' + item.icon"></i>
                            <span class="kt-menu__link-text">{{ item.name }}</span>
                        </router-link>
                        <a v-else href="javascript:;" class="kt-menu__link kt-menu__toggle">
                            <i :class="'kt-menu__link-icon '+item.icon"></i>
                            <span class="kt-menu__link-text">{{ item.name }}</span>
                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="kt-menu__submenu " v-if="typeof item.sub_menu !== 'undefined' && item.sub_menu.length"><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li v-for="element in item.sub_menu" :class=" item.link ? 'kt-menu__item  kt-menu__item--parent' : 'kt-menu__item  kt-menu__item--submenu'" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                    <router-link v-if="element.link" :to="element.link" class="kt-menu__link">
                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                        <span class="kt-menu__link-text">{{ element.name }}</span>
                                    </router-link>
                                    <a v-else href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                        <span class="kt-menu__link-text">{{ element.name }}</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="kt-menu__submenu " v-if="typeof element.sub_menu !== 'undefined' && element.sub_menu.length"><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            <li v-for="ele in element.sub_menu" class="kt-menu__item " aria-haspopup="true">
                                                <router-link :to="ele.link" class="kt-menu__link ">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"></i>
                                                    <span class="kt-menu__link-text">{{ ele.name }}</span>
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
        </div>

        <!-- end:: Aside Menu -->
    </div>
</template>

<script>
    export default {
        name: "base-layout-two-aside",
        data() {
            return {
                menu: []
            }
        },
        created() {
            this.menu = JSON.parse(nitseditor).menu.map(a => ({
                name: a.name,
                link: a.link,
                icon: a.icon,
                sub_menu: a.children.length ? a.children.map(b => ({
                    name: b.name,
                    link: b.link,
                    icon: b.icon,
                    sub_menu: b.children.length ? b.children.map(c => ({
                        name: c.name,
                        link: c.link,
                        icon: c.icon
                    })) : []
                })) : []
            }))
        },
    }
</script>

<style scoped>

</style>

<template>
    <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

        <!-- begin:: Aside -->
        <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
            <div class="kt-aside__brand-logo">
                <router-link to="/dashboard">
<!--                    <img alt="Logo" :src="nitseditor.app_logo" height="50px" />-->
<!--                    <img alt="Logo" src="/nits-assets/media/logos/logo-light.png" />-->
                </router-link>
            </div>
            <div class="kt-aside__brand-tools">
                <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
								<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
											<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
											<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
										</g>
									</svg></span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
											<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" />
											<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
										</g>
									</svg></span>
                </button>
            </div>
        </div>

        <!-- end:: Aside -->

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
    import {KTUtil} from 'NitsTheme/framework/lib/util';
    import {KTHeader} from 'NitsTheme/framework/components/foundation/header/header';
    import {KTOffcanvas} from 'NitsTheme/framework/components/foundation/offcanvas/offcanvas';
    import {KTMenu} from 'NitsTheme/framework/components/foundation/menu/menu';
    import {KTToggle} from 'NitsTheme/framework/components/foundation/toggle/toggle';
    import {KTScrolltop} from 'NitsTheme/framework/components/foundation/scrolltop/scrolltop';
    export default {
        name: "demo-aside",
        data() {
            return {
                menu: [{name:'biltrax', icon:'', link : ''}],
                nitseditor: JSON.parse(nitseditor)
            }
        },
        created() {
            // this.menu = JSON.parse(nitseditor).menu.map(a => ({
            //     name: a.name,
            //     link: a.link,
            //     icon: a.icon,
            //     sub_menu: a.children.length ? a.children.map(b => ({
            //         name: b.name,
            //         link: b.link,
            //         icon: b.icon,
            //         sub_menu: b.children.length ? b.children.map(c => ({
            //             name: c.name,
            //             link: c.link,
            //             icon: c.icon
            //         })) : []
            //     })) : []
            // }))
        },
        mounted() {
            var KTLayout = function() {
                var body;

                var header;
                var headerMenu;
                var headerMenuOffcanvas;

                var asideMenu;
                var asideMenuOffcanvas;
                var asideToggler;

                var asideSecondary;
                var asideSecondaryToggler;

                var scrollTop;

                var pageStickyPortlet;

                // Header
                var initHeader = function() {
                    var tmp;
                    var headerEl = KTUtil.get('kt_header');
                    var options = {
                        offset: {},
                        minimize: {
                            /*
                            desktop: {
                                on: 'kt-header--minimize'
                            },
                            */
                            desktop: false,
                            mobile: false
                        }
                    };

                    if (tmp = KTUtil.attr(headerEl, 'data-ktheader-minimize-offset')) {
                        options.offset.desktop = tmp;
                    }

                    if (tmp = KTUtil.attr(headerEl, 'data-ktheader-minimize-mobile-offset')) {
                        options.offset.mobile = tmp;
                    }

                    header = new KTHeader('kt_header', options);
                }

                // Header Menu
                var initHeaderMenu = function() {
                    // init aside left offcanvas
                    headerMenuOffcanvas = new KTOffcanvas('kt_header_menu_wrapper', {
                        overlay: true,
                        baseClass: 'kt-header-menu-wrapper',
                        closeBy: 'kt_header_menu_mobile_close_btn',
                        toggleBy: {
                            target: 'kt_header_mobile_toggler',
                            state: 'kt-header-mobile__toolbar-toggler--active'
                        }
                    });

                    headerMenu = new KTMenu('kt_header_menu', {
                        submenu: {
                            desktop: 'dropdown',
                            tablet: 'accordion',
                            mobile: 'accordion'
                        },
                        accordion: {
                            slideSpeed: 200, // accordion toggle slide speed in milliseconds
                            expandAll: false // allow having multiple expanded accordions in the menu
                        }
                    });
                }

                // Header Topbar
                var initHeaderTopbar = function() {
                    asideToggler = new KTToggle('kt_header_mobile_topbar_toggler', {
                        target: 'body',
                        targetState: 'kt-header__topbar--mobile-on',
                        togglerState: 'kt-header-mobile__toolbar-topbar-toggler--active'
                    });
                }

                // Aside
                var initAside = function() {
                    // init aside left offcanvas
                    var asidBrandHover = false;
                    var aside = KTUtil.get('kt_aside');
                    var asideBrand = KTUtil.get('kt_aside_brand');
                    var asideOffcanvasClass = KTUtil.hasClass(aside, 'kt-aside--offcanvas-default') ? 'kt-aside--offcanvas-default' : 'kt-aside';

                    asideMenuOffcanvas = new KTOffcanvas('kt_aside', {
                        baseClass: asideOffcanvasClass,
                        overlay: true,
                        closeBy: 'kt_aside_close_btn',
                        toggleBy: {
                            target: 'kt_aside_mobile_toggler',
                            state: 'kt-header-mobile__toolbar-toggler--active'
                        }
                    });

                    // Handle minimzied aside hover
                    if (KTUtil.hasClass(body, 'kt-aside--fixed')) {
                        var insideTm;
                        var outsideTm;

                        KTUtil.addEvent(aside, 'mouseenter', function(e) {
                            e.preventDefault();

                            if (KTUtil.isInResponsiveRange('desktop') === false) {
                                return;
                            }

                            if (outsideTm) {
                                clearTimeout(outsideTm);
                                outsideTm = null;
                            }

                            insideTm = setTimeout(function() {
                                if (KTUtil.hasClass(body, 'kt-aside--minimize') && KTUtil.isInResponsiveRange('desktop')) {
                                    KTUtil.removeClass(body, 'kt-aside--minimize');

                                    // Minimizing class
                                    KTUtil.addClass(body, 'kt-aside--minimizing');
                                    KTUtil.transitionEnd(body, function() {
                                        KTUtil.removeClass(body, 'kt-aside--minimizing');
                                    });

                                    // Hover class
                                    KTUtil.addClass(body, 'kt-aside--minimize-hover');
                                    asideMenu.scrollUpdate();
                                    asideMenu.scrollTop();
                                }
                            }, 50);
                        });

                        KTUtil.addEvent(aside, 'mouseleave', function(e) {
                            e.preventDefault();

                            if (KTUtil.isInResponsiveRange('desktop') === false) {
                                return;
                            }

                            if (insideTm) {
                                clearTimeout(insideTm);
                                insideTm = null;
                            }

                            outsideTm = setTimeout(function() {
                                if (KTUtil.hasClass(body, 'kt-aside--minimize-hover') && KTUtil.isInResponsiveRange('desktop')) {
                                    KTUtil.removeClass(body, 'kt-aside--minimize-hover');
                                    KTUtil.addClass(body, 'kt-aside--minimize');

                                    // Minimizing class
                                    KTUtil.addClass(body, 'kt-aside--minimizing');
                                    KTUtil.transitionEnd(body, function() {
                                        KTUtil.removeClass(body, 'kt-aside--minimizing');
                                    });

                                    // Hover class
                                    asideMenu.scrollUpdate();
                                    asideMenu.scrollTop();
                                }
                            }, 100);
                        });
                    }
                }

                // Aside menu
                var initAsideMenu = function() {
                    // Init aside menu
                    var menu = KTUtil.get('kt_aside_menu');
                    var menuDesktopMode = (KTUtil.attr(menu, 'data-ktmenu-dropdown') === '1' ? 'dropdown' : 'accordion');

                    var scroll;
                    if (KTUtil.attr(menu, 'data-ktmenu-scroll') === '1') {
                        scroll = {
                            height: function() {
                                var height;

                                if (KTUtil.isInResponsiveRange('desktop')) {
                                    height =
                                        parseInt(KTUtil.getViewPort().height) -
                                        parseInt(KTUtil.actualHeight('kt_aside_brand')) -
                                        parseInt(KTUtil.getByID('kt_aside_footer') ? KTUtil.actualHeight('kt_aside_footer') : 0);
                                } else {
                                    height =
                                        parseInt(KTUtil.getViewPort().height) -
                                        parseInt(KTUtil.getByID('kt_aside_footer') ? KTUtil.actualHeight('kt_aside_footer') : 0);
                                }

                                height = height - (parseInt(KTUtil.css(menu, 'marginBottom')) + parseInt(KTUtil.css(menu, 'marginTop')));

                                return height;
                            }
                        };
                    }

                    asideMenu = new KTMenu('kt_aside_menu', {
                        // vertical scroll
                        scroll: scroll,

                        // submenu setup
                        submenu: {
                            desktop: menuDesktopMode,
                            tablet: 'accordion', // menu set to accordion in tablet mode
                            mobile: 'accordion' // menu set to accordion in mobile mode
                        },

                        //accordion setup
                        accordion: {
                            expandAll: false // allow having multiple expanded accordions in the menu
                        }
                    });
                }

                // Sidebar toggle
                var initAsideToggler = function() {
                    if (!KTUtil.get('kt_aside_toggler')) {
                        return;
                    }

                    asideToggler = new KTToggle('kt_aside_toggler', {
                        target: 'body',
                        targetState: 'kt-aside--minimize',
                        togglerState: 'kt-aside__brand-aside-toggler--active'
                    });

                    asideToggler.on('toggle', function(toggle) {
                        KTUtil.addClass(body, 'kt-aside--minimizing');

                        if (KTUtil.get('kt_page_portlet')) {
                            pageStickyPortlet.updateSticky();
                        }

                        KTUtil.transitionEnd(body, function() {
                            KTUtil.removeClass(body, 'kt-aside--minimizing');
                        });

                        headerMenu.pauseDropdownHover(800);
                        asideMenu.pauseDropdownHover(800);

                        // Remember state in cookie
                        Cookies.set('kt_aside_toggle_state', toggle.getState());
                        // to set default minimized left aside use this cookie value in your
                        // server side code and add "kt-brand--minimize kt-aside--minimize" classes to
                        // the body tag in order to initialize the minimized left aside mode during page loading.
                    });

                    asideToggler.on('beforeToggle', function(toggle) {
                        var body = KTUtil.get('body');
                        if (KTUtil.hasClass(body, 'kt-aside--minimize') === false && KTUtil.hasClass(body, 'kt-aside--minimize-hover')) {
                            KTUtil.removeClass(body, 'kt-aside--minimize-hover');
                        }
                    });
                }

                // Aside secondary
                var initAsideSecondary = function() {
                    if (!KTUtil.get('kt_aside_secondary')) {
                        return;
                    }

                    asideSecondaryToggler = new KTToggle('kt_aside_secondary_toggler', {
                        target: 'body',
                        targetState: 'kt-aside-secondary--expanded'
                    });

                    asideSecondaryToggler.on('toggle', function(toggle) {
                        if (KTUtil.get('kt_page_portlet')) {
                            pageStickyPortlet.updateSticky();
                        }
                    });
                }

                // Scrolltop
                var initScrolltop = function() {
                    var scrolltop = new KTScrolltop('kt_scrolltop', {
                        offset: 300,
                        speed: 600
                    });
                }

                // Init page sticky portlet
                var initPageStickyPortlet = function() {
                    var asideWidth = 255;
                    var asideMinimizeWidth = 78;
                    var asideSecondaryWidth = 60;
                    var asideSecondaryExpandedWidth = 310;

                    return new KTPortlet('kt_page_portlet', {
                        sticky: {
                            offset: parseInt(KTUtil.css( KTUtil.get('kt_header'), 'height')),
                            zIndex: 90,
                            position: {
                                top: function() {
                                    var h = 0;

                                    if (KTUtil.isInResponsiveRange('desktop')) {
                                        if (KTUtil.hasClass(body, 'kt-header--fixed')) {
                                            h = h + parseInt(KTUtil.css( KTUtil.get('kt_header'), 'height') );
                                        }

                                        if (KTUtil.hasClass(body, 'kt-subheader--fixed') && KTUtil.get('kt_subheader')) {
                                            h = h + parseInt(KTUtil.css( KTUtil.get('kt_subheader'), 'height') );
                                        }
                                    } else {
                                        if (KTUtil.hasClass(body, 'kt-header-mobile--fixed')) {
                                            h = h + parseInt(KTUtil.css( KTUtil.get('kt_header_mobile'), 'height') );
                                        }
                                    }

                                    return h;
                                },
                                left: function() {
                                    var left = 0;

                                    if (KTUtil.isInResponsiveRange('desktop')) {
                                        if (KTUtil.hasClass(body, 'kt-aside--minimize')) {
                                            left += asideMinimizeWidth;
                                        } else if (KTUtil.hasClass(body, 'kt-aside--enabled')) {
                                            left += asideWidth;
                                        }
                                    }

                                    left += parseInt(KTUtil.css( KTUtil.get('kt_content'), 'paddingLeft'));

                                    return left;
                                },
                                right: function() {
                                    var right = 0;

                                    if (KTUtil.isInResponsiveRange('desktop')) {
                                        if (KTUtil.hasClass(body, 'kt-aside-secondary--enabled')) {
                                            if (KTUtil.hasClass(body, 'kt-aside-secondary--expanded')) {
                                                right += asideSecondaryExpandedWidth + asideSecondaryWidth;
                                            } else {
                                                right += asideSecondaryWidth;
                                            }
                                        } else {
                                            right += parseInt(KTUtil.css( KTUtil.get('kt_content'), 'paddingRight'));
                                        }
                                    }

                                    if (KTUtil.get('kt_aside_secondary')) {
                                        right += parseInt(KTUtil.css( KTUtil.get('kt_content'), 'paddingRight') );
                                    }

                                    return right;
                                }
                            }
                        }
                    });
                }

                return {
                    init: function() {
                        body = KTUtil.get('body');

                        this.initHeader();
                        this.initAside();
                        this.initAsideSecondary();
                        this.initPageStickyPortlet();

                        // Non functional links notice(can be removed in production)
                        $('#kt_aside_menu, #kt_header_menu').on('click', '.kt-menu__link[href="#"]', function(e) {
                            swal.fire("", "You have clicked on a non-functional dummy link!");

                            e.preventDefault();
                        });
                    },

                    initHeader: function() {
                        initHeader();
                        initHeaderMenu();
                        initHeaderTopbar();
                        initScrolltop();
                    },

                    initAside: function() {
                        initAside();
                        initAsideMenu();
                        initAsideToggler();

                        this.onAsideToggle(function(e) {
                            // Update sticky portlet
                            if (pageStickyPortlet) {
                                pageStickyPortlet.updateSticky();
                            }

                            // Reload datatable
                            var datatables = $('.kt-datatable');
                            if (datatables) {
                                datatables.each(function() {
                                    $(this).KTDatatable('redraw');
                                });
                            }
                        });
                    },

                    initAsideSecondary: function() {
                        initAsideSecondary();
                    },

                    initPageStickyPortlet: function() {
                        if (!KTUtil.get('kt_page_portlet')) {
                            return;
                        }

                        pageStickyPortlet = initPageStickyPortlet();
                        pageStickyPortlet.initSticky();

                        KTUtil.addResizeHandler(function(){
                            pageStickyPortlet.updateSticky();
                        });

                        initPageStickyPortlet();
                    },

                    getAsideMenu: function() {
                        return asideMenu;
                    },

                    onAsideToggle: function(handler) {
                        if (typeof asideToggler.element !== 'undefined') {
                            asideToggler.on('toggle', handler);
                        }
                    },

                    getAsideToggler: function() {
                        return asideToggler;
                    },

                    openAsideSecondary: function() {
                        asideSecondaryToggler.toggleOn();
                    },

                    closeAsideSecondary: function() {
                        asideSecondaryToggler.toggleOff();
                    },

                    getAsideSecondaryToggler: function() {
                        return asideSecondaryToggler;
                    },

                    onAsideSecondaryToggle: function(handler) {
                        if (asideSecondaryToggler) {
                            asideSecondaryToggler.on('toggle', handler);
                        }
                    },

                    closeMobileAsideMenuOffcanvas: function() {
                        if (KTUtil.isMobileDevice()) {
                            asideMenuOffcanvas.hide();
                        }
                    },

                    closeMobileHeaderMenuOffcanvas: function() {
                        if (KTUtil.isMobileDevice()) {
                            headerMenuOffcanvas.hide();
                        }
                    }
                };
            }();

            $(document).ready(function() {
                KTLayout.init();
            });

        }
    }
</script>

<style scoped>
    .kt-aside {
        background-color: #1e1e2d;
    }

    .kt-aside__brand {
        background-color: #1a1a27;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .kt-aside-menu-wrapper {
        color: #a2a3b7;
    }

    .kt-menu__link-icon {
        color: #a2a3b7;
    }

    .kt-menu__link-text {
        color: #a2a3b7;
    }

</style>

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
                <div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
                <div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
                <div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>
            </div>
        </div>

        <!-- end:: Header Mobile -->

        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->
                <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

                <base-layout-two-aside></base-layout-two-aside>

                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <base-layout-two-header></base-layout-two-header>

                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

<!--                        <base-layout-two-subheader></base-layout-two-subheader>-->

                        <!-- begin:: Content -->

                        <!-- begin:: Content -->
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="padding: 10px;">

                            <!--Begin::Dashboard 6-->
                            <router-view></router-view>
                            <!--End::Dashboard 6-->
                        </div>

                        <!-- end:: Content -->

                        <!-- end:: Content -->
                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                        <div class="kt-footer__copyright">
                            2019&nbsp;&copy;&nbsp;<a href="http://biltrax.com/" target="_blank" class="kt-link">Biltrax DIA</a>
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
        mounted() {
            var KTLayout = function() {
                var body;

                var header;
                var headerMenu;
                var headerMenuOffcanvas;

                var asideMenu;
                var asideMenuOffcanvas;
                var asideToggler;

                var scrollTop;

                var pageStickyPortlet;

                // Header
                var initHeader = function() {
                    var tmp;
                    var headerEl = KTUtil.get('kt_header');
                    var options = {
                        offset: {},
                        minimize: {
                            desktop: {
                                on: 'kt-header--minimize'
                            },
                            mobile: {
                                on: 'kt-header--minimize'
                            }
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
                    var menu = KTUtil.get('kt_aside_menu');

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
                    if (KTUtil.hasClass(body, 'kt-aside--fixed') && KTUtil.attr(menu, 'data-ktmenu-scroll') == '1') {
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
                                    height = parseInt(KTUtil.getViewPort().height) - parseInt(KTUtil.actualHeight('kt_header_brand'));
                                } else {
                                    height = parseInt(KTUtil.getViewPort().height);
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
                                    if (KTUtil.isInResponsiveRange('desktop')) {
                                        var h = parseInt(KTUtil.css( KTUtil.get('kt_header'), 'height') );

                                        if (KTUtil.isInResponsiveRange('desktop') && KTUtil.hasClass(body, 'kt-subheader--fixed') && KTUtil.get('kt_subheader')) {
                                            h = h + parseInt(KTUtil.css( KTUtil.get('kt_subheader'), 'height') );
                                        }

                                        return h;
                                    } else {
                                        return parseInt(KTUtil.css( KTUtil.get('kt_header_mobile'), 'height') );
                                    }
                                },
                                left: function() {
                                    var left = 0;

                                    if (KTUtil.isInResponsiveRange('desktop')) {
                                        if (KTUtil.hasClass(body, 'kt-aside--minimize')) {
                                            left += asideMinimizeWidth;
                                        } else {
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
                        this.initPageStickyPortlet();

                        // Non functional links notice(can be removed in production)
                        $('#kt_aside_menu, #kt_header_menu').on('click', '.kt-menu__link[href="#"]', function() {
                            if(location.hostname.match('keenthemes.com')) {
                                swal.fire("You have clicked on a dummy link!", "To browse the theme features please refer to the header menu.", "warning");
                            } else {
                                swal.fire("You have clicked on a dummy link!", "This demo shows only its unique layout features. <b>Keen's</b> all available features can be re-used in this and any other demos by refering to <b>the default demo</b>.", "warning");
                            }
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

<template>
    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

        <!-- begin:: Title -->
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                <ul class="kt-menu__nav ">
                    <li>
                        <router-link to="/dashboard">
                            <!--                           <img alt="Logo" :src="nitseditor.app_logo" height="40px" />-->
                            <img alt="Logo" src="/logo/logo.png" height="30px" style="margin-top: 15px"/>
                        </router-link>
                    </li>
                    <!--                    <li class="kt-menu__item  kt-menu__item&#45;&#45;open kt-menu__item&#45;&#45;here kt-menu__item&#45;&#45;submenu kt-menu__item&#45;&#45;rel kt-menu__item&#45;&#45;open kt-menu__item&#45;&#45;here kt-menu__item&#45;&#45;active"><h4>Applications</h4></li>-->
                </ul>
            </div>
        </div>
        <!-- end:: Title -->


        <!-- begin:: Header Menu -->
        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="width : 100%;">
            <top-bar></top-bar>
        </div>

        <!--        &lt;!&ndash; end:: Header Menu &ndash;&gt;-->

        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: Notifications -->
            <div class="kt-header__topbar-item dropdown">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                    <!--                    <span class="kt-header__topbar-icon kt-header__topbar-icon&#45;&#45;success"><i class="flaticon2-bell-alarm-symbol"></i></span>-->
                    <!--                    <span class="kt-hidden kt-badge kt-badge&#45;&#45;danger"></span>-->
                    <span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect id="bound" x="0" y="0" width="24" height="24" />
												<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
												<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000" />
											</g>
										</svg> <span class="kt-pulse__ring"></span>
									</span>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                    <user-notifications></user-notifications>
                </div>
            </div>

            <!--end: Notifications -->

            <!--begin: Quick actions -->
            <div class="kt-header__topbar-item dropdown">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                    <!--                    <span class="kt-header__topbar-icon kt-header__topbar-icon&#45;&#45;warning"><i class="flaticon2-gear"></i></span>-->
                    <span class="kt-header__topbar-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect id="bound" x="0" y="0" width="24" height="24" />
												<rect id="Rectangle-62-Copy" fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
												<rect id="Rectangle-62-Copy-2" fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
												<rect id="Rectangle-62-Copy-4" fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
												<rect id="Rectangle-62-Copy-3" fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
											</g>
										</svg> </span>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                    <user-quick-actions></user-quick-actions>
                </div>
            </div>

            <!--end: Quick actions -->

            <!--begin: User bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="kt-header__topbar-user">
                        <!--                        <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>-->
                        <!--                        <span class="kt-header__topbar-welcome kt-hidden-mobile">Admin</span>-->
                        <img class="kt-hidden" alt="Pic" src="/nits-assets/media/media/users/300_21.jpg" />
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
                    </div>
                    <!--                    <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>-->
                    <!--                    <span class="kt-hidden kt-header__topbar-username">Nick</span>-->
                    <!--                    <img class="kt-hidden" alt="Pic" src="/nits-assets/media/media/users/300_21.jpg" />-->
                    <!--                    <span class="kt-header__topbar-icon kt-hidden-"><i class="flaticon2-user-outline-symbol"></i></span>-->
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                    <user-details></user-details>
                </div>
            </div>

            <!--end: User bar -->

        </div>

        <!-- end:: Header Topbar -->
    </div>
    <!-- end:: Header -->


</template>

<script>
    import TopBar from 'ProjectComponents/admin/layouts/TopBar';
    import UserNotifications from 'ProjectComponents/admin/layouts/UserNotifications';
    import UserQuickActions from "ProjectComponents/admin/layouts/UserQuickActions";
    import UserDetails from "ProjectComponents/admin/layouts/UserDetails";

    export default {
        name: "base-layout-three-header",
        data() {
            return {
                nitseditor: JSON.parse(nitseditor)
            }
        },
        components: {
            UserDetails, UserQuickActions, TopBar, UserNotifications
        },
    }
</script>

<style scoped>
    .kt-header {
        background-color: #ffffff;
        border-bottom: 1px solid #eff0f6;
    }
</style>

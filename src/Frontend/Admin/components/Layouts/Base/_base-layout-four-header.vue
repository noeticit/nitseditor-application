<template>
    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
        <div class="kt-container">

            <!-- begin:: Brand -->
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <a class="kt-header__brand-logo" href="index.html">
                    <img alt="Logo" src="/nits-assets/media/media/logos/logo-4.png" class="kt-header__brand-logo-default" />
                    <img alt="Logo" src="/nits-assets/media/media/logos/logo-4.png" class="kt-header__brand-logo-sticky" />
                </a>
            </div>

            <!-- end:: Brand -->

            <!-- begin: Header Menu -->
            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
            <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                    <base-menu-top-one></base-menu-top-one>
                </div>
            </div>

            <!-- end: Header Menu -->

            <!-- begin:: Header Topbar -->
            <div class="kt-header__topbar kt-grid__item">

                <!--begin: Search -->
                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>

                                            <!--<i class="flaticon2-search-1"></i>-->
										</span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                        <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                            <form method="get" class="kt-quick-search__form">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                    <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                </div>
                            </form>
                            <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Search -->

                <!--begin: Notifications -->
                <div class="kt-header__topbar-item dropdown">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon kt-pulse kt-pulse--light">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000" />
												</g>
											</svg>

                                            <!--<i class="flaticon2-bell-alarm-symbol"></i>-->
											<span class="kt-pulse__ring"></span>
										</span>

                        <!--<span class="kt-badge kt-badge--light"></span>-->
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                        <form>

                            <!--begin: Head -->
                            <div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url(/nits-assets/media/media/misc/bg-1.jpg)">
                                <h3 class="kt-head__title">
                                    User Notifications
                                    &nbsp;<span class="btn btn-success btn-sm btn-bold btn-font-md">{{userNotifications}}</span>
                                </h3>
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
                                    </li>
                                </ul>
                            </div>

                            <!--end: Head -->
                            <div class="tab-content">
                                <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                                    <div v-for="item in topbar_notifications_notifications" class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                        <a href="#" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i :class="item.icon"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title">
                                                    {{item.message}}
                                                </div>
                                                <div class="kt-notification__item-time">
                                                   {{item.time}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                    <div v-for="item in topbar_notifications_events" class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                        <a href="#" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i :class="item.icon"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title">
                                                   {{item.message}}
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    {{item.time}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                    <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                        <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                            <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                                All caught up!
                                                <br>No new notifications.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--end: Notifications -->

                <!--begin: Quick actions -->
                <div class="kt-header__topbar-item dropdown">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <span class="kt-header__topbar-icon">

                            <!--<i class="flaticon2-gear"></i>-->
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
                        <form>

                            <!--begin: Head -->
                            <div class="kt-head kt-head--skin-dark" style="background-image: url(/nits-assets/media/media/misc/bg-1.jpg)">
                                <h3 class="kt-head__title">
                                    User Quick Actions
                                    <span class="kt-space-15"></span>
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md">{{UserQuickActions}}</span>
                                </h3>
                            </div>

                            <!--end: Head -->

                            <!--begin: Grid Nav -->
                            <div class="kt-grid-nav kt-grid-nav--skin-light">
                                <div class="kt-grid-nav__row" v-for="item in User_Quick_Actions">
                                    <a href="#" class="kt-grid-nav__item">
														<span class="kt-grid-nav__icon">
															<svg :xmlns="item.link" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect id="bound" x="0" y="0" width="24" height="24" />
																	<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																	<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" id="C" fill="#000000" />
																</g>
															</svg> </span>
                                        <span class="kt-grid-nav__title">{{item.title}}</span>
                                        <span class="kt-grid-nav__desc">{{item.desc}}</span>
                                    </a>
                                </div>
<!--                                <div class="kt-grid-nav__row">-->
<!--                                    <a href="#" class="kt-grid-nav__item">-->
<!--														<span class="kt-grid-nav__icon">-->
<!--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon&#45;&#45;success kt-svg-icon&#45;&#45;lg">-->
<!--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
<!--																	<rect id="bound" x="0" y="0" width="24" height="24" />-->
<!--																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" id="Combined-Shape" fill="#000000" />-->
<!--																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" id="Path" fill="#000000" opacity="0.3" />-->
<!--																</g>-->
<!--															</svg> </span>-->
<!--                                        <span class="kt-grid-nav__title">Projects</span>-->
<!--                                        <span class="kt-grid-nav__desc">Pending Tasks</span>-->
<!--                                    </a>-->
<!--                                    <a href="#" class="kt-grid-nav__item">-->
<!--														<span class="kt-grid-nav__icon">-->
<!--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon&#45;&#45;success kt-svg-icon&#45;&#45;lg">-->
<!--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
<!--																	<polygon id="Shape" points="0 0 24 0 24 24 0 24" />-->
<!--																	<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
<!--																	<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" />-->
<!--																</g>-->
<!--															</svg> </span>-->
<!--                                        <span class="kt-grid-nav__title">Customers</span>-->
<!--                                        <span class="kt-grid-nav__desc">Latest cases</span>-->
<!--                                    </a>-->
<!--                                </div>-->
                            </div>

                            <!--end: Grid Nav -->
                        </form>
                    </div>
                </div>

                <!--end: Quick actions -->

                <!--begin: User bar -->
                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <span class="kt-header__topbar-welcome">Hi,</span>
                        <span class="kt-header__topbar-username">{{ user.name.split(" ")[0] }}</span>
                        <span class="kt-header__topbar-icon"><b>{{ user.name.charAt(0) }}</b></span>
                        <img alt="Pic" src="nits-assets/media/media/users/300_21.jpg" class="kt-hidden" />
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                        <!--begin: Head -->
                        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(/nits-assets/media/media/misc/bg-1.jpg)">
                            <div class="kt-user-card__avatar">
                                <img class="kt-hidden" alt="Pic" src="nits-assets/media/media/users/300_25.jpg" />

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">N</span>
                            </div>
                            <div class="kt-user-card__name">
                                {{ user.name }}
                            </div>
                            <div class="kt-user-card__badge">
                                <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                            </div>
                        </div>

                        <!--end: Head -->

                        <!--begin: Navigation -->
                        <div class="kt-notification" >
                            <a href="#" class="kt-notification__item" v-for="item in profileSection">
                                <div class="kt-notification__item-icon">
                                    <i :class="item.icon"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        {{item.title}}
                                    </div>
                                    <div class="kt-notification__item-time">
                                       {{item.desc}}
                                    </div>
                                </div>
                            </a>
                            <div class="kt-notification__custom">
                                <button class="btn btn-label-brand btn-sm btn-bold" @click.prevent="logout">Sign Out</button>
                            </div>
                        </div>

                        <!--end: Navigation -->
                    </div>
                </div>

                <!--end: User bar -->
            </div>

            <!-- end:: Header Topbar -->
        </div>
    </div>

    <!-- end:: Header -->
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        name: "base-layout-four-header",
        data() {
            return {
                userNotifications: '',
                topbar_notifications_notifications: [],
                topbar_notifications_events: [],
                UserQuickActions: '',
                User_Quick_Actions: [],
                profileSection: []
            }
        },
        methods: {
            logout() {
                this.$auth.logout()
                this.$router.push('/');
            }
        },
        computed: {
            ...mapState({
                user: state => state.user
            })
        }
    }
</script>

<style scoped>

</style>

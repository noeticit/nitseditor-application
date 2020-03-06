<template>
    <div>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
            <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body" style="width: 100%;">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

<!--                    &lt;!&ndash; begin:: Subheader &ndash;&gt;-->
<!--                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">-->
<!--                        <div class="kt-subheader__main">-->
<!--                            <h3 class="kt-subheader__title">Permissions</h3>-->
<!--                            <h4 class="kt-subheader__desc">Set your user's permission</h4>-->
<!--                        </div>-->
<!--                        <div class="kt-subheader__toolbar">-->
<!--                            <div class="kt-subheader__wrapper">-->
<!--                                <a href="#" class="btn kt-subheader__btn-secondary">-->
<!--                                    Export-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    &lt;!&ndash; end:: Subheader &ndash;&gt;-->

                    <!-- begin:: Content -->
                    <div class="kt-content kt-grid__item kt-grid__item--fluid" style="margin-top: -50px">

                        <!--Begin::Dashboard 4-->

                        <!--Begin::Section-->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="kt-portlet kt-portlet--bordered-semi kt-portlet--space kt-portlet--height-fluid">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Permission
                                                <small>table</small>
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="flaticon-more-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="kt-nav">
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                                <span class="kt-nav__link-text">Statistics</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                                                <span class="kt-nav__link-text">Reports</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">

                                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                            <div class="row align-items-center">
                                                <div class="col-xl-12 order-2 order-xl-1">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h6>Showing results 1 to 15 of 92</h6>
                                                        </div>
                                                    </div><br/>
                                                    <div class="form-group m-form__group row align-items-center">
                                                        <div class="col-md-12">
                                                            <div class="m-input-icon m-input-icon--left">
                                                                <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." v-model="search">
                                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                                    <span>
                                                                        <i class="la la-search"></i>
                                                                    </span>
                                                                 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="kt-section">
                                            <div class="kt-section__content">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Page Name</th>
                                                        <th>Super Admin</th>
                                                        <th>Admin</th>
                                                        <th>Analyst</th>
                                                        <th>Subscriber</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr v-for="(item,index) in pages">
                                                        <th scope="row">1</th>
                                                        <td>Dashboard</td>
                                                        <td><input type="checkbox" checked="checked"></td>
                                                        <td><input type="checkbox" checked="checked"></td>
                                                        <td><input type="checkbox" checked=""></td>
                                                        <td><input type="checkbox" checked=""></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End::Section-->

                        <!--End::Dashboard 4-->
                    </div>

                    <!-- end:: Content -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "permissions",
        data() {
            return {
                search: '',
                pages: [
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                ]
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <div>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
            <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body" style="width: 100%;">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

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
                                               Settings
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

                                        <div class="kt-section">
                                            <div class="kt-section__content">
                                                <div class="form-group row">
                                                    <label for="example-Code-input" class="col-2 col-form-label">Site Title</label>
                                                    <div class="col-4">
                                                        <input class="form-control" v-model="code" type="text" value="ABC100" id="example-Code-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-Code-input" class="col-2 col-form-label">Tagline</label>
                                                    <div class="col-4">
                                                        <input class="form-control" v-model="code" type="text" value="ABC100" id="example-Code-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-Code-input" class="col-2 col-form-label">Email Address</label>
                                                    <div class="col-4">
                                                        <input class="form-control" v-model="code" type="text" value="ABC100" id="example-Code-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">New User Default Role</label>
                                                    <div class="col-4">
                                                        <select class="form-control kt-select2" id="kt_select2_1" name="param">
                                                            <option v-for="(items,index) in dataAll" :value="items.id">{{items.name}}</option>
                                                        </select>
                                                    </div>
                                                </div>
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
        name: "settings",
        data() {
            return {
                search: '',
                code: '',
                dataAll:[
                    {name: 'Admin', id: ''},
                    {name: 'Super Admin', id: '1'},
                    {name: 'Subscriber', id: '2'},
                    {name: 'Analyst', id: '3'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>

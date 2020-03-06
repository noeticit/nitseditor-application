<template>
    <div class="row">
        <div class="col-xl-8">
            <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i class="la la-angle-double-left"></i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i class="la la-angle-left"></i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i>1</i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i>2</i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i>3</i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i>4</i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i class="la la-ellipsis-h"></i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i class="la la-angle-right"></i>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                    <i class="la la-angle-double-right"></i>
                </a>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="m-datatable__pager-info">
                <button type="button" class="btn btn-brand m-btn m-btn--pill m-btn--air dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="filter-option pull-left">10</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                </button>
                <div class="dropdown-menu open" role="combobox">
                    <a class="dropdown-item" href="#">
                        10
                    </a>
                    <a class="dropdown-item" href="#">
                        20
                    </a>
                    <a class="dropdown-item" href="#">
                        30
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        100
                    </a>
                </div>
                <span class="m-datatable__pager-detail">Displaying 1 - 10 of 143 records</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "pagination",
        prop: {
            links: Object,
            meta: Object
        }
    }
</script>

<style scoped>

</style>
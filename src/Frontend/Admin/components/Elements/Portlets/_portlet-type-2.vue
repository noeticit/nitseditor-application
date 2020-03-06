<template>
    <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 450px">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{ title }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-pricing-table-1">
                        <div class="m-pricing-table-1__items row">
                            <div class="m-pricing-table-1__item col-lg-12">
                                <div class="m-pricing-table-1__visual">
                                    <span class="m-pricing-table-1__icon m--font-brand">
                                <i class="fa flaticon-confetti"></i>
                            </span>
                                </div>
                                <span class="m-pricing-table-1__price" style="margin-bottom: -4.429rem">

											</span>
                                <h2 class="m-pricing-table-1__subtitle">
                                    1 End Product License
                                </h2>
                                <div class="m-pricing-table-1__btn">
                                    <button type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">
                                        Purchase
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "portlet-type-2",
        props: ['title']
    }
</script>

<style scoped>
    .m-pricing-table-1__item {
        top: -100px;
    }
    .m-pricing-table-1__items {
        padding: 0px;
        padding-bottom: 0rem;
    }
    .m-pricing-table-1__price {
        margin-bottom: -4.429rem;
    }
</style>
<template>
    <div class="m-portlet m-portlet--bordered m-portlet--unair">
        <div class="m-portlet__body">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--bordered m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                {{title}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                <span class="m-section__sub">
                    {{ description }}
                </span>
                        <div class="m-section__content">
                            <slot name="content"></slot>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--bordered m-portlet--bordered-semi m-portlet--rounded">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                {{title}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                <span class="m-section__sub">
                    {{ description }}
                </span>
                        <div class="m-section__content">
                            <slot name="content"></slot>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--bordered m-portlet--rounded m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                {{title}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                <span class="m-section__sub">
                    {{ description }}
                </span>
                        <div class="m-section__content">
                            <slot name="content"></slot>
                        </div>
                 </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--bordered m-portlet--rounded m-portlet--unair m-portlet--head-sm">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                {{title}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                <span class="m-section__sub">
                    {{ description }}
                </span>
                        <div class="m-section__content">
                            <slot name="content"></slot>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--bordered m-portlet--rounded  m-portlet--last">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                {{title}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                <span class="m-section__sub">
                    {{ description }}
                </span>
                        <div class="m-section__content">
                            <slot name="content"></slot>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>

</template>

<script>
    export default {
        name: "portlet-type-14",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
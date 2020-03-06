<template>
    <div class="m-portlet m-portlet--rounded">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{title}}
                        <small>
                            portlet sub title
                        </small>
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
        <!--end::Form-->
    </div>
</template>

<script>
    export default {
        name: "portlet-type-6",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
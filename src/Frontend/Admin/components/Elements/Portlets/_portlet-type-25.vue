<template>
    <div class="m-portlet m-portlet--responsive-tablet-and-mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
					<span class="m-portlet__head-icon">
						<i class="flaticon-placeholder"></i>
					</span>
                    <h3 class="m-portlet__head-text">
                       {{title}}
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <div class="btn-group m-btn-group m-btn-group--pill" role="group" aria-label="...">
                    <button type="button" class="m-btn btn btn-brand">
                        Left
                    </button>
                    <button type="button" class="m-btn btn btn-brand">
                        Middle
                    </button>
                    <button type="button" class="m-btn btn btn-brand">
                        Right
                    </button>
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
        name: "portlet-type-25",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
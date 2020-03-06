<template>
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon">
					    <i class="flaticon-multimedia"></i>
					</span>
                    <h3 class="m-portlet__head-text">
                        {{ title }}
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
        <div class="m-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-6 m--valign-middle">
                    Portlet footer:
                </div>
                <div class="col-lg-6 m--align-right">
                    <button type="submit" class="btn btn-brand">
                        Submit
                    </button>
                    <span class="m--margin-left-10">
						or
					<a href="#" class="m-link m--font-bold">
						Cancel
					</a>
					</span>
                </div>
            </div>
        </div>

        <!--end::Form-->
    </div>
</template>

<script>
    export default {
        name: "portlet-type-7",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
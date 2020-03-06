<template>
    <div class="m-portlet ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
					<span class="m-portlet__head-icon">
						<i class="flaticon-multimedia"></i>
					</span>
                    <h3 class="m-portlet__head-text">
                       {{title}}
                    </h3>
                </div>
            </div>
        </div>

        <div class="m-portlet__body">
            <div class="m-section">
                <span class="m-section__sub">
                    <div class="m-scrollable" data-scrollable="true" data-max-height="200" data-scrollbar-shown="true">
                        {{ description }}
                    </div>
                </span>
                <div class="m-section__content">
                    <slot name="content"></slot>
                </div>
            </div>
        </div>
        <div class="m-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-success">
                        Submit
                    </button>
                    <button type="submit" class="btn btn-secondary">
                        Cancel
                    </button>
                </div>
            </div>
        </div>


        <!--end::Form-->
    </div>
</template>

<script>
    export default {
        name: "portlet-type-9",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
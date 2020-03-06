<template>
    <div class="m-portlet m-portlet--responsive-mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
					<span class="m-portlet__head-icon">
						<i class="flaticon-technology m--font-brand"></i>
					</span>
                    <h3 class="m-portlet__head-text m--font-brand">
                       {{title}}
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="m-btn btn btn-secondary">
                        <i class="la la-file-text-o"></i>
                    </button>
                    <button type="button" class="m-btn btn btn-secondary">
                        <i class="la la-floppy-o"></i>
                    </button>
                    <button type="button" class="m-btn btn btn-secondary">
                        <i class="la la-header"></i>
                    </button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">
                                Dropdown link
                            </a>
                            <a class="dropdown-item" href="#">
                                Dropdown link
                            </a>
                            <a class="dropdown-item" href="#">
                                Dropdown link
                            </a>
                            <a class="dropdown-item" href="#">
                                Dropdown link
                            </a>
                        </div>
                    </div>
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
        name: "portlet-type-24",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
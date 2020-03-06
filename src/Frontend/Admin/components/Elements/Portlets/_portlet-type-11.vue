<template>
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
					<span class="m-portlet__head-icon">
						<i class="flaticon-statistics"></i>
					</span>
                    <h3 class="m-portlet__head-text">
                       {{title}}
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon">
                            <i class="la la-cloud-upload"></i>
                        </a>
                    </li>
                    <li class="m-portlet__nav-item">
                        <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon">
                            <i class="la la-cog"></i>
                        </a>
                    </li>
                    <li class="m-portlet__nav-item">
                        <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon">
                            <i class="la la-share-alt-square"></i>
                        </a>
                    </li>
                </ul>
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
        name: "portlet-type-11",
        props: ['title', 'description']
    }
</script>

<style scoped>

</style>
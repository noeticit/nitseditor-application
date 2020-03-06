<template>
    <div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
                    <h3 class="m-portlet__head-text">
                        {{subtitle}}
                    </h3>
                    <h2 class="m-portlet__head-label m-portlet__head-label--accent">
						<span>
							{{title}}
						</span>
                    </h2>
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
    </div>

</template>

<script>
    export default {
        name: "portlet-type-19",
        props: ['title','subtitle' ,'description']
    }
</script>

<style scoped>

</style>
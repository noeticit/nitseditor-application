<template>

    <div class="m-portlet m-portlet--tabs">
        <div class="m-portlet__head">
            <div class="m-portlet__head-tools">
                <ul class="nav nav-tabs m-tabs-line m-tabs-line--danger m-tabs-line--2x m-tabs-line--right" role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            Settings
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            Logs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                    {{description}}
                </div>
                <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                    {{description}}
                </div>
                <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                    {{description}}
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "tab-type-14",
        props: ['title','description']
    }
</script>

<style scoped>

</style>
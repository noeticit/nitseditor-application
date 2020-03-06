<template>

    <div class="m-portlet">
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
            <ul class="nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--success" role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
                        Messages
                    </a>
                </li>
                <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Settings
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">
                            Action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">
                            Another action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">
                            Something else here
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">
                            Separated link
                        </a>
                    </div>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
                        Logs
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "tab-type-10",
        props: ['title']
    }
</script>

<style scoped>

</style>
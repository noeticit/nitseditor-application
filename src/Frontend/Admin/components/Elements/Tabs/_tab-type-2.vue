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
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#m_tabs_1_1">
                        <i class="la la-exclamation-triangle"></i>
                        Active
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-exclamation-circle m--font-success"></i>
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Another action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Something else here
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Separated link
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
                        <i class="la la-cloud-download"></i>
                        Link 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
                        <i class="la la-puzzle-piece m--font-danger"></i>
                        Link 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" data-toggle="tab" href="#m_tabs_1_4">
                        <i class="la la-comment"></i>
                        Disabled
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_1_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                </div>
                <div class="tab-pane" id="m_tabs_1_4" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                </div>
            </div>
            <div class="m-separator m-separator--dashed"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#m_tabs_1_1">
                        <i class="flaticon-interface-5"></i>
                        Active
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon-time-2 m--font-success"></i>
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Another action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Something else here
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Separated link
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
                        <i class="flaticon-placeholder-2"></i>
                        Link 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
                        <i class="flaticon-lock m--font-danger"></i>
                        Link 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" data-toggle="tab" href="#m_tabs_1_4">
                        <i class="flaticon-share"></i>
                        Disabled
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_1_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                </div>
                <div class="tab-pane" id="m_tabs_1_4" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                </div>
            </div>
            <div class="m-separator m-separator--dashed"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#m_tabs_1_1">
                        <i class="fa fa-cog"></i>
                        Active
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-file-powerpoint-o m--font-success"></i>
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Another action
                        </a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Something else here
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">
                            Separated link
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
                        <i class="fa fa-user"></i>
                        Link 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
                        <i class="fa fa-comment m--font-brand"></i>
                        Link 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" data-toggle="tab" href="#m_tabs_1_4">
                        <i class="fa fa-lock"></i>
                        Disabled
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane" id="m_tabs_1_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                </div>
                <div class="tab-pane" id="m_tabs_1_4" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "tab-type-2",
        props: ['title']
    }
</script>

<style scoped>

</style>
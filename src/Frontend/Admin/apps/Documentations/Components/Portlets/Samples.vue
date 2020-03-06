<template>
    <div>
        <base-subheader title="Portlets" icon="la-home" heading="Base Portlets" description="Home"></base-subheader>
        <div class="m-content">
            <div class="row">
            <div class="col-xl-6">
                <portlet-type-4 title="Basic Portlet"
                                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                >
                </portlet-type-4>
            </div>
            <div class="col-xl-6">
                <nits-portlet
                        title="Hello World"
                        subTitle="Testing Description area <code>Test</code>"
                        headIcon="flaticon-multimedia"
                        headSubTitle="portlet sub title"
                        footer
                        :headActions="actions"
                        actionType="toolbar-background"
                        creative
                        headerLine
                        creativeColor="info"
                        headSolidBg="success"
                >
                    <!--<nits-table-->
                            <!--:contents="tableContents"-->
                            <!--:headers="tableHeaders"-->
                            <!--slot="content"-->
                            <!--headerType="bg"-->
                            <!--headerColor="brand"-->
                            <!--small-->
                    <!--&gt;</nits-table>-->
                    <p slot="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </nits-portlet>
            </div>
            <!--<div class="col-xl-6">-->
                <!--<div> We need use component name <code>portlet-type-4</code></div>-->
            <!--</div>-->
        </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-5 title="Icon Title"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-5>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-5</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-6 title="Rounded Style"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-6>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-6</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-7 title="Portlet Footer"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-7>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-7</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-8 title="Non-shadow Style"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-8>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-8</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-9 title="	Scrollable Content"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
									"
                    >
                    </portlet-type-9>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-9</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-10 title="Portlet Action Icons"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-10>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-10</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-11 title="Portlet Action Icons"
                                     description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-11>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-11</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-12 title="Dark Skin"
                                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-12>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-12</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-13 title="Solid Background Dark Skin"
                                     description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-13>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-13</code></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-14 title="Bordered Style"
                                     description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled."
                    >
                    </portlet-type-14>
                </div>
                <div class="col-xl-6">
                    <div> We need use component name <code>portlet-type-14</code></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "documentation-portlets-samples",
        data() {
            return {
                tableHeaders: [
                    { title: '#', key: 'index' },
                    { title: 'First Name', key: 'first_name'},
                    { title: 'Last Name', key: 'last_name'},
                    { title: 'Username', key: 'username' }
                ],
                tableContents: [
                    { index: 1, first_name: 'John', last_name: 'Stone', username: '@john' },
                    { index: 2, first_name: 'Lisa', last_name: 'Nilson', username: '@lisa' },
                    { index: 3, first_name: 'Larry', last_name: 'the Bird', username: '@twitter' }
                ],
                actions: [
                    { icons: 'la-close' },
                    { icons: 'la-refresh' },
                    { icons: 'la-angle-down' }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
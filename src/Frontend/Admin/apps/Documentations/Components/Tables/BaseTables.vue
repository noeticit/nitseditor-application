<template>
    <div>
        <base-subheader title="Tables" icon="la-home" heading="Base Tables" description="Home"></base-subheader>
        <div class="m-content">
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-3 title="Basic tables"
                                    description="Using the most basic table markup, We need use component name <code>nits-table</code> <br/>"
                    >
                        <nits-table
                                      :contents="tableContents"
                                      :headers="tableHeaders"
                                      slot="content"
                        ></nits-table>
                    </portlet-type-3>
                </div>
                <div class="col-xl-6">
                    <portlet-type-3 title="Table head with background colors"
                                    description="We need use component name <code>nits-table</code>. Here we use <code>headerType='bg'</code> for background of headers and <code>headerColor='success'</code> for colors<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                headerType="bg"
                                headerColor="success"
                        ></nits-table>
                    </portlet-type-3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-3 title="Table head with separator"
                                    description="We need use component name <code>nits-table</code>. Here we use <code>headerType='separator'</code> for separator of headers and <code>headerColor='primary'</code> for colors<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                headerType="separator"
                                headerColor="primary"
                        ></nits-table>
                    </portlet-type-3>
                </div>
                <div class="col-xl-6">
                    <portlet-type-3 title="Table bordered"
                                    description="We need use component name <code>nits-table</code>. We simply pass <code>bordered</code> and <code>borderColor='brand'</code> for border color<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                bordered
                                borderColor="brand"
                        ></nits-table>
                    </portlet-type-3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-3 title="Table bordered with head background"
                                    description="We need use component name <code>nits-table</code>. Here we use <code>headerType='bg'</code> for separator of headers and <code>headerColor='primary'</code> for colors. We simply pass <code>bordered</code> and <code>borderColor='danger'</code> for border color<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                headerType="bg"
                                headerColor="primary"
                                bordered
                                borderColor="danger"
                        ></nits-table>
                    </portlet-type-3>
                </div>
                <div class="col-xl-6">
                    <portlet-type-3 title="Hoverable Table"
                                    description="We need use component name <code>nits-table</code>. We simply pass <code>hover</code> to hover rows of table<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                hover
                        ></nits-table>
                    </portlet-type-3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-3 title="Small table"
                                    description="We need use component name <code>nits-table</code>. Here we use <code>headerType='bg'</code> for separator of headers and <code>headerColor='primary'</code> for colors. We simply pass <code>small</code> for small table<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                headerType="bg"
                                headerColor="brand"
                                small
                        ></nits-table>
                    </portlet-type-3>
                </div>
                <div class="col-xl-6">
                    <portlet-type-3 title="Stripped rows table"
                                    description="We need use component name <code>nits-table</code>. We simply pass <code>stripped</code> for stripped rows<br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                stripped
                        ></nits-table>
                    </portlet-type-3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-3 title="Basic bordered table"
                                    description="We need use component name <code>nits-table</code>. We simply pass <code>bordered</code> <br/>"
                    >
                        <nits-table
                                :contents="tableContents"
                                :headers="tableHeaders"
                                slot="content"
                                bordered
                        ></nits-table>
                    </portlet-type-3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "documentation-base-tables",
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
                ]
            }
        }
    }
</script>

<style scoped>

</style>
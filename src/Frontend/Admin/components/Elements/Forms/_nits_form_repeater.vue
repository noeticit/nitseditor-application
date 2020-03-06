<template>
    <div id="kt_repeater_1">
        <div class="form-group  row" id="kt_repeater_1">
            <label class="col-lg-2 col-form-label">{{ label }}</label>
            <div data-repeater-list="" class="col-lg-10">
                <div data-repeater-item class="form-group row align-items-center" v-for="(form, index) in elements">
                    <div v-for="item in form.form" :class="item.column ? 'col-md-'+item.column : ''">
                        <div class="kt-form__group--inline">
                            <div v-if="item.form_type === 'nits-input'">
                                <nits-input
                                    :label="item.config_elements.label"
                                    :type="item.config_elements.type"
                                    :placeholder="item.config_elements.placeholder"
                                    :hint="item.config_elements.hint"
                                    v-model="form[item.field_name]"
                                >
                                </nits-input>
                            </div>
                            <div v-else-if="item.form_type === 'nits-select'">
                                <nits-select
                                    :label="item.config_elements.label"
                                    :options="options[item.field_name]"
                                    v-model="form[item.field_name]"
                                    hint="Checing message"
                                >
                                </nits-select>
                            </div>
                            <div v-else-if="item.form_type === 'nits-checkbox'">
                                <nits-checkbox
                                    :label="item.config_elements.label"
                                    :options="options[item.field_name]"
                                    v-model="form[item.field_name]"
                                    :type="item.config_elements.type"
                                    :orientation="item.config_elements.orientation"
                                    :color="item.config_elements.color"
                                    :bold="item.config_elements.bold"
                                    :solid="item.config_elements.solid"
                                >
                                </nits-checkbox>
                            </div>
                            <div v-else-if="item.form_type === 'nits-date-picker'">
                                <nits-date-picker
                                    :label="item.config_elements.label"
                                    :placeholder="item.config_elements.placeholder"
                                    :hint="item.config_elements.hint"
                                    v-model="form[item.field_name]"
                                >
                                </nits-date-picker>
                            </div>
                            <div v-else-if="item.form_type === 'nits-date-time-picker'">
                                <nits-date-time-picker
                                    :label="item.config_elements.label"
                                    :placeholder="item.config_elements.placeholder"
                                    :hint="item.config_elements.hint"
                                    v-model="form[item.field_name]"
                                >
                                </nits-date-time-picker>
                            </div>
                            <div v-else-if="item.form_type === 'nits-dropzone'">
                                <nits-dropzone
                                    :label="item.config_elements.label"
                                    :hint="item.config_elements.hint"
                                    :maxFile="item.config_elements.maxFile"
                                    :maxFileSize="item.config_elements.maxFileSize"
                                    :uploadApi="item.config_elements.uploadApi"
                                    :acceptedFiles="item.config_elements.acceptedFiles"
                                    v-model="form[item.field_name]"
                                >
                                </nits-dropzone>
                            </div>
                            <div v-else-if="item.form_type === 'nits-multiselect'">
                                <nits-multiselect
                                    v-model="form[item.field_name]"

                                    :label="item.config_elements.label"
                                    :placeholder="item.config_elements.placeholder"
                                    :options="options[item.field_name]"
                                    :live_search="item.config_elements.live_search"
                                    :live_search_placeholder="item.config_elements.live_search_placeholder"
                                >
                                </nits-multiselect>
                            </div>
                            <div v-else-if="item.form_type === 'nits-multiselect-2'">
                                <nits-multiselect-2
                                    v-model="form[item.field_name]"
                                    :label="item.config_elements.label"
                                    :api="item.config_elements.api"
                                    :placeholder="item.config_elements.placeholder"
                                    :minimumInputLength="item.config_elements.minimumInputLength"
                                >
                                </nits-multiselect-2>
                            </div>
                        </div>
                        <div class="d-md-none kt-margin-b-10"></div>
                    </div>

                    <div class="col-md-4">
                        <div data-repeater-delete="" class="btn-sm btn btn-danger btn-pill" @click.prevent="deleteRow(index)">
                            <span>
                                <i class="la la-trash-o"></i>
                                <span>Delete</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-2 col-form-label"></label>
            <div class="col-lg-4">
                <div data-repeater-create="" class="btn btn btn-sm btn-brand btn-pill" @click.prevent="addRow">
                    <span>
                        <i class="la la-plus"></i>
                        <span>Add</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "nits-form-repeater",
        data() {
            return {
                errors: {},
                form: {},
                pushObjects: []
            }
        },
        props: {
            label: String,
            elements: Array,
            options: Object
        },
        created() {
            this.pushObjects = this.elements[0]
        },
        methods: {
            addRow() {
                this.elements.push(this.pushObjects)
            },
            deleteRow(index) {
                this.elements.splice(index, 1);
            }
        }
    }
</script>

<style scoped>

</style>

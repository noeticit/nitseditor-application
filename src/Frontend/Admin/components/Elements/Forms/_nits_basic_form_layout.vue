<template>
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Basic Form Layout
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form">
            <div class="kt-portlet__body">
                <div class="kt-section kt-section--first">
                    <div v-for="col in formElements">
                            <div v-if="col.form_type === 'nits-input'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-input
                                        :label="col.config_elements.label"
                                        :type="col.config_elements.type"
                                        :placeholder="col.config_elements.placeholder"
                                        :hint="col.config_elements.hint"
                                        v-model="form[col.field_name]"
                                        :error="errors[col.field_name]"
                                        @change="inputChanged($event, col.field_name)"
                                    >
                                    </nits-input>
                                </div>
                            </div>
                            <div v-else-if="col.form_type === 'nits-select'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-select
                                        :label="col.config_elements.label"
                                        :options="options[col.field_name]"
                                        v-model="form[col.field_name]"
                                        hint="Checing message"
                                        :error="errors[col.field_name]"
                                        @change="selectChange($event, col.field_name)"
                                    >
                                    </nits-select>
                                </div>
                            </div>
                            <div v-else-if="col.form_type === 'nits-checkbox'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-checkbox
                                        :label="col.config_elements.label"
                                        :options="options[col.field_name]"
                                        v-model="form[col.field_name]"
                                        :error="errors[col.field_name]"
                                        :multiple="col.config_elements.multiple"
                                        :type="col.config_elements.type"
                                        :orientation="col.config_elements.orientation"
                                        :color="col.config_elements.color"
                                        :bold="col.config_elements.bold"
                                        :solid="col.config_elements.solid"
                                        @change="changeCheckbox($event, col.field_name)"
                                    >
                                    </nits-checkbox>
                                </div>
                            </div>
                            <div v-else-if="col.form_type === 'nits-date-picker'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-date-picker
                                        :label="col.config_elements.label"
                                        :placeholder="col.config_elements.placeholder"
                                        :error="errors[col.field_name]"
                                        :hint="col.config_elements.hint"
                                        v-model="form[col.field_name]"
                                        @change="changeDatePicker($event, col.field_name)"
                                    >
                                    </nits-date-picker>
                                </div>

                            </div>
                            <div v-else-if="col.form_type === 'nits-date-time-picker'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-date-time-picker
                                        :label="col.config_elements.label"
                                        :error="errors[col.field_name]"
                                        :placeholder="col.config_elements.placeholder"
                                        :hint="col.config_elements.hint"
                                        v-model="form[col.field_name]"
                                        @change="changeDateTimePicker($event, col.field_name)"
                                    >
                                    </nits-date-time-picker>
                                </div>

                            </div>
                            <div v-else-if="col.form_type === 'nits-dropzone'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-dropzone
                                        :label="col.config_elements.label"
                                        :hint="col.config_elements.hint"
                                        :maxFile="col.config_elements.maxFile"
                                        :maxFileSize="col.config_elements.maxFileSize"
                                        :uploadApi="col.config_elements.uploadApi"
                                        :acceptedFiles="col.config_elements.acceptedFiles"
                                        v-model="form[col.field_name]"
                                        :error="errors[col.field_name]"
                                        @change="changeDateTimePicker($event, col.field_name)"
                                    >
                                    </nits-dropzone>
                                </div>

                            </div>
                            <div v-else-if="col.form_type === 'nits-multiselect'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-multiselect
                                        v-model="form[col.field_name]"

                                        :label="col.config_elements.label"
                                        :placeholder="col.config_elements.placeholder"
                                        :options="options[col.field_name]"
                                        :live_search="col.config_elements.live_search"
                                        :live_search_placeholder="col.config_elements.live_search_placeholder"
                                        @change="changeMultiSelect($event, col.field_name)"
                                        :error="errors[col.field_name]"
                                    >
                                    </nits-multiselect>
                                </div>

                            </div>
                            <div v-else-if="col.form_type === 'nits-multiselect-2'">
                                <div :class="col.column ? 'col-xl-'+col.column: ''">
                                    <nits-multiselect-2
                                        v-model="form[col.field_name]"
                                        :label="col.config_elements.label"
                                        :api="col.config_elements.api"
                                        :placeholder="col.config_elements.placeholder"
                                        :minimumInputLength="col.config_elements.minimumInputLength"
                                        @change="changeMultiSelect2($event, col.field_name)"
                                        :error="errors[col.field_name]"
                                    >
                                    </nits-multiselect-2>
                                </div>

                            </div>
                            <div v-else-if="col.form_type === 'nits-form-repeater'">
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <nits-form-repeater
                                    :elements="col.elements"
                                >

                                </nits-form-repeater>
                            </div>
                        </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <button type="reset" class="btn btn-primary" @click.prevent="submit">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
</template>

<script>
    import Swal from 'sweetalert2';
    import api from 'NitsModels/_api'

    export default {
        name: "nits-basic-form-layout",
        props: ['formElements', 'options', 'form', 'api_url'],
        data() {
            return {
                errors: [],
                loading: false,

            }
        },
        methods: {
            buttonClickEvent(e, child, parent) {
                console.log("clicked event")
                console.log(child + ' ' + parent)
            },
            inputChanged(event , field) {
                this.$emit('inputChanged', event, field)
            },
            selectChange(event, field) {
                this.$emit('selectChange', event, field)
            },
            changeCheckbox(event, field) {
                this.$emit('changeCheckbox', event, field)
            },
            changeDatePicker(event, field) {
                this.$emit('changeDatePicker', event, field)
            },
            changeDateTimePicker(event, field) {
                this.$emit('changeDateTimePicker', event, field)
            },
            changeMultiSelect(event, field) {
                this.$emit('changeMultiSelect', event, field)
            },
            changeMultiSelect2(event, field) {
                this.$emit('changeMultiSelect2', event, field)
            },
            submit() {
                this.loading = true
                new api().create(this.api_url, this.form).then(response => {
                    if(response.status === 200)
                    {
                        this.loading = false
                        Swal.fire({
                            title: "Holla!",
                            text: "Saved successfully",
                            type: "success"
                        }).then((a) => {
                            this.$emit('formWizardSubmit')
                        })
                    }
                }).catch((error) => {
                    Swal.fire({
                        title: "Oops!",
                        text: error.response.data.message,
                        type: "error",
                    })
                    this.errors = error.response.data.errors
                    this.loading = false

                })
            },
        }
    }
</script>

<style scoped>

</style>

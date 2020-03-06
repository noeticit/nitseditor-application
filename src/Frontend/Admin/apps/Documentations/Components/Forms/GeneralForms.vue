<template>
    <div>
        <base-subheader title="Forms" icon="la-home" heading="General Forms" description="General Forms Description"></base-subheader>
        <div class="m-content">
            <div class="row">
                <div class="col-xl-6">
                    <portlet-type-form></portlet-type-form>
                </div>
                <div class="col-xl-6">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Base Form Controls
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group m--margin-top-10">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                        The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                    </div>
                                </div>
                                <nits-input
                                        label="Email"
                                        type="email"
                                        inputStyle="pill"
                                        placeholder="Enter your email"
                                        v-model="email"
                                        formControl
                                        addonType="left-right-icon"
                                        :addon="{ leftAddon: 'la-map-marker', rightAddon: 'la-unlock-alt'}"
                                >
                                </nits-input>
                                <nits-input
                                        label="Password"
                                        type="password"
                                        placeholder="Enter password"
                                        v-model="password"
                                        error="Invalid password"
                                >
                                </nits-input>
                                <div class="form-group m-form__group">
                                    <static-type-1 label="Static:" message="email@example.com"></static-type-1>
                                </div>
                                <nits-select
                                        label="Example select"
                                        :options="options"
                                        v-model="selectedNumber"
                                        error="Invalid Input"
                                >
                                </nits-select>
                                <nits-select
                                        label="Example select"
                                        :options="options"
                                        v-model="selectedNumber"
                                        multiple
                                        error="Multiple not selected"
                                >
                                </nits-select>
                                <nits-textarea
                                        label="Example textarea"
                                        :rows="3"
                                        error="Enter valid text"
                                        v-model="textarea"
                                >
                                </nits-textarea>
                                <nits-file-input
                                        label="File Browser"
                                        v-model="fileInput"
                                >
                                </nits-file-input>
                                <nits-checkbox
                                        label="Default CheckBox"
                                        :options="[{label: 'Default', value: 'default'}, {label: 'Testing', value: 'testing'}]"
                                        v-model="checkboxTest"
                                        type="radio"
                                >
                                </nits-checkbox>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <button @click.prevent class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <nits-form-portlet
                            title="Hello World"
                            info="Testing Description area <code>Test</code>"
                            headIcon="flaticon-multimedia"
                            headSubTitle="form sub title"
                            creative
                            headerLine
                            creativeColor="info"
                            headSolidBg="success"
                            apiUrl="test/benevoto"
                            :formElements="formElements"
                    >
                    </nits-form-portlet>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "general-forms",
        data() {
            return {
                email: 'test@example.com',
                password: '',
                selectedNumber: '2',
                options: [
                    {option: 'Select one'},
                    {option: '1', value: '1'},
                    {option: '2', value: '2'},
                    {option: '3', value: '3'},
                    {option: '4', value: '4'},
                    {option: '5', value: '5'}
                ],
                textarea: '',
                fileInput: '',
                checkboxTest: ['default'],
                formElements: [
                    {
                        form: 'nits-input',
                        attrs: {
                            label: 'Email',
                            type: 'email',
                            inputStyle: "pill",
                            placeholder: "Enter your email",
                            formControl: true,
                            addonType: "left-right-icon",
                            addon: { leftAddon: 'la-map-marker', rightAddon: 'la-unlock-alt'}
                        }
                    }
                ]
            }
        },
        watch: {
            email () {
                console.log('email console '+this.email)
            },
            password () {
                console.log('password '+this.password)
            },
            selectedNumber () {
                console.log('from select '+this.selectedNumber)
            },
            textarea() {
                console.log('From text area '+this.textarea)
            },
            fileInput() {
                console.log(this.fileInput)
            },
            checkboxTest() {
                console.log(this.checkboxTest)
            }
        }
    }
</script>

<style scoped>

</style>
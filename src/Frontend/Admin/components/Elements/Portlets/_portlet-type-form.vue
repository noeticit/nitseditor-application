<template>
    <div>
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
                            label="Email Address"
                            type="email"
                            hint="We'll never share your email with anyone else."
                            placeholder="Enter email"
                    >
                    </nits-input>
                    <nits-input
                            label="Password"
                            type="password"
                            placeholder="Enter password"
                    >
                    </nits-input>
                    <div class="form-group m-form__group">
                        <static-type-1 label="Static:" message="email@example.com"></static-type-1>
                    </div>
                    <nits-select label="Example select" :options="options"></nits-select>
                    <nits-select
                            label="Example Multiple select"
                            :options="options"
                            multiple
                    >
                    </nits-select>
                    <nits-textarea
                            label="Example textarea"
                            :rows="3"
                    >
                    </nits-textarea>
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
</template>

<script>
    export default {
        name: "portlet-type-form",
        data() {
            return {
                options: [
                    {option: '1', value: '1'},
                    {option: '2', value: '2'},
                    {option: '3', value: '3'},
                    {option: '4', value: '4'},
                    {option: '5', value: '5'}
                ],
                email: ''
            }
        },
        watch: {
            email(val) {
                console.log(val)
            }
        }
    }
</script>

<style scoped>

</style>
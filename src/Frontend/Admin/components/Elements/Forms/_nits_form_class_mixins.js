import Vue from 'vue'

export default Vue.extend({
    name: 'nits-form-classes',
    props: {
        formControl: Boolean,
        inputStyle: String,
        inputSize: String,
        disabled: Boolean
    },
    methods: {
        labelClasses() {
            let labelClass = ''
            labelClass = this.formControl && !this.addonType ? 'col-2 col-form-label' : ''

            return labelClass
        },
        formClasses() {
            let formClass = ''
            formClass = this.formControl && !this.addonType ? 'form-group m-form__group row' : 'form-group m-form__group'

            return formClass
        },
        inputClasses() {
            let inputClass =''
            inputClass = this.formControl ? 'col-10 ' : ''
            inputClass = this.addonType ? 'input-group m-input-group '+this.layoutStyles() : inputClass
            return inputClass
        },
        layoutStyles() {
            return this.inputStyle ? 'm-input-group--'+this.inputStyle : ''
        },
        inputStyles() {
            let inputClass = ''
            switch (this.inputStyle) {
                case 'air':
                    inputClass = 'm-input--air'
                    break;
                case 'pill':
                    inputClass = 'm-input--air m-input--pill'
                    break;
                case 'square':
                    inputClass = 'm-input--square'
                    break;
                case 'solid':
                    inputClass = 'm-input--solid'
                    break;
                default:
                    break;
            }
            return inputClass;
        },
        inputSizes() {
            let inputBox = ''
            switch (this.inputSize) {
                case 'large':
                    inputBox = 'form-control-lg'
                    break;
                case 'small':
                    inputBox = 'form-control-sm'
                    break;
                default:
                    break;
            }

            return inputBox
        },
        isDisabled() {
            return this.disabled
        }
    },
})

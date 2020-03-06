import NitsFormClasses from './_nits_form_class_mixins'

export default {
    name: 'nits-select',
    data() {
        return {
        }
    },
    mixins: [
        NitsFormClasses
    ],
    props: {
        label: String,
        options: Array,
        multiple: Boolean,
        error: Array,
        hint: String,
        value: String
    },
    methods: {
        selectedCheck(value) {
            return value === this.value
        }
    },
    computed: {
        selectOptions() {
            if(this.options)
                return this.options;
            else
                return [];
        }
    },
    render (createElement) {

        //Help action text
        let helpText = this.hint ? createElement('span', { class: 'm-form__help kt-font-info' }, this.hint) : ''
        let lineBreak = this.hint ? createElement('br') : ''

        //Error Text
        let errorText = this.error ? this.error.map(a => createElement('div', { class: 'invalid-feedback' }, a)) : ''

        //For multi select
        let element =''
        if(this.multiple)
        {
            element = createElement('div', { class: this.inputClasses() }, [
                createElement('select', {
                        class: 'form-control '+this.inputSizes()+' m-input '+this.inputStyles()+ (this.error ? ' is-invalid ' : ''),
                        attrs: { multiple: '' },
                        on: {
                            input: (event) => {
                                this.$emit('input', event.target.value)
                            }
                        }},
                    this.selectOptions.map(a => createElement('option', {attrs: { value: a.value, selected: this.selectedCheck(a.value) }}, a.option))
                )
            ])
        }
        else
        {
            element = createElement('div', { class: this.inputClasses() }, [
                createElement('select', {
                        class: 'form-control m-input'+ (this.error ? ' is-invalid ' : ''),
                        on: {
                            input: (event) => {
                                this.$emit('input', event.target.value)
                            },
                            change: (event) => {
                                this.$emit('change', event.target.value)
                            }
                        }},
                    this.selectOptions.map(a => createElement('option', {attrs: { value: a.value, selected: a.value === this.value }}, a.option))
                ), errorText
            ])
        }

        //Final render
        return createElement('div', { class: this.formClasses() }, [
            createElement('label', { class: this.labelClasses() }, this.label),
            element, helpText,
        ])
    }
}

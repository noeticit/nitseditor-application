import NitsFormClasses from './_nits_form_class_mixins'

export default {
    name: 'nits-textarea',
    mixins: [
        NitsFormClasses
    ],
    props: {
        label: String,
        rows: Number,
        error: String,
        hint: String,
        value: String
    },
    render (createElement) {

        //Help action text
        let helpText = this.hint ? createElement('span', { class: 'm-form__help' }, this.hint) : ''
        let lineBreak = this.hint ? createElement('br') : ''

        //Error Text
        let errorText = this.error ? createElement('span', { class: 'm-form__help m--font-danger' }, this.error) : ''

        return createElement('div', { class: this.formClasses() }, [
            createElement('label', { class: this.labelClasses() }, this.label),
            createElement('div', { class: this.inputClasses() }, [
                createElement('textarea', {
                    class: 'form-control m-input '+this.inputStyles(),
                    on: {
                        input: (event) => {
                            this.$emit('input', event.target.value)
                        }
                    },
                    attrs: {
                        rows: this.rows,
                        value: this.value
                    }
                })
            ]),
            helpText, lineBreak, errorText
        ])
    }
}
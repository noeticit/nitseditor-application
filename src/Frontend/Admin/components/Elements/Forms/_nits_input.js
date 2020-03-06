import NitsFormClasses from './_nits_form_class_mixins'

export default {
    name: "nits-input",
    mixins: [
        NitsFormClasses
    ],
    props: {
        label: String,
        hint: String,
        error: Array,
        type: String,
        placeholder: String,
        addonType: String,
        addon: Object,
        value: String
    },
    render (createElement) {

        //Help action text
        let helpText = this.hint ? createElement('span', { class: 'form-text text-muted kt-font-info' }, this.hint) : ''
        let lineBreak = this.hint ? createElement('br') : ''

        //Error Text
        let errorText = this.error ? this.error.map(a => createElement('div', { class: 'invalid-feedback' }, a)) : ''


        //Addons for text, icons and internal-icons
        let leftAddon = ''
        let rightAddon = ''
        switch(this.addonType) {
            case 'left':
                leftAddon = createElement('div', { class: 'input-group-prepend' }, [
                    createElement('span', { class: 'input-group-text' }, this.addon.leftAddon)
                ])
                break;
            case 'right':
                rightAddon = createElement('div', { class: 'input-group-append' }, [
                    createElement('span', { class: 'input-group-text' }, this.addon.rightAddon)
                ])
                break;
            case 'joint':
                leftAddon = createElement('div', { class: 'input-group-prepend' }, [
                    createElement('span', { class: 'input-group-text' }, this.addon.leftAddon),
                    createElement('span', { class: 'input-group-text' }, this.addon.rightAddon)
                ])
                break;
            case 'left-right':
                leftAddon = createElement('div', { class: 'input-group-prepend' }, [
                    createElement('span', { class: 'input-group-text' }, this.addon.leftAddon)
                ])
                rightAddon = createElement('div', { class: 'input-group-append' }, [
                    createElement('span', { class: 'input-group-text' }, this.addon.rightAddon)
                ])
                break;
            case 'left-icon':
                leftAddon = createElement('div', { class: 'input-group-prepend' }, [
                    createElement('span', { class: 'input-group-text' }, [createElement('i', { class: 'la '+this.addon.leftAddon } )])
                ])
                break;
            case 'right-icon':
                rightAddon = createElement('div', { class: 'input-group-append' }, [
                    createElement('span', { class: 'input-group-text' }, [createElement('i', { class: 'la '+this.addon.rightAddon } )])
                ])
                break;
            case 'joint-icon':
                leftAddon = createElement('div', { class: 'input-group-prepend' }, [
                    createElement('span', { class: 'input-group-text' }, [createElement('i', { class: 'la '+this.addon.leftAddon } )]),
                    createElement('span', { class: 'input-group-text' }, [createElement('i', { class: 'la '+this.addon.rightAddon } )])
                ])
                break;
            case 'left-right-icon':
                leftAddon = createElement('div', { class: 'input-group-prepend' }, [
                    createElement('span', { class: 'input-group-text' }, [createElement('i', { class: 'la '+this.addon.leftAddon } )])
                ])
                rightAddon = createElement('div', { class: 'input-group-append' }, [
                    createElement('span', { class: 'input-group-text' }, [createElement('i', { class: 'la '+this.addon.rightAddon } )])
                ])
                break;
            default:
                break;
        }

        //Final render
        return createElement('div', { class: this.formClasses() }, [
            createElement('label', { class: this.labelClasses() }, this.label),
            createElement('div', { class: this.inputClasses() }, [ leftAddon,
                createElement('input', {
                    class: 'form-control '+this.inputSizes()+' m-input '+this.inputStyles()+ (this.error ? ' is-invalid ' : ''),
                    attrs: { type: this.type, placeholder: this.placeholder, disabled: this.isDisabled(), value: this.value },
                    on: {
                        input: (event) => {
                            this.$emit('input', event.target.value)
                        }
                    }
                // }), rightAddon, this.inputStyle != 'pill' ? helpText : '', this.inputStyle != 'pill' ? lineBreak : '', this.inputStyle != 'pill' ? errorText : ''
                }), rightAddon, this.inputStyle != 'pill' ? helpText : '', this.inputStyle != 'pill' ? errorText : ''
            // ]),  this.inputStyle === 'pill' ? helpText : '', this.inputStyle === 'pill' ? lineBreak : '', this.inputStyle === 'pill' ? errorText : ''
            ]),  this.inputStyle === 'pill' ? helpText : '', this.inputStyle === 'pill' ? errorText : ''
        ])
    }
}

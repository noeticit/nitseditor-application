export default {
    name: "nits-checkbox",
    data() {
        return {
            checkbox: []
        }
    },
    props: {
        label: String,
        options: Array,
        value: Array,
        type: String,
        orientation: String,
        multiple: Boolean,
        color: String,
        bold: Boolean,
        solid: Boolean
    },
    methods: {
        checkedCheck(value) {
            return this.checkbox.indexOf(value) > -1 ? true : false;
        },
        checkboxColor() {
            var c = this.solid ? ' kt-checkbox--solid' : ''
            var e = this.bold ? 'kt-checkbox--bold' : ''
            return this.color ? e+c+' kt-checkbox--'+this.color : null;
        }
    },
    created() {
        this.checkbox = this.value === 'undefined' ? [] : this.value
    },
    render (createElement) {
        return createElement('div', { class: 'form-group'}, [
            createElement('label', this.label),
            createElement('div', { class: 'kt-checkbox-'+this.orientation },
                this.options.map(a => createElement('label', { class: 'kt-checkbox ' +this.checkboxColor() }, [
                    createElement('input', {
                        attrs: { type: this.type, value: a.value },
                        domProps: { checked: this.checkedCheck(a.value) },
                        on: {
                            click: (event) => {
                                if(this.multiple)
                                {
                                    var index = this.checkbox.indexOf(event.target.value);
                                    if (index > -1) {
                                        this.checkbox.splice(index, 1);
                                    }
                                    else
                                        this.checkbox.push(event.target.value)
                                }
                                else
                                    this.checkbox = [event.target.value]

                                this.$emit('input', this.checkbox)
                            },
                            change: (event) => {
                                this.$emit('change', event.target.value)
                            },

                        }
                    }), a.label, createElement('span')
                ])))
        ])
    }
}

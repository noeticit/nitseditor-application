export default {
    name: 'nits-file-input',
    props: {
        label: String,
        value: String
    },
    render (createElement) {
        return createElement('div', { class: 'form-group m-form__group'}, [
            createElement('label', this.label),
            createElement('div'),
            createElement('div', { class: 'custom-file'},[
                createElement('input', {
                    class: 'custom-file-input',
                    attrs: { type: 'file', value: this.value },
                    domProps: {
                        value: self.value
                    },
                    on: {
                        input: (event) => {
                            var reader = new FileReader()
                            reader.readAsDataURL(event.target.files[0])
                            reader.onload = () => {
                                const docs = {
                                    name: event.target.files[0].name,
                                    size: event.target.files[0].size,
                                    lastModifiedDate: event.target.files[0].lastModifiedDate,
                                    base64: reader.result
                                }
                                this.$emit('input', docs)
                            };
                        }
                    }
                }),
                createElement('label', { class: 'custom-file-label'}, 'Choose File')
            ])
        ])
    }
}
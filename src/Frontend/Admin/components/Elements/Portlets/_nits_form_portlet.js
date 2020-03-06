import api from 'NitsModels/_api.js'
import swal from 'sweetalert';

export default {
    name: 'nits-form-portlet',
    data() {
        return {
            alert: false,
            statusCode: '',
            message: '',
            form: {},
            error: {},
            loading: false
        }
    },
    props: {
        title: String,
        info: String,
        headIcon: String,
        headSubTitle: String,
        nonShadow: Boolean,
        skins: String,
        bordered: Boolean,
        rounded: Boolean,
        headerLine: Boolean,
        creativeColor: String,
        headSolidBg: String,
        formElements: Array,
        apiUrl: String,
        backUrl: String,
        action: String
    },
    created() {
        if (this.action === 'update')
        {
            let formValue = new Set(this.formElements);
            for (var key_value of formValue) {
                if (typeof key_value.attrs.value != 'undefined') {
                    this.form[key_value.field_name] = key_value.attrs.value
                }
            }
        }
    },
    computed: {
        computedFormElements() {
            return this.formElements.length ? JSON.parse(JSON.stringify(this.formElements)) : []
        }
    },
    methods: {
        getClasses() {
            let portletClass = this.nonShadow ? 'm-portlet m-portlet--unair ' : 'm-portlet '

            portletClass = this.creativeColor ? portletClass + ' m-portlet--creative m-portlet--first ' : portletClass
            portletClass = this.bordered ? portletClass + ' m-portlet--bordered ' : portletClass
            portletClass = this.rounded ? portletClass + ' m-portlet--rounded ' : portletClass
            portletClass = this.headerLine ? portletClass : portletClass + ' m-portlet--bordered-semi '
            portletClass = this.skins ? portletClass += 'm-portlet--skin-dark m--bg-' + this.skins + ' ' : portletClass
            portletClass = this.headSolidBg ? portletClass += ' m-portlet--' + this.headSolidBg + ' m-portlet--head-solid-bg ' : portletClass

            return portletClass
        },
        submitForm() {
            this.error = {}
            this.loading = true
            if (this.action === 'create')
                new api().create(this.apiUrl, this.form).then(response => {
                    this.loading = false
                    swal("Holla!", "Saved successfully", "success").then((a) => {
                        if(a){
                            this.$router.push({ name: this.backUrl })
                        }
                    })
                }).catch((error) => {
                    this.error = this.errorMessages(error)
                    this.loading = false
                    swal("Oops!", this.error.message, "error")
                })
            else if (this.action === 'update')
                new api().update(this.apiUrl, this.form).then(response => {
                    this.loading = false
                    swal("Holla!", "Saved successfully", "success").then((a) => {
                        if(a){
                            this.$router.push({ name: this.backUrl })
                        }
                    })
                }).catch((error) => {
                    this.error = this.errorMessages(error)
                    this.loading = false
                    swal("Oops!", this.error.message, "error")
                })
        },
        errorMessages(error) {
            const errorMessage = {
                message: ''
            }
            switch (error.response.status) {
                case 403:
                    errorMessage.message = error.response.data.message;
                    break;
                case 405:
                    errorMessage.message = 'Method Not Allowed check your api';
                    break;
                case 404:
                    errorMessage.message = 'API url not found';
                    break;
                case 422:
                    errorMessage.message = error.response.data.message;
                    errorMessage.errors = error.response.data.errors;
                    break;
                case 500:
                    errorMessage.message = 'Server Error';
                    break;
                default:
                    break;
            }
            return errorMessage

        },
    },
    render(createElement) {

        let element = createElement('h3', { class: 'm-portlet__head-text' }, this.title)

        if(this.headIcon)
        {
            let creativeElement = ''
            let header = ''

            if(this.creativeColor)
            {
                //If header sub-title is there.
                element = this.headSubTitle ? createElement('h3', { class: 'm-portlet__head-text' }, this.headSubTitle) : element

                creativeElement = createElement('h2', { class: 'm-portlet__head-label m-portlet__head-label--'+this.creativeColor }, [
                    createElement('span', this.title)
                ])

                header = createElement('span', { class: 'm-portlet__head-icon m--hide' }, [
                    createElement('i', { class: this.headIcon })
                ])
            }
            else
            {
                //If header sub-title is there.
                element = this.headSubTitle ? createElement('h3', { class: 'm-portlet__head-text' }, [this.title, createElement('small', this.headSubTitle)]) : element

                header = createElement('span', { class: 'm-portlet__head-icon' }, [
                    createElement('i', { class: this.headIcon })
                ])
            }

            //Final header render
            element = createElement('div', { class: 'm-portlet__head-title' }, [
                header, element, creativeElement
            ])
        }
        else
        {
            element = createElement('div', { class: 'm-portlet__head-title' }, [
                element
            ])
        }

        //Footer element
        let footerElement = ''
        if(this.loading)
        {
            footerElement = createElement('div', { class: 'm-portlet__foot m-portlet__foot--fit' }, [
                createElement('div', { class: 'm-form__actions' }, [
                    createElement('button', {
                        class: 'btn btn-primary m-btn m-loader m-loader--light m-loader--right',
                        on: {
                            click:  (event) => {
                                event.preventDefault()
                                //this.submitForm()
                            }
                        }
                    }, 'Submit'),
                    createElement('span', ' '),
                    createElement('router-link', { attrs: { to: { name: this.backUrl} } }, [
                        createElement('button', { class: 'btn btn-secondary' }, 'Back')
                    ])
                ])
            ])
        }
        else
        {
            footerElement = createElement('div', { class: 'm-portlet__foot m-portlet__foot--fit' }, [
                createElement('div', { class: 'm-form__actions' }, [
                    createElement('button', {
                        class: 'btn btn-primary',
                        on: {
                            click:  (event) => {
                                event.preventDefault()
                                this.submitForm()
                            }
                        }
                    }, 'Submit'),
                    createElement('span', ' '),
                    createElement('router-link', { attrs: { to: { name: this.backUrl} } }, [
                        createElement('button', { class: 'btn btn-secondary' }, 'Back')
                    ])
                ])
            ])
        }

        //Error or Info element..
        let infoElement = ''
        if (!('message' in this.error))
            infoElement = createElement('div', { class: 'alert m-alert m-alert--default', attrs: { role: 'alert' } }, this.info)
        else
            infoElement = createElement('div', { class: 'm-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show', attrs: { role: 'alert' } }, [
                createElement('div', { class: 'm-alert__icon'}, [
                    createElement('i', { class: 'flaticon-exclamation-1'}),
                    createElement('span')
                ]),
                createElement('div', {class: 'm-alert__text'}, [
                    createElement('strong', 'Oops! '),
                    this.error.message
                ])
            ])

        return createElement('div', { class: this.getClasses() }, [
            createElement('div', { class: 'm-portlet__head' }, [
                createElement('div', { class: 'm-portlet__head-caption' }, [element])
            ]),
            createElement('form', { class: 'm-form m-form--fit m-form--label-align-right' }, [
                createElement('div', { class: 'm-portlet__body' }, [
                    createElement('div', { class: 'form-group m-form__group m--margin-top-10' }, [infoElement]),
                    this.computedFormElements.map((a, index) => {
                        a.config_elements = JSON.parse(JSON.stringify(this.formElements[index])).config_elements
                        if(this.error && this.error.errors && typeof this.error.errors[a.field_name] != 'undefined') {
                            a.config_elements.error = this.error.errors[a.field_name][0];
                            return createElement(a.nitsFormType, { attrs: a.config_elements, on: {
                                input: (event) => {
                                    this.form[a.field_name] = event
                                }
                            }})
                        }
                        else
                        {
                            a.config_elements = JSON.parse(JSON.stringify(this.formElements[index])).config_elements
                            return createElement(a.nitsFormType, { attrs: a.config_elements, on: {
                                    input: (event) => {
                                        this.form[a.field_name] = event
                                    }
                                }})
                        }
                    })
                ]),
                footerElement
            ])
        ])
    }
}

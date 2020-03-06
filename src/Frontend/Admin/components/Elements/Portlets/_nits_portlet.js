export default {
    name: 'nits-portlet',
    props: {
        title: String,
        subTitle: String,
        headIcon: String,
        headSubTitle: String,
        footer: Boolean,
        footerText: String,
        nonShadow: Boolean,
        headActions: Array,
        skins: String,
        bordered: Boolean,
        rounded: Boolean,
        headerLine: Boolean,
        actionType: String,
        creativeColor: String,
        headSolidBg: String
    },
    methods: {
        getClasses() {
            let portletClass = this.nonShadow ? 'm-portlet m-portlet--unair ' : 'm-portlet '

            portletClass = this.creativeColor ? portletClass+' m-portlet--creative m-portlet--first ' : portletClass
            portletClass = this.bordered ? portletClass+' m-portlet--bordered ' : portletClass
            portletClass = this.rounded ? portletClass+ ' m-portlet--rounded ' : portletClass
            portletClass = this.headerLine ? portletClass : portletClass+ ' m-portlet--bordered-semi '
            portletClass = this.skins ? portletClass += 'm-portlet--skin-dark m--bg-'+this.skins+' ' : portletClass
            portletClass = this.headSolidBg ? portletClass += ' m-portlet--'+this.headSolidBg+' m-portlet--head-solid-bg ' : portletClass

            return portletClass
        }
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

        //Header action icons
        let headerActionIcons = ''
        if(this.headActions)
        {
            switch(this.actionType)
            {
                case 'icons':
                    headerActionIcons = createElement('div', { class: 'm-portlet__head-tools' }, [
                        createElement('ul', { class: 'm-portlet__nav' },
                            this.headActions.map(a => createElement('li', { class: 'm-portlet__nav-item' }, [
                                createElement('a', { class: 'm-portlet__nav-link m-portlet__nav-link--icon'}, [
                                    createElement('i', { class: 'la '+a.icons})
                                ])
                            ]))
                        )
                    ])
                    break;
                case 'buttons':
                    headerActionIcons = createElement('div', { class: 'm-portlet__head-tools' }, [
                        createElement('ul', { class: 'm-portlet__nav' },
                            this.headActions.map(a => createElement('li', { class: 'm-portlet__nav-item' }, [
                                createElement('a', { class: 'm-portlet__nav-link btn btn-secondary m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill'}, [
                                    createElement('i', { class: 'la '+a.icons})
                                ])
                            ]))
                        )
                    ])
                    break;
                case 'toolbar':
                    headerActionIcons = createElement('div', { class: 'm-portlet__head-tools' }, [
                        createElement('div', { class: 'btn-group', attrs: { role: 'group', 'aria-label': 'Button group with nested dropdown' } },
                            this.headActions.map(a => createElement('button', { class: 'm-btn btn btn-secondary', attrs: { type: 'button' } },  [
                                createElement('i', { class: 'la '+a.icons})
                            ]))
                        )
                    ])
                    break;
                case 'toolbar-background':
                    headerActionIcons = createElement('div', { class: 'm-portlet__head-tools' }, [
                        createElement('div', { class: 'btn-group m-btn-group m-btn-group--pill', attrs: { role: 'group', 'aria-label': '...' } },
                            this.headActions.map(a => createElement('button', { class: 'm-btn btn btn-brand', attrs: { type: 'button' } },  [
                                createElement('i', { class: 'la '+a.icons})
                            ]))
                        )
                    ])
                    break;
                default:
                    headerActionIcons = createElement('div', { class: 'm-portlet__head-tools' }, [
                        createElement('ul', { class: 'm-portlet__nav' },
                            this.headActions.map(a => createElement('li', { class: 'm-portlet__nav-item' }, [
                                createElement('a', { class: 'm-portlet__nav-link m-portlet__nav-link--icon'}, [
                                    createElement('i', { class: 'la '+a.icons})
                                ])
                            ]))
                        )
                    ])
                    break;
            }

        }

        //Footer element
        let footerElement = ''
        if(this.footer)
        {
            let footerText = createElement('div', { class: 'col-lg-6 m--valign-middle' }, 'Portlet footer text')

            let footerActionButton = createElement('div', { class: 'col-lg-6 m--align-right' }, [
                createElement('button', { class: 'btn btn-brand' }, 'Submit'),
                createElement('span', { class: 'm--margin-left-10' }, [ 'or ',
                    createElement('a', { class: 'm-link m--font-bold' }, 'Cancel')
                ])
            ])

            footerElement = createElement('div', { class: 'm-portlet__foot' }, [
                createElement('div', { class: 'row align-items-center'}, [
                    footerText, footerActionButton
                ])
            ])
        }

        return createElement('div', { class: this.getClasses() }, [
            createElement('div', { class: 'm-portlet__head' }, [
                createElement('div', { class: 'm-portlet__head-caption' }, [element]), headerActionIcons
            ]),
            createElement('div', { class: 'm-portlet__body' }, [
                createElement('div', { class: 'm-section' }, [
                    createElement('span', { class: 'm-section__sub', domProps: { innerHTML: this.subTitle } }),
                    createElement('div', { class : 'm-section__content' }, this.$slots.content)
                ])
            ]),
            footerElement
        ])
    }
}
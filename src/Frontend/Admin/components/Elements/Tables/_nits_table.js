export default {
    name: "nits-table",
    methods: {
        getClasses() {
            var ele_class = 'table m-table ';

            //For header background and separator with colors
            switch (this.headerType)
            {
                case 'bg':
                    ele_class += 'm-table--head-bg-'+this.headerColor+' '
                    break;
                case 'separator':
                    ele_class += 'm-table--head-separator-'+this.headerColor+' '
                    break;
                default:
                    break;
            }

            // For Border and its colors
            if(this.bordered) {
                if(this.borderColor)
                    ele_class += 'table-bordered m-table--border-'+this.borderColor+' '
                else
                    ele_class += 'table-bordered '
            }

            //Fro small tables
            if(this.small)
                ele_class += 'table-sm '

            //For stripped tables
            if(this.stripped)
                ele_class += 'table-striped '

            //For hover tables
            if(this.hover)
                ele_class += 'table-hover '
            
            return ele_class;
        }
    },
    props: {
        headers: Array,
        contents: Array,
        headerType: String,
        headerColor: {
            type: String,
            default: 'brand'
        },
        bordered: Boolean,
        borderColor: String,
        stripped: Boolean,
        small: Boolean,
        hover: Boolean,
        action: Boolean
    },
    created() {
        if(this.action)
        {
            this.headers.push({title : "View", key: 'fa-eye'})
            this.headers.push({title : "Delete", key: 'fa-trash-o'})
        }
    },
    render (createElement) {
        return createElement('div', { class: 'table-responsive'}, [
            createElement('table', { class: this.getClasses() }, [
                createElement('thead', {}, [
                    createElement('tr', this.headers.map((a) => {
                        if(a.title === 'View' || a.title === 'Delete')
                            return createElement('th', {class: 'text-center'}, a.title)
                        else
                            return createElement('th', a.title)
                    }))
                ]),
                createElement('tbody', this.contents.map((b) =>{
                    return createElement('tr', this.headers.map((c) =>{
                        if(c['title'] === "View" || c['title'] === "Delete")
                            return createElement('td', {class: 'text-center'}, [
                                createElement('button', { class: 'btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air'}, [
                                    createElement('i', {class: 'fa '+c['key']})
                                ])
                            ])
                        else
                            return createElement('td', b[c['key']] )
                    }))
                }))
            ])
        ])
    }
}


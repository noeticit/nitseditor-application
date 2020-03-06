export default {
    name: "nits-spinners",
    props: {
        loading: Boolean,
        height: Number,
        width: Number,
        color: String,
        design: String
    },
    render(createElement) {
        return createElement('div', [
            createElement(this.design, {
                attrs: {
                    loading: this.loading,
                    height: this.height,
                    width: this.width,
                    color: this.color
                }
            })
        ])
    }
}
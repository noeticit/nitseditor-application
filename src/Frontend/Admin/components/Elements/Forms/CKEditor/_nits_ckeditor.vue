<template>
    <div>
        <textarea :ref="identity"></textarea>
    </div>
</template>

<script>
    import Toolbar from './toolbar';
    export default {
        name: "nits-ckeditor",
        props: {
            identity: String,
            config: {
                type: Object,
                default: () => { return {} }
            },
            currentBody: String
        },
        data() {
            return {
                default: {
                    toolbar: this.toolbar(),
                    language: 'en',
                    height: '20rem',
                    stylesSet: 'default',
                    format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div;ul',
                    format_ul: {element: 'ul', name: 'list', attributes: { 'class': 'list'}}
                },
                editor: ''
            }
        },
        methods: {
            toolbar() {
                return Toolbar[this.config.toolbar || 'full'];
            },
            makeEditor() {
                this.editor = CKEDITOR.replace(this.$refs[this.identity])
                console.log(CKEDITOR.plugins.loaded)
                // this.editor = CKEDITOR.replace(this.$refs[this.identity], Object.assign({}, this.default, this.config))
                this.editor.on('change', this.emitEvent)
                this.editor.setData(this.currentBody)
            },
            setData(value) {
                this.editor.setData(value)
            },
            emitEvent() {
                this.$emit('input', this.editor.getData())
            }
        },
        mounted() {
            this.makeEditor()
        }
    }
</script>

<style scoped>

</style>

<script>
    export default {
        name: "nits-timepicker",
        props: {
            identity: String,
            placeholder: String,
            label: String,
            error: Array,
            value: String,
            showSeconds: Boolean,
            showMeridian: Boolean,
            snapToStep: Boolean
        },
        mounted() {
            require('bootstrap-timepicker')

            const self = this;
            var KTBootstrapTimepicker = function () {
                // Private functions
                var demos = function () {
                    // minimum setup
                    $('#'+self.identity).timepicker({
                        minuteStep: 1,
                        defaultTime: '',
                        showSeconds: self.showSeconds,
                        showMeridian: self.showMeridian,
                        snapToStep: self.snapToStep
                    }).on('changeTime.timepicker', function(e) {
                        self.$emit('input', e.target.value);
                    });
                }

                return {
                    // public functions
                    init: function() {
                        demos();
                    }
                };
            }();

            jQuery(document).ready(function() {
                KTBootstrapTimepicker.init();
            });
        },
        render(createElement) {
            let errorElement = this.error ? createElement('div', { class: 'invalid-feedback'}, this.error) : null;
            return createElement('div', {class: 'form-group'}, [
                createElement('label', {class: 'col-form-label'}, this.label),
                createElement('div', {class: ''}, [
                    createElement('input', {
                        class: 'form-control ' + (this.error ? 'is-invalid' : ''),
                        attrs: {type: 'text', placeholder: this.placeholder, value: this.value, id: this.identity},
                        on: {
                            input: (event) => {
                                this.$emit('input', event.target.value)
                            },
                            change: (event) => {
                                console.log('changed')
                            }
                        }
                    }),
                    errorElement
                ])
            ])
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../theme/vendors/line-awesome/css/line-awesome.css";
    @import "./../../../../../../../../../node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css";
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/components/vendors/bootstrap-timepicker/bootstrap-timepicker";
</style>

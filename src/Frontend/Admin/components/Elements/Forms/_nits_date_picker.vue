<script>
    import {KTUtil} from 'NitsTheme/framework/lib/util';

    require('bootstrap-datepicker')

    export default {
        name: "nits-date-picker",
        props: {
            label: String,
            placeholder: String,
            value: String,
            hint: String,
            error: String,
            identity: String
        },
        mounted() {
            const self = this;
            //Date range picker.
            var KTBootstrapDatepicker = function () {

                var arrows;
                if (KTUtil.isRTL()) {
                    arrows = {
                        leftArrow: '<i class="la la-angle-right"></i>',
                        rightArrow: '<i class="la la-angle-left"></i>'
                    }
                } else {
                    arrows = {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>'
                    }
                }

                // Private functions
                var demos = function () {
                    // input group layout
                    $('#'+self.identity).datepicker({
                        rtl: KTUtil.isRTL(),
                        format: 'dd-mm-yyyy',
                        todayHighlight: true,
                        orientation: "bottom left",
                        templates: arrows,
                        clearBtn: true
                    }).on('changeDate', function(e) {
                        self.$emit('input', e.format('dd-mm-yyyy'));
                        self.$emit('change', e.format('dd-mm-yyyy'));
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
                KTBootstrapDatepicker.init();
            });
        },
        render(createElement) {
            let hintElement = this.hint ? createElement('span', { class: 'form-text text-muted'}, this.hint) : null;
            let errorElement = this.error ? createElement('div', { class: 'invalid-feedback'}, this.error) : null;
            return createElement('div', { class: 'form-group' }, [
                createElement('label', {class: 'col-form-label'}, this.label),
                createElement('div', {class: 'input-group date'}, [
                    createElement('input', {
                        class: 'form-control'+ (this.error ? ' is-invalid ' : ''),
                        attrs: {type: 'text', placeholder: this.placeholder, value: this.value, id: this.identity},
                        on: {
                            change: (event) => {
                                this.$emit('change', event.target.value)
                            }
                        }
                    }),
                    createElement('div', {class: 'input-group-append'}, [
                        createElement('span', {class: 'input-group-text'}, [
                            createElement('i', { class: 'la la-calendar-check-o'})
                        ])
                    ]),
                    errorElement
                ]),
                hintElement
            ])
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../../../../../../../node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css";
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/components/vendors/bootstrap-datepicker/bootstrap-datepicker";
</style>

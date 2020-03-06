<script>
    import {KTUtil} from 'NitsTheme/framework/lib/util';

    require('bootstrap-daterangepicker')

    export default {
        name: "nits-date-range-picker",
        props: {
            label: String,
            placeholder: String,
            value: String,
            hint: String,
            error: String,
            identity: String
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
        },
        mounted() {
            const self = this;

            var KTBootstrapDaterangepicker = function () {

                // Private functions
                var demos = function () {
                    // minimum setup
                    $('#'+self.identity).daterangepicker({
                        buttonClasses: ' btn',
                        applyClass: 'btn-primary',
                        cancelClass: 'btn-secondary',
                        locale: {
                            format: 'DD-MM-YYYY',
                            cancelLabel: 'Clear'
                        }
                    }, function(start, end, label) {
                        $('#'+self.identity).val( start.format('DD-MM-YYYY') + ' / ' + end.format('DD-MM-YYYY'));
                    }).on('apply.daterangepicker', function(e, picker) {
                        const dates = {
                            start_date: picker.startDate.format('DD-MM-YYYY'),
                            end_date: picker.endDate.format('DD-MM-YYYY')
                        }
                        self.$emit('input', JSON.stringify(dates));
                    }).on('cancel.daterangepicker', function(ev, picker) {
                        $(this).val('');
                        self.$emit('input', '');
                    });

                    // $('input[name="datefilter"]')

                }

                return {
                    // public functions
                    init: function() {
                        demos();
                    }
                };
            }();

            jQuery(document).ready(function() {
                KTBootstrapDaterangepicker.init();
            });
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../../../../../../../node_modules/bootstrap-daterangepicker/daterangepicker.css";
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/components/vendors/bootstrap-daterangepicker/bootstrap-daterangepicker";
    @import "./../../../theme/vendors/line-awesome/css/line-awesome.css";
</style>

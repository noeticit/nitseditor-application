<script>
    import {KTUtil} from 'NitsTheme/framework/lib/util';

    require('bootstrap-datetime-picker')

    export default {
        name: "nits-date-time-picker",
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
            var moment = require('moment');

            // Class definition
            var KTBootstrapDatetimepicker = function () {

                // Private functions
                var demos = function () {

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

                    // today button
                    $('#'+self.identity).datetimepicker({
                        todayHighlight: true,
                        autoclose: true,
                        pickerPosition: 'bottom-left',
                        todayBtn: true,
                        format: 'dd/mm/yyyy hh:ii'
                    }).on('changeDate', function(e) {
                        self.$emit('input', moment(e.date).format('DD/MM/YYYY h:mm'));
                        self.$emit('change', moment(e.date).format('DD/MM/YYYY h:mm'));
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
                KTBootstrapDatetimepicker.init();
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
    @import "./../../../../../../../../../node_modules/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css";
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/components/vendors/bootstrap-timepicker/bootstrap-timepicker";
    @import "./../../../theme/vendors/line-awesome/css/line-awesome.css";
</style>

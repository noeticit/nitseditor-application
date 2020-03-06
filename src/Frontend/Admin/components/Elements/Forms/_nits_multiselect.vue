<template>
    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">{{ label }}</label>
        <div class="col-lg-4 col-md-9 col-sm-12">
            <select
                :class="'form-control kt-selectpicker' + (this.error ? ' is-invalid ' : '')"
                multiple data-actions-box="true"
                v-model="multiselect"
                :title="placeholder"
                :data-live-search="live_search"
                :data-live-search-placeholder="live_search_placeholder"
            >
                <option
                    v-for="item in options"
                    :value="item.value"
                    :data-icon="'la '+ item.icon" :data-subtext="item.subtext"
                >
                    {{ item.name }}
                </option>
            </select>
            <div v-if="error" class="invalid-feedback">{{ this.error }}</div>
        </div>
    </div>
</template>

<script>
    require('bootstrap-select')

    export default {
        name: "nits-multiselect",
        props: {
            options: Array,
            label: String,
            placeholder: String,
            live_search: Boolean,
            live_search_placeholder: String,
            error: String
        },
        data() {
            return {
                multiselect: []
            }
        },
        mounted() {

            const self = this;
            // Class definition

            var KTBootstrapSelect = function () {

                // Private functions
                var demos = function () {
                    // minimum setup
                    $('.kt-selectpicker').selectpicker().on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
                        // do something...
                        self.$emit('input', self.multiselect);
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
                KTBootstrapSelect.init();
            });
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../../../../../../../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css";
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/core/bootstrap/_variables.scss";
    @import "./../../../theme/framework/components/vendors/bootstrap-select/bootstrap-select";
</style>

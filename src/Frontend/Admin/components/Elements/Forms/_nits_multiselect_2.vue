<template>
    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">{{ label }}</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
            <select
                :class="'form-control m-select2' + (this.error ? ' is-invalid ' : '')"
                id="kt_select2_6"
                name="param"
                multiple="multiple"
            >
                <option></option>
            </select>
            <div v-if="error" class="invalid-feedback">{{ this.error }}</div>
        </div>
    </div>
</template>

<script>
    import {getHeader} from 'NitsModels/_config.js'
    require('select2')

    export default {
        name: "nits-multiselect-2",
        props: {
            label: String,
            api: String,
            placeholder: String,
            minimumInputLength: Number,
            error: String
        },
        mounted() {
            const self = this;
            // Class definition
            var KTSelect2 = function() {
                // Private functions
                var demos = function() {

                    // loading remote data

                    function formatRepo(repo) {
                        if (repo.loading) return repo.text;
                        var markup = "<div class='select2-result-repository clearfix'>" +
                            "<div class='select2-result-repository__meta'>" +
                            "<div class='select2-result-repository__title'>" + repo.name + "</div>";
                        if (repo.description) {
                            markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
                        }
                        return markup;
                    }

                    function formatRepoSelection(repo) {
                        return repo.name || repo.text;
                    }

                    $("#kt_select2_6").select2({
                        placeholder: self.placeholder,
                        // tags: true,
                        allowClear: true,
                        ajax: {
                            headers: getHeader(),
                            url: self.api,
                            dataType: 'json',
                            delay: 250,
                            data: function(params) {
                                return {
                                    search: params.term, // search term
                                };
                            },
                            processResults: function(data, params) {
                                return {
                                    results: data.data,
                                };
                            },
                            cache: true
                        },
                        escapeMarkup: function(markup) {
                            return markup;
                        }, // let our custom formatter work
                        minimumInputLength: self.minimumInputLength,
                        templateResult: formatRepo, // omitted for brevity, see the source of this page
                        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                    }).on('change', function (e, args) {
                        if (!(args && "ignore" in args)) {
                            self.$emit('input', $(this).val());
                        }
                    });

                }

                // Public functions
                return {
                    init: function() {
                        demos();
                    }
                };
            }();

            // Initialization
            jQuery(document).ready(function() {
                KTSelect2.init();
            });
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../../../../../../../node_modules/select2/dist/css/select2.min.css";
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/core/bootstrap/_variables.scss";
    @import "./../../../theme/framework/components/vendors/select2/_select2.scss";
</style>

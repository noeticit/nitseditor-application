<template>
    <div class="jsmaps-wrapper" id="india-map"></div>
</template>

<script>
    export default {
        name: "nits-vector-map",
        mounted() {
            require('./jsmaps/jsmaps-libs.js')
            require('./jsmaps/jsmaps-panzoom.js')
            require('./jsmaps/jsmaps.min.js')
            require('./maps/india.js')
            $(function() {

                $('#india-map').JSMaps({
                    map: 'india'
                });

            });
        }
    }
</script>

<style scoped>
    @import "jsmaps/jsmaps.css";
</style>

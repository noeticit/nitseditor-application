<template>
    <div style="height: 100%;">
        <div v-if="logged" style="height: 100%;">
            <layout-three></layout-three>
        </div>
        <div v-else style="height: 100%;">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import {eventBus} from 'NitsModels/_events.js';

    export default {
        name: "admin",
        data() {
            return {
                logged: false,
            }
        },
        created() {
            eventBus.$on('log-out', () => {
                this.$router.push({path: '/'});
                this.logged = false
            });
        },
        watch: {
            '$route' (to, from) {
                // react to route changes...
                if(to.meta.requiresAuth && !from.meta.requiresAuth)
                    this.logged = true
                if(!to.meta.requiresAuth && from.meta.requiresAuth)
                    this.logged = false
            }
        }
    }
</script>

<style lang="scss">
    // 1: Include global config
    @import "../sass/theme/config";

    // 2: Include demo config (that overrides the above global config)
    @import "../sass/theme/demos/demo1/config";

    // 3: Bootstrap Include
    @import "../sass/bootstrap/variables";
    @import "./../../../../../../../node_modules/bootstrap/scss/bootstrap";
    @import "../sass/bootstrap/bootstrap.scss";

    // 4: Core Include
    @import "../sass/theme/core/include";

    // 5: Demo Configs
    @import "../sass/theme/demos/demo1/header/config";

    @import "../sass/theme/demos/demo1/brand/config";

    @import "../sass/theme/demos/demo1/aside/config";

    @import "../sass/theme/demos/demo1/footer/config";


    // 6: Demo Includes
    // Layout
    @import "../sass/theme/demos/demo1/base/base";

    @import "../sass/theme/demos/demo1/header/header";
    @import "../sass/theme/demos/demo1/header/base-mobile";
    @import "../sass/theme/demos/demo1/header/menu";
    @import "../sass/theme/demos/demo1/header/topbar";

    @import "../sass/theme/demos/demo1/brand/brand";

    @import "../sass/theme/demos/demo1/aside/aside";

    @import "../sass/theme/demos/demo1/content/content";

    @import "../sass/theme/demos/demo1/footer/footer";

    // Icons
    @import "../theme/vendors/fontawesome5/css/all.min.css";
    @import "../theme/vendors/flaticon/flaticon.css";
    @import "../theme/vendors/flaticon2/flaticon.css";
    @import "../theme/vendors/line-awesome/css/line-awesome.css";

</style>

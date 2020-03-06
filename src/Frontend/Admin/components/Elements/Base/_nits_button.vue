<template>
    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" @click.prevent="check">
        Add S...
    </div>
</template>

<script>
    export default {
        name: "nits-button",
        methods: {
            check() {
                this.$emit('click')
            }
        }
    }
</script>

<style scoped>

</style>

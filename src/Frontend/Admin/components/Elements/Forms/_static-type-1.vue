<template>
    <div>
        <label>
            {{ label }}
        </label>
        <p class="form-control-static">
            {{ message }}
        </p>
    </div>
</template>

<script>
    export default {
        name: "static-type-1",
        props: ['label', 'message']
    }
</script>

<style scoped>

</style>
<template>
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{ title }}
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la" :class="icon"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator" v-if="heading">
                        -
                    </li>
                    <li class="m-nav__item ">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                {{ heading }}
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator" v-if="description">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                {{ description }}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "base_subheader",
        props: ['title', 'icon', 'heading', 'description']
    }
</script>

<style lang="css" scoped>
    .m-subheader {
        height: 75px;
    }
    .m-subheader__breadcrumbs {
        height: 75px;
    }
</style>
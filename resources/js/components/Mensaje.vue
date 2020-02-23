<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
        <template v-slot:aside>
            <b-img blank rounded="circle" blank-color="#ccc" width="45" height="45" alt="placeholder"></b-img>
        </template>
        <b-card>
            <slot></slot>                       
        </b-card>
    </b-media>
</template>

<script>
    export default {
        props: {
            writtenByMe: Boolean
        },
        data() {
            return {
                contenido: ''
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>
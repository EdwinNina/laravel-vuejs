<template>
    <div>
        <b-form class="my-3 mx-2">
            <b-form-input class="text-center" type="text" placeholder="Buscar contacto ..."></b-form-input>
        </b-form>
        <b-list-group>
            <contacto-component variant="dark"></contacto-component>
            <contacto-component></contacto-component>
            <contacto-component variant="secondary"></contacto-component>
        </b-list-group>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>
<template>
    <div>
        <b-form class="my-3 mx-2">
            <b-form-input class="text-center" type="text" placeholder="Buscar contacto ..."></b-form-input>
        </b-form>
        <b-list-group>
            <contacto-component v-for="conversacion in conversaciones" :key="conversacion.id"
                :conversacion="conversacion"
                class="contacto"
                @click.native="seleccionarConversacion(conversacion)"
            ></contacto-component>
        </b-list-group>
    </div>
</template>

<script>
    export default {
        mounted () {
            this.obtenerConversaciones();
        },
        data() {
            return {
                conversaciones : []
            }
        },
        methods: {
            async obtenerConversaciones() {
                const response = await axios.get('api/conversaciones');
                this.conversaciones = response.data;
            },
            seleccionarConversacion(conversacion){
                this.$emit('conversacionSeleccionada', conversacion);
            }
        },

    }
</script>

<style>
    .contacto{
        cursor: pointer;
    }
</style>
<template>
    <b-container fluid style="height: calc(100vh - 107px);">
        <b-row class="h-100">
            <b-col cols="4">
                    <lista-contactos-component @conversacionSeleccionada="cambiarConversacion($event)"></lista-contactos-component>
            </b-col>
            <b-col cols="8" >
                <transition name="fade">
                    <conversacion-activa-component 
                        v-if="conversacionSeleccionada"
                        :contacto="conversacionSeleccionada"
                        :mensajes="mensajes"
                    ></conversacion-activa-component>
                </transition>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        props: {
            userId: Number
        },
        mounted () {
            Echo.channel('example')
                .listen('MessageSent', data => {
                    const mensajes = data.message; 
                    mensajes.written_by_me = (this.userId == mensajes.from_id);
                    this.mensajes.push(mensajes);
            });
        },
        data() {
            return {
                conversacionSeleccionada: null,
                mensajes: []
            }
        },
        methods: {
            cambiarConversacion(conversacion) {
                this.conversacionSeleccionada = conversacion;
                this.obtenerMensajes();
            },
            async obtenerMensajes() {
                const response = await axios.get(`api/mensajes?contact_id=${this.conversacionSeleccionada.contact_id}`)
                this.mensajes = response.data;
            }

        },        
    }
</script>
<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s;
    }
    .fade-enter, .fade-leave-to{
        opacity: 0;
    }
</style>


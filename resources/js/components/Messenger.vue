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
                    ></conversacion-activa-component>
                </transition>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        data() {
            return {
                conversacionSeleccionada: null
            }
        },
        methods: {
            cambiarConversacion(conversacion) {
                this.conversacionSeleccionada = conversacion;
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


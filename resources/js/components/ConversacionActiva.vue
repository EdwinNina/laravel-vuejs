<template>
    <b-row class="h-100">
        <b-col cols="8" class="h-100">
            <b-card class="h-100" title="Conversacion activa" footer-border-variant="dark" footer-bg-variant="info">
                <mensaje-component v-for="mensaje in mensajes" :key="mensaje.id"
                    :written-by-me="mensaje.written_by_me"
                >
                    {{mensaje.content}}
                </mensaje-component>
            </b-card>
            <div slot="footer">
                <b-input-group>
                    <b-form-input class="text-center" type="text" v-model="contenido"
                        placeholder="Enviar mensaje ...." @keydown.enter="enviarMensaje()"></b-form-input>
                    <b-input-group-append>
                        <b-button variant="outline-primary" @click="enviarMensaje()">Enviar</b-button>
                    </b-input-group-append>
                </b-input-group>
            </div>
        </b-col>
        <b-col cols="4" class="text-center">
            <b-img rounded="circle" blank with="60" height="60" blank-color="#777" class="m-1" />
            <p>Usuario seleccionado</p>
            <hr>
            <b-form-checkbox>Desactivar notificaciones</b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        mounted () {
            this.obtenerMensajes();
        },  
        data() {
            return {
                mensajes: [],
                contenido: ''
            }
        },
        methods: {
            async obtenerMensajes() {
                const response = await axios.get('api/mensajes')
                this.mensajes = response.data;
            },
            async enviarMensaje(){
                const response = await axios.post('api/mensajes',{
                    'to_id' : 2,
                    'content' : this.contenido
                });
                if(response.data.success){
                    this.contenido = '';
                    this.obtenerMensajes();
                }
            }
        },      
    }
</script>

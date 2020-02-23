<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img rounded="circle" blank with="60" height="60" blank-color="#777" class="m-1" />
            </b-col>
            <b-col cols="7" align-self="center" class="d-none d-md-block">
                <p class="mb-0">{{ nombre }}</p>
                <span class="text-muted small">{{ ultimoMensaje }}</span>
            </b-col>
            <b-col cols="2" align-self="center" class="d-none d-md-block">
                <span class="text-muted small">{{ ultimaVez }}</span>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props: ['variant'] ,
        data() {
            return {
                nombre: 'Edwin Nina',
                ultimoMensaje: 'Tu: Hasta mañana',
                ultimaVez: '1:37 pm',
            }
        },
    }
</script>

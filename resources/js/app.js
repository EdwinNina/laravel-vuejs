require('./bootstrap');

window.Vue = require('vue');

import {BootstrapVue, IconsPlugin} from 'bootstrap-vue';

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.component('messenger-component', require('./components/Messenger.vue').default);
Vue.component('contacto-component', require('./components/Contacto.vue').default);
Vue.component('lista-contactos-component', require('./components/ListaContactos.vue').default);
Vue.component('conversacion-activa-component', require('./components/ConversacionActiva.vue').default);
Vue.component('mensaje-component', require('./components/Mensaje.vue').default);

const app = new Vue({
    el: '#app',
    methods: {
        logout() {
            document.getElementById('logout-form').submit();
        }
    },
});

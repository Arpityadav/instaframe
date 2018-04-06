import './bootstrap';


Vue.use(BootstrapVue);

import { Navbar } from 'bootstrap-vue/es/components';

Vue.use(Navbar);

import { Modal } from 'bootstrap-vue/es/components';

Vue.use(Modal);

import { Button } from 'bootstrap-vue/es/components';

Vue.use(Button);

new Vue({
    el: '#app'
});

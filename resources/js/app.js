require('./bootstrap');

window.Vue = require('vue');

import "./plugins/vee-validate";
import "./plugins/vue-snotify";
import "./plugins/vue-wysiwyg";

Vue.prototype.$learningBus = new Vue;

Vue.component('topics', require('./components/Topics/Topics.vue').default);

const app = new Vue({
    el: '#app',
});

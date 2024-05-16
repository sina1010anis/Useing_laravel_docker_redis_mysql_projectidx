import './bootstrap';
alert('test')
import {createApp} from 'vue';
import TestPage from "./Pages/TestPage.vue";

createApp({
    data:()=>({
        version: "Vue 3.4"
    }),
    components:{
        TestPage:TestPage
    }

}).mount('#app')
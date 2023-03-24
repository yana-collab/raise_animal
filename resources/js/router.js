import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

// import Index from "./views/Index";
import App from './App.vue'
import Animals from './components/Animals.vue'
import AnimalsTypes from './components/AnimalsTypes.vue'


const routes = [
    {
        path: "/",
        component: App
    },
    {
        path: "/animals",
        component: Animals
    },
    {
        path: "/categories",
        component: AnimalsTypes
    },
    // {
    //     path: "/create",
    //     component: CreatePost
    // }
];

export default new VueRouter({
    mode: "history",
    routes
});

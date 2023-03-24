import {createRouter, createWebHistory} from "vue-router";
import Animals from "../components/Animals.vue";
import AnimalsTypes from "../components/AnimalsTypes.vue";

const routes = [
    {
        path: "/animals",
        name: 'animals',
        component: Animals
    },
    {
        path: "/categories",
        name: 'categories',
        component: AnimalsTypes
    },
    {
        path: "/animals/:id",
        name: 'showOne',
        component: ''
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;

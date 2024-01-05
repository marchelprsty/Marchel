//import vue router
import { createRouter, createWebHistory } from 'vue-router'

//define a routes
const routes = [{
        path: '/',
        name: 'home',
        component: () => import( /* webpackChunkName: "home" */ '../pages/home.vue')
    },
    {
        path: '/mahasiswa',
        name: 'mahasiswa.index',
        component: () => import( /* webpackChunkName: "index" */ '../pages/mahasiswa/index.vue')
    },
    {
        path: '/create',
        name: 'mahasiswa.create',
        component: () => import( /* webpackChunkName: "create" */ '../pages/mahasiswa/create.vue')
    },
    {
        path: '/edit/:id',
        name: 'mahasiswa.edit',
        component: () => import( /* webpackChunkName: "edit" */ '../pages/mahasiswa/edit.vue')
    }
]

//create router
const router = createRouter({
    history: createWebHistory(),
    routes // <-- routes,
})

export default router
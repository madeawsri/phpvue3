import { createRouter, createWebHistory } from 'vue-router'

import Layouts from "../components/layouts";
import Home from "../pages/Home";

export default createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', redirect: { name: 'Home' } },
        {
            path: '/dashboard',
            component: Layouts,
            children: [
                { path: '/', redirect: { name: 'Home' } },
                { path: 'home', name: 'Home', component: Home }
            ]
        }
    ]
});
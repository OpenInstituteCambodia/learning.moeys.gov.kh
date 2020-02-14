import Vue from 'vue'
import Router from 'vue-router';

Vue.use(Router)

// Pages
import IndexPage from './pages/Index.vue'

const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: IndexPage
        }
    ]
});

export { router };

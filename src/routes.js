import Router from 'vue-router';

// Pages
import IndexPage from './pages/Index.vue'

const router = new Router({
    routes: [
        {
            path: '/',
            component: IndexPage
        }
    ]
});

export { router };

import Router from 'vue-router';

// Pages
import IndexPage from './components/Index.vue'

const router = new Router({
    routes: [
        {
            path: '/',
            component: IndexPage
        }
    ]
});

export { router };

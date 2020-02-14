import Vue from 'vue'
import App from '@/App.vue'
import { router } from '@/routes';
import VueMeta from 'vue-meta'

Vue.use(VueMeta, {
  // optional pluginOptions
  refreshOnceOnNavigation: true
})

Vue.config.productionTip = false

const application = new Vue({
  metaInfo: {
    title: 'Leanring Platform',
    titleTemplate: '%s - MoEYS!',
    htmlAttrs: {
      lang: 'en',
    }
  },
  router,
  render: h => h(App),
}).$mount('#app')

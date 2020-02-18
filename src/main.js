import Vue from 'vue'
import VueMeta from 'vue-meta'

import { router } from '@/routes'
import App from '@/App.vue'

Vue.use(VueMeta, {
  // optional pluginOptions
  refreshOnceOnNavigation: true
})

Vue.config.productionTip = false

const application = new Vue({
  router,
  render: h => h(App),
})

application.$mount('#app')

if (process.env.NODE_ENV === 'development') {
  window['#app'] = application

  console.group('process.env')
  console.table(process.env)
  console.groupEnd()
}

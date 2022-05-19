import IndexField from './components/IndexField.vue'
import DetailField from './components/IndexField.vue'
import FormField from './components/IndexField.vue'

Nova.booting((Vue, router, store) => {
  Vue.component('index-unit-picker',IndexField)
  Vue.component('detail-unit-picker', DetailField)
  Vue.component('form-unit-picker', FormField)
})

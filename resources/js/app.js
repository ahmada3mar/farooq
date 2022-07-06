import { createApp, h } from 'vue'
import  {translations}  from './translation'
import { createInertiaApp , Head, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Shared/Layout.vue'
import Accordion from './Shared/Accordion.vue'



createInertiaApp({
  resolve: async name => {
    let page = (await import(`./Pages/${name}`)).default;
    page.layout ??= Layout;

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(Accordion)
      .component("Head", Head)
      .component("Link", Link)
      .mixin(translations)
      .mount(el);
  },
  title: title => 'Farooq' + (title ? ` | ${title}` : ''),
})


InertiaProgress.init({
  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 250,

  // The color of the progress bar.
  color: '#29d',

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: false,
})



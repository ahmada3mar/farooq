import Tool from './components/Tool.vue'
Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'generate-cards',
      path: '/generate-cards',
      component: Tool,
    },
  ])
})



Nova.booting((Vue, router) => {
    Vue.component('index-unit-picker', require('./components/IndexField').default);
    Vue.component('detail-unit-picker', require('./components/DetailField').default);
    Vue.component('form-unit-picker', require('./components/FormField').default);
});

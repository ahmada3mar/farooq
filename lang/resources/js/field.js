import IndexField from "./components/IndexField"
import DetailField from "./components/DetailField"
import FormField from "./components/FormField"
import LanguageSelector from "./components/LanguageSelector"
import Tool from "./components/Tool"

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

Nova.booting((Vue, router) => {
    Vue.component('index-multilingual-nova', IndexField);
    Vue.component('detail-multilingual-nova',DetailField);
    Vue.component('form-multilingual-nova', FormField);

    Vue.component('language-selector', LanguageSelector);

    router.addRoutes([
        {
            name: 'nova-language-tool',
            path: '/nova-language-tool',
            component: Tool,
        },
    ])

    let locale = getParameterByName('locale');
    if (locale) {
        Nova.request().defaults.headers['locale'] = locale;
    }
})

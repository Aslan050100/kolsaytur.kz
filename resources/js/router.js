
import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router);
function PageComponent(name) {
    return {
        render: h => h('h3', `Hello from the ${name} page`)
    };
}
export default new Router({
    mode: 'history',
    routes: [
        { path: '/', component: PageComponent('Landing'), name: 'landing' },
        { path: '/detail:id', component: PageComponent('LandingForHotels'), name: 'detail' },
    ]
});

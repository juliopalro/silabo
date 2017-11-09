const Foo = { template: '<teachers-list></teachers-list>' }
const Bar = { template: '<app></app>' }

const routes = [
  { path: '/', component: Foo },
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar }
]

const router = new VueRouter({
  mode: 'history',
  routes // forma corta para routes: routes
})
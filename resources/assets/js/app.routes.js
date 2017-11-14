const Teachers = { template: '<teachers></teachers>' }
const Dashboard = { template: '<dashboard></dashboard>' }

const routes = [
  { path: '/', component: Dashboard },
  { path: '/teachers', component: Teachers }
]

const router = new VueRouter({
  mode: 'history',
  routes // forma corta para routes: routes
})
const Dashboard = { template: '<dashboard></dashboard>' }
const Teachers = { template: '<teachers></teachers>' }
const TeachersCreate = { template: '<teachers-create></teachers-create>' }

const routes = [
  { path: '/', component: Dashboard },
  { path: '/teachers', component: Teachers },
  { path: '/teachers/create', component: TeachersCreate }
]

const router = new VueRouter({
  mode: 'history',
  routes // forma corta para routes: routes
})
const TeachersList = { template: '<teachers></teachers>' }
const App = { template: '<app></app>' }

const routes = [
  { path: '/', component: App },
  { path: '/teachers', component: TeachersList }
]

const router = new VueRouter({
  mode: 'history',
  routes // forma corta para routes: routes
})
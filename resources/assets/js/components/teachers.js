Vue.component('teachers', {
  template: `
  <div class="grid-x">
    <div class="cell">
      <h1>Lista de profesores 
      <router-link to="/teachers/create" class="button"><i class="fa fa-plus"></i> Nuevo profesor</router-link>
      </h1>
    </div>

    <div class="cell">
      <table class="radius bordered shadow">
        <thead>
          <tr>
            <th class="text-center" width="30%">Nombre completo</th>
            <th class="text-center">Cursos</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="teacher in teachers">
            <td>
              <a :href="'teachers/'+teacher.id">{{teacher.name}} <i class="fa fa-eye"></i></a>
            </td>
            <td>
              <ul class="fa-ul">
                <li v-for="course in teacher.courses">
                  <a :href="'courses/'+course.id"><i class="fa-li fa fa-check-square"></i> {{course.name}}</a>
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  `,
  data: function () {
    return {
      apiUrl: 'http://silabo.app/api/v1/',
      teachers: []
    }
  },
  created: function() {
    this.requestTeachers();
  },
  methods: {
    requestTeachers: function () {
      axios.get(this.apiUrl + 'teachers').then(response => {
        this.teachers = response.data.teachers
      });
    }
  },
})
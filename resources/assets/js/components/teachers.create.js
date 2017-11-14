Vue.component('teachers-create', {
  template: `
  <div class="grid-x">
    <div class="cell">
     <h1>Vista de creación de un profesor</h1>
    </div>

    <div class="cell">
      <form method="post" action="/teachers" accept-charset="UTF-8" data-abide novalidate>

        <div class="columns large-12">
          <div class="columns large-12">
            <label for="code">Código
              <input type="text" id="code" name="code" placeholder="Código del profesor">
            </label>
          </div>
          <div class="columns large-12">
            <label for="name">Nombres
              <input type="text" id="name" name="name" placeholder="Nombres" required>
            </label>
          </div>
          <div class="columns large-12">
            <label for="last_name">Apellidos
              <input type="text" id="last_name" name="last_name" placeholder="Apellidos" required>
            </label>
          </div>
          <div class="columns large-12">
            <label for="position">Cargo del docente
              <input type="text" id="position" name="position" placeholder="Cargo de docente">
            </label>
          </div>
        </div>

        <div class="columns medium-12 text-right">
          <button type="submit" class="button"><i class="fa fa-save"></i> Crear</button>
            <a href="/teachers" class="button"><i class="fa fa-list"></i> Volver a la lista</a>
        </div>
      </form>
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
    
  },
  methods: {
    requestTeachers: function () {
      axios.get(this.apiUrl + 'teachers').then(response => {
        this.teachers = response.data.teachers
      });
    }
  },
})
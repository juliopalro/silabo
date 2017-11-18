<template>
    <div class="container">
        <h1>Lista de profesores</h1>
        <table class="table">
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
</template>

<script>
    export default {
        data () {
            return {
                teachers: []
            }
        },
        created ()  {
            this.requestTeachers();
        },
        methods: {
            requestTeachers: function () {
                axios.get('http://silabo.app/api/teachers').then(response => {
                    this.teachers = response.data.teachers
                });
            }
        }
    }
</script>

Vue.component('teachers', {
  template:
  `
  <div>{{ message }}</div>
  `,
  data: function () {
    return {
      counter: 0,
      message:'hola component teacher-list'
    }
  },
  methods: {
    incrementCounter: function () {
      this.counter += 1
      this.$emit('increment')
    }
  },
})